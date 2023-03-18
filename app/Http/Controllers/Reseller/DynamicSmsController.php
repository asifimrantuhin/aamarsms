<?php

namespace App\Http\Controllers\Reseller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact_group;
use App\Masks;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Common;
use App\Models\Campaign;
use App\Models\DynamicSMS;
use App\Models\Mask;
use App\Models\Recharge;
use App\Models\Template;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

date_default_timezone_set('Asia/Dhaka');

class DynamicSmsController extends Controller {

    public function DynamicCampaign()
    {
        $users= Auth::user();
        $masks = Mask::whereIn('id',explode(",", $users->mask))->get();
        $count = $masks->count();
        $templates = Template::where('user_id',$users->id)->paginate('5');

        return view('reseller.management.campaign.dynamic',compact('masks','count','templates'));
    }

  

    public function CampaignStore(Request $request) {

        $validator = Validator::make($request->all(), [
                    'campaign_name' => 'required',
                    'campaign_message' => 'required',
                    'uploadfile' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/reseller/dynamic_sms')->withErrors($validator);
        }

        $user_id = Auth::user()->id;
        $campaign_id = 1;
        $total_sms_count = 0;
        $total_sms_cost = 0;
        $campaign_name = $request->input('campaign_name');
        $mask = $request->input('mask');
        $senderid = $request->input('senderid');
        $schedule = $request->input('schedule');
        if (empty($schedule)) {
            $schedule = date('Y-m-d H:i:s');
        }
        if ($request->hasFile('uploadfile')) {
            $path = request()->file('uploadfile')->getRealPath();
            $ext = request()->file('uploadfile')->getClientOriginalExtension();
            $arrData = array();

            $collection = (new FastExcel)->import($path);

            foreach ($collection as $c) {
                $patterns = array();
                $replacements = array();

                foreach ($c as $key => $value) {
                    $key = '/#' . $key . '#/';
                    array_push($patterns, $key);
                    array_push($replacements, $value);
                }
                $message = preg_replace($patterns, $replacements, $request->input('campaign_message'));
                
                $message = trim($message);
                if (strlen($message) != strlen(utf8_decode($message))) {
                    $strlength = strlen(utf8_decode($message));
                    if ($strlength > 70) {
                        $smsLength = ($strlength / 67);
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                    $smstype = 'unicode';
                } else {
                    $strlength = strlen($message);
                    if ($strlength > 160) {
                        $smsLength = ($strlength / 153);
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                    $smstype = 'text';
                }
                $total_sms_count += $smsLength;
                
                $number = array_slice($c, 0, 1, true);
                $number = array_change_key_case($number, CASE_LOWER);

                $num = $this->formatPhoneNumber($number['mobile']);
                if (!empty($num->opCd)) {
                    $price = Common::getPriceByUserId($user_id, $mask, $num->opCd);
                    $total_sms_cost += (($mask == 1 ? $price->masking_price : $price->nonmasking_price) * $smsLength);


                    $obj = array(
                        'user_id' => $user_id,
                        'operator' => $num->opCd,
                        'country_code' => $num->cnCd,
                        'number' => $num->pNo,
                        'message' => $message,
                        'sms_count' => $smsLength,
                        'smstype' => $smstype,
                        'sms_cost' => (($mask == 1 ? $price->masking_price : $price->nonmasking_price) * $smsLength),
                        'status' => 1
                    );


                    array_push($arrData, $obj);
                }
            }
            $count = count($arrData);


            $userbalance = Recharge::where('user_id', $user_id)
                            ->whereNotNull('balance')
                            ->orderBy('id', 'DESC')->first();
            if ($userbalance) {
                $remaining_balance = ($userbalance->balance - $total_sms_cost);
            }
        } else {
            Toastr::warning('No File Upload','Warning');
            return redirect('reseller/dynamic_sms');
        }

        

        return view('reseller.management.campaign.dynamic_preview')->with(array(
                    'items' => $arrData,
                    'campaign_name' => $campaign_name,
                    'message' => $request->input('campaign_message'),
                    'total_number_count' => $count,
                    'total_sms_cost' => round($total_sms_cost, 4),
                    'total_sms_count' => $total_sms_count,
                    'mask' => (isset($mask) ? $mask : ''),
                    'senderid' => (isset($senderid) ? $senderid : ''),
                    'schedule' => (isset($schedule) ? $schedule : ''),
                    'remaining_balance' => (isset($remaining_balance) ? round($remaining_balance, 4) : '0'),
        ));
    }

    public function DynamicStore(Request $request) {

        $user = Auth::user();
        DB::beginTransaction();
        $campaign = new Campaign();
        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->reseller_id = $user->parent_user;
        $campaign->user_id = $user->id;
        
        $campaign->mask = $request->input('mask');
        if ($request->input('mask') == 1) {
            $campaign->sender = $request->input('senderid');
        }
        $campaign->text_body = $request->input('message');
        $campaign->contact_count = $request->input('total_number_count');
        $campaign->sms_count = $request->input('total_sms_count');
        $campaign->campaign_created = Auth::user()->id;
        $campaign->group_id = 0;
        $campaign->dynamic_sms = 1;
        $campaign->campaign_cost = $request->input('total_sms_cost');
        if ($request->input('schedule') != null) {
            $campaign->start_date = $request->input('schedule');
        } else {
            $d = strtotime("+6 Hours");
            $campaign->start_date = date('Y-m-d H:i:s');
        }

        if ($campaign->save()) {
            $total_sms_cost = $request->input('total_sms_cost');
            $recharge = new Recharge();
            $recharge->user_id = $user->id;
            $recharge->status = 1;
            $recharge->amount = -$total_sms_cost;
            $recharge->campaign_id = $campaign->id;
            $recharge->comments = $request->input('campaign_name') . " Campaign";
            $userbalance = Recharge::where('user_id', $user->id)
                            ->whereNotNull('balance')
                            ->orderBy('id', 'DESC')->first();
            if ($userbalance) {
                $recharge->balance = ($userbalance->balance - $total_sms_cost);
            }
            $recharge->save();
            $campaign_id = $campaign->id;


            // ############################## CONTACT INSERT SECTION ######################################### //
            $arrData = json_decode($request->input('dataArr'));
//            print_r($arrData);exit;
            $contacts_arr = array();
            $i = 0;
            $r = count($arrData) % 200;
            foreach ($arrData as $c) {
                $i++;
                $txt = $c->number;
                $c->campaign_id = $campaign_id;
                $data = array(
                    'campaign_id' => $campaign_id,
                    'user_id' => $c->user_id,
                    'operator' => $c->operator,
                    'country_code' => $c->country_code,
                    'number' => $txt,
                    'message' => $c->message,
                    'sms_count' => $c->sms_count,
                    'smstype' => $c->smstype,
                    'sms_cost' => $c->sms_cost,
                    'status' => 1
                );

                $contacts_arr[] = $data;
                if ($i % 200 == 0) {
                    $con_inserts = DynamicSMS::insert($contacts_arr);
                    $contacts_arr = array();
                    $i = 0;
                }
            }
            if ($i == $r) {
                $con_inserts = DynamicSms::insert($contacts_arr);
            }
            DB::commit();
            if (!$con_inserts) {
                DB::rollback();
            }

            if ($con_inserts) {
                
                Toastr::success('Campaign Created Successfully !!!','Success');
                return redirect('reseller/dynamic_sms');
            } else {
                 Toastr::error('Campaign creation Failed !!!','Error');
                return redirect('reseller/dynamic_sms');
            }
        }
    }


    public function DynamicCampaignList(Request $request)
    {
        $users = Auth::user();

        $camp_name = $request->get('campaign_name');
        $date_from = $request->input('from_date');
        $date_to = $request->input('to_date');
        if (empty($date_from)) {
            $date_from = '2019-01-01 00:00:00';
        } else {
            $date_from = $date_from . ' 00:00:00';
        }
        if (empty($date_to)) {
            $date_to = date('Y-m-d H:i:s');
        } else {
            $date_to = $date_to . ' 23:59:59';
        }


        $campaigns = Campaign::where('user_id',Auth::user()->id)
                     ->where('dynamic_sms',1)
                     ->where('campaign_name', 'LIKE', "%{$camp_name}%")
                     ->whereBetween('created_at',[$date_from,$date_to])
                     ->orderBy('id', 'DESC')
                     ->paginate(5);
         


        return view('reseller.management.campaign.dynamic_list',compact('users','campaigns'));
    }

    public function dbCampaign(Request $request) {
        $files = array_diff(scandir('storage/contacts'), array('..', '.'));
        $user_id = Auth::user()->id;
        $ruser = User::findOrFail(Auth::user()->parent_user);

        $rm = explode(',', $ruser->mask);
        $um = Auth::user()->mask;
        $um_arr = explode(',', $um);
        $usermask = array();
        foreach ($um_arr as $m) {
            $arr = in_array($m, $rm);
            if ($arr) {
                array_push($usermask, $m);
            }
        }
        $masks = Masks::whereIn('id', $usermask)->get();


        $rnm = explode(',', $ruser->nonmasking);
        $unonm = Auth::user()->nonmasking;
        $unonm_arr = explode(',', $unonm);
        $usernonmask = array();
        foreach ($unonm_arr as $nm) {
            $nmarr = in_array($nm, $rnm);
            if ($nmarr) {
                array_push($usernonmask, $nm);
            }
        }
        $nonmasking = DB::table('nonmasking')->whereIn('id', $usernonmask)->get();
        $groups = contact_group::where([
                    'user_id' => $user_id,
                    'status' => 1
                ])->get();
        $campaigns = Campaign::where('user_id', $user_id)
                ->orderBy('id', 'DESC')
                ->paginate(10);
//        Common::costAdjust();

        return view('reseller/campaign_management/dbcampaign')->with(['groups' => $groups, 'files' => $files, 'campaigns' => $campaigns, 'masks' => $masks, 'nonmasking' => $nonmasking]);


        
    }

    public function createDBCampaign(Request $request) {
        ini_set('max_execution_time', 0);
        $cgroups = $request->input('groups');
        $validator = Validator::make($request->all(), [
                    'campaign_name' => 'required',
                    'campaign_message' => 'required',
                    'numbergroup' => 'required',
                    'start' => 'required',
                    'limit' => 'required',
        ]);
        if ($validator->fails()) {
            $request->session()->flash('error', 'Fillup mandatory field');
            return response()->json(['msg_type' => 'error', 'msg' => 'Fillup mandatory field']);
        }

        $user_id = Auth::user()->id;

        $mask = $request->input('mask');
        if (strlen($request->input('campaign_message')) != strlen(utf8_decode($request->input('campaign_message')))) {
            $strlength = strlen(utf8_decode($request->input('campaign_message')));
            if ($strlength > 70) {
                $smsLength = ($strlength / 67);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        } else {
            $strlength = strlen($request->input('campaign_message'));
            if ($strlength > 160) {
                $smsLength = ($strlength / 153);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        }
        if ($strlength > 1071) {
            $request->session()->flash('error', 'SMS maximum charecter limit exceeded, max limit 1071.');
            return response()->json([
                        'msg_type' => 'error',
                        'msg' => 'SMS maximum charecter limit exceeded, max limit 1071.'
            ]);
            // return redirect('/user/new-campaign')->withErrors($validator)->with('error', 'SMS maximum charecter limit exceeded, max limit 1071.');
        }


        $totalcost = 0;
        $totalcon = 0;
        $start = $request->input('start');
        $limit = $request->input('limit');
        if ($request->input('numbergroup')) {
            $contactfile = $request->input('numbergroup') . '.txt';
            $contact_file = file_get_contents('storage/contacts/' . $contactfile, true);
            $arr = array_filter(preg_split('/\s+/', $contact_file));
            $contacts = array_slice($arr, $start, $limit);
            $rawConData = $this->rawContactCostCount($contacts, $mask);
            $totalcon = $rawConData[0]['totalContacts'];
            $totalcost = ($rawConData[0]['totalcost'] * $smsLength);
        }
        $balance = common::getCurrentBalanceById($user_id);
        $remaining_balance = ($balance - $totalcost);


        if ($balance < $totalcost) {
            $request->session()->flash('error', 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.');
            return response()->json([
                        'msg_type' => 'error',
                        'msg' => 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.'
            ]);
            // return redirect('/user/new-campaign')->withErrors($validator)->with('error', 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.');
        }

        $senderid = ($mask ? $request->input('masksenderid') : $request->input('nonmasksenderid'));
        DB::beginTransaction();
        $campaign = new Campaign();
        $campaign->reseller_id = Auth::user()->parent_user;
        $campaign->user_id = $user_id;
        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->mask = $request->input('mask');
        $campaign->sender = $senderid;
        $campaign->text_body = $request->input('campaign_message');
        $campaign->sms_count = $smsLength;
        $campaign->group_id = 0;
        $campaign->campaign_cost = $totalcost;
        if ($request->input('schedule') != null) {
            $campaign->start_date = $request->input('schedule');
        } else {
            $campaign->start_date = date('Y-m-d H:i:s');
            if ($totalcost > 100 && $totalcost <= 200) {
                $d = strtotime("+2 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
            if ($totalcost > 200 && $totalcost <= 500) {
                $d = strtotime("+3 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
            if ($totalcost > 500 && $totalcost <= 1000) {
                $d = strtotime("+5 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
            if ($totalcost > 1000) {
                $d = strtotime("+7 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
        }



        if ($campaign->save()) {
            $recharge = new Recharge();
            $recharge->user_id = $user_id;
            $recharge->status = 1;
            $recharge->amount = -$totalcost;
            $recharge->campaign_id = $campaign->id;
            $recharge->comments = $request->input('campaign_name');
            $userbalance = Recharge::where('user_id', $user_id)
                            ->whereNotNull('balance')
                            ->orderBy('id', 'DESC')->first();
            if ($userbalance) {
                $recharge->balance = ($userbalance->balance - $totalcost);
            }
            $r = $recharge->save();
            if (!$r) {
                DB::rollback();
            }

            // $contacts = contacts::whereIn('group_id', $groups)->get();
            $data = array();
            $contacts_arr = array();
            $campaign_id = $campaign->id;
            foreach ($contacts as $c) {
                $pn = $this->formatPhoneNumber($c);
                $time = date('Y-m-d H:i:s');
                $data = [
                    'user_id' => $user_id,
                    'reseller_id' => Auth::user()->parent_user,
                    'group_id' => 0,
                    'campaign_id' => $campaign_id,
                    'operator' => $pn->opCd,
                    'country_code' => $pn->cnCd,
                    'number' => $pn->pNo,
                    'created_at' => $time,
                    'updated_at' => $time,
                    'status' => 1,
                ];
                array_push($contacts_arr, $data);
                if (count($contacts_arr) == 200) {
                    $con_inserts = DB::table('sms_sender_table')->insert($contacts_arr);
                    $contacts_arr = [];
                }
            }
            $con_inserts = DB::table('sms_sender_table')->insert($contacts_arr);
            DB::commit();
            if (!$con_inserts) {
                DB::rollback();
            }



            $request->session()->flash('success', 'Campaign created successfull.');
            return response()->json([
                        'msg_type' => 'success',
                        'msg' => 'Campaign created successfull.'
            ]);
            // return redirect('user/new-campaign')->with('success', 'Campaign created successfull');
        } else {
            $request->session()->flash('error', 'Campaign create failed!');
            return response()->json([
                        'msg_type' => 'error',
                        'msg' => 'Campaign create failed!'
            ]);
            // return redirect('user/new-campaign')->with('error', 'Campaign create failed!');
        }
    }

    public function previewDBCampaign(Request $request) {
        ini_set('max_execution_time', 0);
        $validator = Validator::make($request->all(), [
                    'campaign_name' => 'required',
                    'campaign_message' => 'required',
                    'numbergroup' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/user/db-campaign')->withErrors($validator)->with('error', 'Fillup mandatory field');
        }

        $user_id = Auth::user()->id;

        $mask = $request->input('mask');

        if (strlen($request->input('campaign_message')) != strlen(utf8_decode($request->input('campaign_message')))) {
            $strlength = strlen(utf8_decode($request->input('campaign_message')));
            if ($strlength > 70) {
                $smsLength = ($strlength / 67);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        } else {
            $strlength = strlen($request->input('campaign_message'));
            if ($strlength > 160) {
                $smsLength = ($strlength / 153);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        }
        if ($strlength > 1071) {
            return redirect('/user/db-campaign')->withErrors($validator)->with('error', 'SMS maximum charecter limit exceeded, max limit 1071.');
        }
        //$totalcost = $this->costCalculate($mask, $smsLength, $gid);

        $totalcost = 0;
        $totalcon = 0;
        $start = $request->input('start');
        $limit = $request->input('limit');
        if ($request->input('numbergroup')) {
            $contactfile = $request->input('numbergroup') . '.txt';
            $contact_file = file_get_contents('storage/contacts/' . $contactfile, true);
            $arr = array_filter(preg_split('/\s+/', $contact_file));
            $contacts_arr = array_slice($arr, $start, $limit);
            $rawConData = $this->rawContactCostCount($contacts_arr, $mask);
            $totalcon = $rawConData[0]['totalContacts'];
            $totalcost = ($rawConData[0]['totalcost'] * $smsLength);
        }
        $balance = common::getCurrentBalanceById($user_id);
        $remaining_balance = ($balance - $totalcost);

//        echo "$mask <br/>";
//        echo "$totalcost <br/>";
//        echo "$balance <br/>";
//        echo "$remaining_balance <br/>";
//        echo $totalcon;
//        exit;

        return response()->json([
                    'campaign_name' => $request->input('campaign_name'),
                    'message' => $request->input('campaign_message'),
                    'totalcost' => $totalcost,
                    'smsLength' => $smsLength,
                    'totalContacts' => $totalcon,
                    'remaining_balance' => $remaining_balance
        ]);
    }

    public function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        $phnnumObj = (object) [];
        if (strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
            $areaCode = substr($phoneNumber, -10, 3);
            $lastDigit = substr($phoneNumber, -7, 7);

            $phnnumObj->cnCd = $countryCode;
            $phnnumObj->arCd = $areaCode;
            $phnnumObj->pNo = $areaCode . $lastDigit;
            $phnnumObj->sts = 1;
        } else if (strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $lastDigit = substr($phoneNumber, 3, 7);
            $phnnumObj->cnCd = '880';
            $phnnumObj->arCd = $areaCode;
            $phnnumObj->pNo = $areaCode . $lastDigit;
            $phnnumObj->sts = 1;
        } else {
            $phnnumObj->cnCd = '';
            $phnnumObj->arCd = '';
            $phnnumObj->pNo = '';
            $phnnumObj->sts = 3;
        }

        if ($phnnumObj->arCd != '') {
            // && $phnnumObj->cnCd == '880'
            $op = substr($phnnumObj->arCd, 0, 2);
            $opCode = array(
                array("GP", 13),
                array("BL", 14),
                array("TL", 15),
                array("AL", 16),
                array("GP", 17),
                array("RB", 18),
                array("BL", 19),
            );
            $phnnumObj->opCd = '';
            foreach ($opCode as $opCd) {
                if ($op == $opCd[1]) {
                    $phnnumObj->opCd = $opCd[0];
                }
            }
        } else {
            $phnnumObj->opCd = '';
        }

        return $phnnumObj;
    }

    public function rawContactCostCount($raw_contact, $masking) {
        // echo $masking;exit;
        $user = Auth::user();
        $user_id = $user->id;
        $arrData = array_filter($raw_contact);

        $count = count($arrData);
        $totalcost = 0;
        $totalContacts = 0;
        foreach ($arrData as $number) {
            $pn = $this->formatPhoneNumber($number);
            if ($pn->sts != '3') {
                $price = Common::getPriceByUserId($user_id, $masking, $operator = $pn->opCd);
                $totalcost += ($masking ? $price->masking_price : $price->nonmasking_price);
                $totalContacts += 1;
            } else {
                $invalidno += 1;
            }
        }
        return array([
                'totalcost' => $totalcost,
                'totalContacts' => $totalContacts
        ]);
    }

}
