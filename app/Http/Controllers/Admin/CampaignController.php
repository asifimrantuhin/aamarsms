<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Mask;
use App\Models\NonMask;
use App\Models\Recharge;
use App\Models\sms_senders;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Exports\FailExport;
use App\Exports\SuccessExport;
use App\Helpers\Log;
use App\Models\Contact;
use App\Models\Group;
use App\Models\sms_transactions;
use App\Models\User;
use Rap2hpoutre\FastExcel\FastExcel;
use DB;
use Excel;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users= User::where('parent_user',Auth::user()->id)->get();
        $users= User::get();
        $masks = Mask::get();
        $nonmasks = NonMask::get();
        $templates = Template::where('user_id',Auth::user()->id)->paginate('5');
        $campaigns = Campaign::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        $groups = Group::where('type',1)->get();
    
        return view('admin/management/campaign/new_campaign',compact('users','masks','templates','campaigns','groups','nonmasks'));
    }

    public function downloadFile(Request $request)
    {

        $type = $request->type;
        $campaign = Campaign::where('id',$request->id)->get();
        $campaign_name = $campaign[0]->campaign_name;
        
        $data = sms_senders::where('campaign_id',$request->id)->select('number')->get()->toArray();
        $data= json_decode( json_encode($data), true);


        return Excel::download(new FailExport($data), "$campaign_name.$type");   
       
    }

    public function SMSRatio(Request $request)
    {

        $success = DB::table('sms_transactions')
        ->select([DB::raw("user_id",DB::raw("SUM(mobile_number) as success"))])
        ->groupBy('user_id')
        ->get();

        dd($success);

        $failed = DB::table('sms_sender_table')
        ->select([DB::raw("user_id"), DB::raw("SUM(sms_count) as success")])
        ->groupBy('user_id')
        ->get();

        dd($failed);
    }

    public function SuccessFile(Request $request)
    {

        $type = $request->type;
        $campaign = Campaign::where('id',$request->id)->get();
        $campaign_name = $campaign[0]->campaign_name;
        
        $data = sms_transactions::where('campaign_id',$request->id)->select('mobile_number')->get()->toArray();
        $data= json_decode( json_encode($data), true);


        return Excel::download(new SuccessExport($data), "$campaign_name.$type");   
       
    }

    
    public function create()
    {
        //
    }


    public function createCampaign(Request $request)
    {


        $user_id = $request->input('user_id');
        $str = count(explode("\n",$request->input('campaign_message'))); // Line
        $exact = strlen(utf8_decode($request->input('campaign_message')));// Total Chrac

        $stringlength = $exact - $str + 1;
        $message = str_replace(["\r\n", "\r", "\n"], " ", $request->input('campaign_message'));
        // $request->session()->flash('error', "$exact");
        // $request->session()->flash('error', "$stringlength");
        $mask = $request->input('mask');
        if (strlen($request->input('campaign_message')) != strlen(utf8_decode($request->input('campaign_message')))) {
            $strlength = $stringlength;
            if ($strlength > 70) {
                $smsLength = ($strlength / 67);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        } else {
            $strlength = $stringlength;
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
        }

        $parent_user = User::whereId($user_id)->pluck('parent_user')->first();
        $isadmin = ($parent_user == 1) ? true : false;
        $totalcost = 0;
        $resellercost = 0;

        $campaign_name = $request->input('campaign_name');
        $type =  $request->input('upload_type');
        $raw_contact = $request->input('raw_msisdn');

        if ($request->input('upload_type') == 'raw') {
            $cgroups = $this->rawContactUpload($user_id, $raw_contact, $campaign_name, $type);
            $groups = explode(",", $cgroups);
            $totalcost += $this->costCalculate($user_id, $mask, $smsLength, $cgroups);

            if ($isadmin) {
                //price not calculate for admin
            } else {
                $resellercost += $this->resellercostCalculate($parent_user, $mask, $smsLength, $cgroups);
            }
        }

        if ($request->input('upload_type') == 'file') {
            $path = request()->file('file_msisdn_contact')->getRealPath();
            $ext = request()->file('file_msisdn_contact')->getClientOriginalExtension();
            $arrData = array();
            if ($ext == 'xlsx' || $ext == 'xls') {
                $collection = (new FastExcel)->import($path);
                foreach ($collection as $c) {
                    foreach ($c as $key => $value) {
                        array_push($arrData, $value);
                    }
                }
            } else {
                $arrData = file($path);
            }
            $cgroups = $this->rawContactUpload($user_id, $arrData, $campaign_name, $type);
            $groups = explode(",", $cgroups);
            $totalcost += $this->costCalculate($user_id, $mask, $smsLength, $cgroups);

            if ($isadmin) {
                //price not calculate for admin
            } else {
                $resellercost += $this->resellercostCalculate($parent_user, $mask, $smsLength, $cgroups);
            }
        }


        if ($request->input('upload_type') == 'existinggroup') {

            $cgroups = $request->input('groups');
            $groups = explode(",", $request->input('groups'));

            foreach ($groups as $g) {
                $totalcost += $this->costCalculate($user_id, $mask, $smsLength, $g);
                if ($isadmin) {
                    //price not calculate for admin
                } else {
                    $resellercost += $this->resellercostCalculate($parent_user, $mask, $smsLength, $g);
                }
            }
        }

        if ($isadmin) {
            //for admin
        } else {
            $balance = $this->currentBalance($user_id);

            if ($balance < $totalcost) {
               // echo "hello2";exit;
                $request->session()->flash('error', 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.');
                return response()->json([
                            'msg_type' => 'error',
                            'msg' => 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.'
                ]);
            }
        }

        if ($isadmin) {
            //for admin
        } else {
            $reseller_balance = Common::getCurrentBalanceById($parent_user);

            if (number_format($reseller_balance, 4, '.', '') < $resellercost) {
                $request->session()->flash('error', 'Your Reseller do not have sufficiant balance, your sms cost ' . $totalcost . '. Contact with Reseller. ');
                return response()->json([
                            'msg_type' => 'error',
                            'msg' => 'Your Reseller do not have sufficiant balance, your sms cost ' . $totalcost . '. Contact with Reseller. '
                ]);
            }
        }


        DB::beginTransaction();
        $campaign = new Campaign();
        $campaign->reseller_id = $parent_user;
        $campaign->user_id = $user_id;
        $campaign->campaign_name = $request->input('campaign_name');
        $campaign->mask = $request->input('mask');
        $campaign->sender = $request->input('senderid');
        $campaign->text_body = $message;
        $campaign->sms_count = $smsLength;
        $campaign->group_id = $cgroups;
        $campaign->campaign_created = Auth::user()->id;
        $campaign->campaign_cost = number_format($totalcost, 4, '.', '');
        if ($request->input('schedule') != null) {
            $campaign->start_date = $request->input('schedule');
        } else {
            $campaign->start_date = date('Y-m-d H:i:s');
            if ($totalcost > 100 && $totalcost <= 500) {
                $d = strtotime("+1 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
            
            if ($totalcost > 500 && $totalcost <= 1000) {
                $d = strtotime("+2 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
            if ($totalcost > 1000) {
                $d = strtotime("+3 minute");
                $campaign->start_date = date('Y-m-d H:i:s', $d);
            }
        }

        


        if ($campaign->save()) {
            $recharge = new Recharge();
            $recharge->user_id = $user_id;
            $recharge->status = 1;
            $recharge->amount = number_format(-$totalcost , 4, '.', '');
            $recharge->campaign_id = $campaign->id;
            $recharge->comments = $request->input('campaign_name');
            $userbalance = Recharge::where('user_id', $user_id)->whereNotNull('balance')->orderBy('id', 'DESC')->first();
            
            if (!empty($userbalance)) {
                $rembalance= $userbalance->balance - $totalcost;
                $recharge->balance = $rembalance;
            }
            $r = $recharge->save();
            
            $recharge = new Recharge();
            $recharge->user_id = $parent_user;
            $recharge->status = 1;
            $recharge->amount = number_format(-$resellercost , 4, '.', '');
            $recharge->campaign_id = $campaign->id;
            $recharge->comments = $request->input('campaign_name');
            $reseller_bal = Recharge::where('user_id', $parent_user)
                            ->whereNotNull('balance')
                            ->orderBy('id', 'DESC')->first();
            if (!empty($reseller_bal)) {
                $recharge->balance = ($reseller_bal->balance - $resellercost);
            }
            $r = $recharge->save();
            if (!$r) {
               // DB::rollback();
            }

            $contacts = Contact::whereIn('group_id', $groups)->get();
            $data = array();
            $contacts_arr = array();
            $campaign_id = $campaign->id;
            foreach ($contacts as $c) {
                $time = date('Y-m-d H:i:s');
                $data = [
                    'user_id' => $c['user_id'],
                    'reseller_id' => $c['reseller_id'],
                    'group_id' => $c['group_id'],
                    'campaign_id' => $campaign_id,
                    'operator' => $c['operator'],
                    'country_code' => $c['country_code'],
                    'number' => $c['number'],
                    'created_at' => $time,
                    'updated_at' => $time,
                    'status' => 1,
                ];
                array_push($contacts_arr, $data);
                if (count($contacts_arr) == 200) {
                    sms_senders::insert($contacts_arr);
                    $contacts_arr = [];
                }
            }
            $con_inserts = DB::table('sms_sender_table')->insert($contacts_arr);
            DB::commit();
            if (!$con_inserts) {
                DB::rollback();
            }

            Toastr::success('Campaign Created Successfully','Success');

        } else {
            Toastr::warning('Campaign Created Failed','Failed');
          
        }
    }

    public function previewCampaign(Request $request) {
        
        $cgroups = $request->input('groups');
        $user_id = $request->input('user_id');
        $campaign_name = $request->input('campaign_message');


        $str = count(explode("\n",$request->input('campaign_message'))); // Line
        $exact = strlen(utf8_decode($request->input('campaign_message')));// Total Chrac

        $stringlength = $exact - $str + 1;
        $message = str_replace(["\r\n", "\r", "\n"], " ", $request->input('campaign_message'));
        $mask = $request->input('mask');
       
        $unicode = false;

        if (strlen($request->input('campaign_message')) != strlen(utf8_decode($request->input('campaign_message')))) {
            $strlength = $stringlength;
            $unicode = true;
            if ($strlength > 70) {
                $smsLength = ($strlength / 67);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        } else {

            $strlength = $stringlength;
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
        }

        $parent_user = User::whereId($user_id)->pluck('parent_user')->first();
        $isadmin = ($parent_user == 1) ? true : false;
        $totalcost = 0;
        $resellercost = 0;
        $res_bal = "Yes";
        $totalcon = 0;

        $raw_contact = $request->input('raw_msisdn');
        $type = $request->input('upload_type');

        if ($request->input('upload_type') == 'raw') {
            $rawConData = $this->rawContactCostCount($user_id,$raw_contact, $mask, $type);
            $totalcon = $rawConData[0]['totalContacts'];
            $totalcost = ($rawConData[0]['totalcost'] * $smsLength);
            $resellercost = ($rawConData[0]['resellercost'] * $smsLength);
        }
        if ($request->input('upload_type') == 'file') {
            $path = request()->file('file_msisdn_contact')->getRealPath();
            $ext = request()->file('file_msisdn_contact')->getClientOriginalExtension();
            $arrData = array();
            if ($ext == 'xlsx' || $ext == 'xls') {
                $collection = (new FastExcel)->import($path);
                foreach ($collection as $c) {
                    foreach ($c as $key => $value) {
                        array_push($arrData, $value);
                    }
                }
            } else {
                $arrData = file($path);
            }
            $arrData = array_values(array_unique($arrData));
            $count = count($arrData);
            $rawConData = $this->rawContactCostCount($user_id,$arrData, $mask, $type);
            $totalcon = $rawConData[0]['totalContacts'];
            $totalcost = ($rawConData[0]['totalcost'] * $smsLength);
            $resellercost = ($rawConData[0]['resellercost'] * $smsLength);
        }
        //$groups = explode(",", $request->input('groups'));
        if ($request->input('upload_type') == 'existinggroup') {
            $groups = explode(",", $request->input('groups'));

            foreach ($groups as $g) {
                $totalContacts = Group::where('id', $g)->pluck('contacts_count');
                $totalcon += $totalContacts[0];
                $totalcost += $this->costCalculate($user_id, $mask, $smsLength, $g);
                $resellercost += $this->resellercostCalculate($parent_user, $mask, $smsLength, $g);

            }
        }
        $balance = $this->currentBalance($user_id);
        $rem_bal = ($balance - $totalcost);

        if($totalcon > 10 && $unicode == false){
            return response()->json([
                    'success' => false
            ]);
        }


         if ($isadmin) {
            //for admin
        } else {
            $reseller_balance = Common::getCurrentBalanceById($parent_user);

            if (number_format($reseller_balance, 4, '.', '') < $resellercost) {
                $res_bal = "Not enough balance.";
            }
        }
        return response()->json([
                    'success' => true,
                    'campaign_name' => $request->input('campaign_name'),
                    'message' => $request->input('campaign_message'),
                    'totalcost' => $totalcost,
                    'smsLength' => $smsLength,
                    'totalContacts' => $totalcon,
                    'remaining_balance' => number_format($rem_bal, 4, '.', ''),
                    'res_bal' => $res_bal
        ]);
    }

    
    public function campaigndetails(Request $request)
    {
        $users = Auth::user();
        $customers = User::all();

                $camp_name = $request->get('campaign_name');
                $camp_user = $request->get('camp_user');
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
                if($camp_name){
                    $campaigns = Campaign::orderby('campaigns.id','DESC')
                        ->orderBy('id', 'DESC')
                        ->where('campaign_name', 'LIKE', "%{$camp_name}%")
                        ->paginate(20);
                }
                elseif($camp_user){
                    $campaigns = Campaign::orderby('campaigns.id','DESC')
                        ->orderBy('id', 'DESC')
                        ->where('user_id', $camp_user)
                        ->paginate(20);
                }
                elseif($date_from || $date_to){
                    $campaigns = Campaign::orderby('campaigns.id','DESC')
                    ->where('created_at', '>=', $date_from . ' 00:00:00')
                    ->where('created_at', '<=', $date_to . ' 23:59:59')
                    ->paginate(20);
            }else{
            $campaigns = Campaign::orderby('campaigns.id','DESC')->paginate(20);
            }




        return view('admin.management.campaign.campaign_list',compact('users','campaigns','customers'));
    }

    public function FailedCampaign(Request $request)
    {
        $users = Auth::user();
        $customers = User::all();

                $camp_name = $request->get('campaign_name');
                $camp_user = $request->get('camp_user');
                $date_from = $request->input('from_date');
                $date_to = $request->input('to_date');
                if (empty($date_from)) {
                    $date_from = date('Y-m-d 00:00:00');
                } else {
                    $date_from = $date_from . ' 00:00:00';
                }
                if (empty($date_to)) {
                    $date_to = date('Y-m-d H:i:s');
                } else {
                    $date_to = $date_to . ' 23:59:59';
                }
                $fail = sms_senders::groupBy('campaign_id')->pluck('campaign_id');

                $campaigns = Campaign::whereIn('id',$fail)
                             ->where('campaign_name', 'LIKE', "%{$camp_name}%")
                             ->where('user_id', 'LIKE', "%{$camp_user}%")
                             ->whereBetween('created_at',[$date_from,$date_to])
                             ->orderBy('id','DESC')
                             ->paginate(10);



        return view('admin.management.campaign.fail_list',compact('users','campaigns','customers'));
    }


    public function rawContactUpload($user_id, $raw_contact, $campaign_name, $type) {
        $user = User::where('id', $user_id)->get();
        $user_id = $user[0]->id;
        $parent_id = $user[0]->parent_user;
        // $rawdata = $request->input('raw_msisdn');
        if ($type == 'raw') {
            $arrData = explode(",", $raw_contact);
            $arrData = array_filter($arrData);
        } else {
            $arrData = array_filter($raw_contact);
        }
        $arrData = array_values(array_unique($arrData));
        $count = count($arrData);

        DB::beginTransaction();

        $contactgroup = new Group();
        $contactgroup->name = $campaign_name;
        $contactgroup->contacts_count = $count;
        $contactgroup->parent_id = $parent_id;
        $contactgroup->user_id = $user_id;
        $contactgroup->status = 1;
        $c = $contactgroup->save();
        $groupid = $contactgroup->id;

        $invalidno = 0;

        $batcharray = array();
        $c = 0;
        $r = $count % 200;
        $contact = new Contact();
        foreach ($arrData as $number) {
            $c++;
            $data = array();
            $time = date('Y-m-d H:i:s');
            $pn = $this->formatPhoneNumber($number);
            if (!empty($pn->opCd)) {
                $data = [
                    'group_id' => $groupid,
                    'user_id' => $user_id,
                    'reseller_id' => $parent_id,
                    'number' => $pn->pNo,
                    'country_code' => 880, //null
                    'operator' => $pn->opCd,
                    'status' => ($pn->cnCd > 0 ? $pn->sts : 3),
                    'created_at' => $time,
                    'updated_at' => $time,
                ];

                $batcharray[] = $data;
                if ($c % 200 == 0) {
                    $c_upload = $contact::insert($batcharray);
                    $batcharray = array();
                    $c = 0;
                }
            } else {
                $invalidno += 1;
            }
        }
        if ($c == $r) {
            $c_upload = $contact::insert($batcharray);
        }
        DB::commit();
        if (!$c_upload) {
            DB::rollback();
        }


        return $groupid;
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
            $phnnumObj->sts = 2;
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

    public function rawContactCostCount($user_id,$raw_contact, $masking, $upload_type) {


        $parent_user = User::whereId($user_id)->pluck('parent_user')->first();
        
        $isadmin = ($parent_user == 1) ? true : false;

        
        if ($upload_type == 'raw') {
            $arrData = explode(",", $raw_contact);
            $arrData = array_filter($arrData);
        } else {
            $arrData = array_filter($raw_contact);
        }


        $invalidno = 0;
        $arrData = array_values(array_unique($arrData));
        $count = count($arrData);
        $totalcost = 0;
        $totalContacts = 0;
        $resellercost = 0;
        foreach ($arrData as $number) {
            $pn = $this->formatPhoneNumber($number);
            if ($pn->opCd) {

                $price = Common::getPriceByUserId($user_id, $masking, $operator = $pn->opCd);
        
                $totalcost += ($masking =='1' ? $price->masking_price : $price->nonmasking_price);

                if(!$isadmin){ 
                    $resellerprice = Common::getPriceByUserId($parent_user, $masking, $operator = $pn->opCd);
                    $resellercost += ($masking =='1' ? $resellerprice->masking_price : $resellerprice->nonmasking_price);
                }
                $totalContacts += 1;
            } else {
                $invalidno += 1;
            }
        }
        
        return array([
                'totalcost' => $totalcost,
                'totalContacts' => $totalContacts,
                'resellercost' => $resellercost
        ]);
    }

    public function costCalculate($user_id, $mask, $smsLength, $cgroups) {
        if (empty($user_id)) {
            $user_id = Auth::user()->id;
        }

        $data = \DB::table('contacts as c')
        ->join('rate_plan as r', function ($join) {
            $join->on('r.user_id', '=', 'c.user_id');
            $join->on(function ($query) {
                $query->on('c.operator', '=', 'r.operator');
            });
        })
        ->select(\DB::raw('count(c.operator) as counter'), 'c.operator', ($mask == 1 ? 'r.masking_price' : 'r.nonmasking_price'))
        ->where(['c.user_id' => $user_id,'c.group_id' => $cgroups,])
        ->groupBy('c.operator', ($mask == 1 ? 'r.masking_price' : 'r.nonmasking_price'))
        ->get();

        $totalcost = 0;

        foreach ($data as $val) {
            $price = ($mask == 1 ? $val->masking_price : $val->nonmasking_price);
            $totalcost += ($price * $val->counter * $smsLength);
        }


        return $totalcost;
    }


    public function resellercostCalculate($user_id, $mask, $smsLength, $gid) {

        $data = \DB::table('contacts as c')
                ->join('rate_plan as r', function ($join) {
//                    $join->on('r.user_id', '=', 'c.user_id');
                    $join->on(function ($query) {
                        $query->on('c.operator', '=', 'r.operator');
                    });
                })
                ->select(\DB::raw('count(c.operator) as counter'), 'c.operator', ($mask == 1 ? 'r.masking_price' : 'r.nonmasking_price'))
                ->where([
                    'r.user_id' => $user_id,
                    'c.group_id' => $gid,
                ])
                ->groupBy('c.operator', ($mask == 1 ? 'r.masking_price' : 'r.nonmasking_price'))
                ->get();
        $totalcost = 0;

        foreach ($data as $val) {
            $price = ($mask == 1 ? $val->masking_price : $val->nonmasking_price);
            $totalcost += ($price * $val->counter * $smsLength);
        }

        return $totalcost;
    }

    public function currentBalance($user_id) {
        $balance = Recharge::where('user_id', $user_id)->pluck('balance')->first();
        if ($balance > 0) {
            return $balance = $balance;
        } else {
            $balance = 0;
            return $balance;
        }
    }



    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }


    public function Retry(Request $request,$id)
    {
        $senders = array('status' => 1);
        sms_senders::where('campaign_id',$id)->update($senders);

        $campaign = array('status' => 4);
        $campaign = Campaign::whereId($id)->update($campaign);

        $cam_name = Campaign::whereId($id)->pluck('campaign_name')->first();
        Log::addToLog("$cam_name Campaign set for re-send");
        Toastr::success("Campaign set for re-send :)",'Success');
        return back();
    }
}
