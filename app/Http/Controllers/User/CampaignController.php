<?php

namespace App\Http\Controllers\User;

use App\Common;
use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Mask;
use App\Models\Recharge;
use App\Models\sms_senders;
use App\Models\Template;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        $users= Auth::user();
        $masks = Mask::whereIn('id',explode(",", $users->mask))->get();
        $count = $masks->count();
        $templates = Template::where('user_id',$users->id)->paginate('5');
        $campaigns = Campaign::where('user_id', $users->id)->orderBy('id', 'DESC')->paginate(5);
        $groups = Group::where('user_id', $users->id)->where('type',1)->get();
    
        return view('user.management.campaign.new_campaign',compact('users','masks','count','templates','campaigns','groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createCampaign(Request $request)
    {
        $cgroups = $request->input('groups');
        $user_id = Auth::user()->id;
        $str = count(explode("\n",$request->input('campaign_message'))); // Line
        $exact = strlen(utf8_decode($request->input('campaign_message')));// Total Chrac

        $stringlength = $exact - $str + 1;
        // $message = str_replace(["\r\n", "\r", "\n"], " ", $request->input('campaign_message'));
        $message = $request->input('campaign_message');
    
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

        $parent_user = Auth::user()->parent_user;
        $admin_users = Common::getAdminUsersID();
        $admin_users = (array) $admin_users;
        $isadmin = in_array($parent_user, $admin_users);
        $totalcost = 0;
        $resellercost = 0;
        $campaign_name = $request->input('campaign_name');
        $type =  $request->input('upload_type');
        $raw_contact = $request->input('raw_msisdn');

        if ($request->input('upload_type') == 'raw') {
            $cgroups = $this->rawContactUpload($raw_contact, $campaign_name, $type);
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
            $cgroups = $this->rawContactUpload($arrData, $request->input('campaign_name'), $request->input('upload_type'));
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
        $balance = $this->currentBalance();
        if ($balance < $totalcost) {
           // echo "hello2";exit;
            $request->session()->flash('error', 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.');
            return response()->json([
                        'msg_type' => 'error',
                        'msg' => 'You do not have sufficiant balance, your sms cost ' . $totalcost . ' but your balance is ' . $balance . ', Please reacharge first.'
            ]);
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
        $campaign->reseller_id = Auth::user()->parent_user;
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

        $sales_id = User::whereId($user_id)->pluck('sales_person')->first();


        if ($campaign->save()) {
            $recharge = new Recharge();
            $recharge->user_id = $user_id;
            $recharge->sales_id = $sales_id;
            $recharge->status = 1;
            $recharge->amount = number_format(-$totalcost , 4, '.', '');
            $recharge->campaign_id = $campaign->id;
            $recharge->comments = $request->input('campaign_name');
            $userbalance = Recharge::where('user_id', $user_id)
                            ->whereNotNull('balance')
                            ->orderBy('id', 'DESC')->first();
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
                    $con_inserts = sms_senders::insert($contacts_arr);
                    $contacts_arr = [];
                }
            }
            $con_inserts = sms_senders::insert($contacts_arr);
            DB::commit();
            if (!$con_inserts) {
                DB::rollback();
            }
            Toastr::success("Campaign created successfully :)",'Success');

        } else {

            Toastr::warning("Campaign creation Failed :)",'Warning');
        }
    }

    public function campaigndetails(Request $request)
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
        if($camp_name){
        $campaigns = Campaign::orderby('campaigns.id','DESC')
        ->where('user_id',$users->id)
        ->orderBy('id', 'DESC')
        ->where('campaign_name', 'LIKE', "%{$camp_name}%")
        ->paginate(5);
        }
        elseif($date_from || $date_to){
            $campaigns = Campaign::orderby('campaigns.id','DESC')
            ->where('user_id',$users->id)
            ->where('created_at', '>=', $date_from . ' 00:00:00')
            ->where('created_at', '<=', $date_to . ' 23:59:59')
            ->paginate(5);
        }
        else{
            $campaigns = Campaign::where('user_id',$users->id)->orderby('id','DESC')->paginate(5);
        }


        

        return view('user.management.campaign.campaign_list',compact('users','campaigns'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */

    public function previewCampaign(Request $request) {
        
        $cgroups = $request->input('groups');
        $user_id = Auth::user()->id;
        $campaign_name = $request->input('campaign_message');

        $validator = Validator::make($request->all(), [
            'campaign_name' => 'required',
            'campaign_message' => 'required'
           ]);
       if ($validator->fails()) {
        return back()->with('alert','Fill up mendatory Data');
          }


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
        }else {
            $unicode = false;
            $strlength = $stringlength;
            if ($strlength > 160) {
                $smsLength = ($strlength / 153);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        }            
            if ($stringlength > 1071) {
            $request->session()->flash('error', 'SMS maximum charecter limit exceeded, max limit 1071.');
            return response()->json([
                       'msg_type' => 'error',
                       'msg' => 'SMS maximum charecter limit exceeded, max limit 1071.'
           ]);
        }

        $parent_user = Auth::user()->parent_user;
        $admin_users = Common::getAdminUsersID();
        $admin_users = (array) $admin_users;
        $isadmin = in_array($parent_user, $admin_users);
        $totalcost = 0;
        $resellercost = 0;
        $res_bal = "Yes";
        $totalcon = 0;
       
        $raw_contact = $request->input('raw_msisdn');
        $type = $request->input('upload_type');

        if ($request->input('upload_type') == 'raw') {
            $rawConData = $this->rawContactCostCount($raw_contact, $mask, $type);
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
            $rawConData = $this->rawContactCostCount($arrData, $mask, $request->input('upload_type'));
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
                $resellercost += $this->resellercostCalculate($user_id, $mask, $smsLength, $g);
            }
        }


        $balance = $this->currentBalance();
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
        if($totalcon == 0){
            return back();
        }
        return response()->json([
                    'success' => true,
                    'campaign_name' => $request->input('campaign_name'),
                    'message' => $request->input('campaign_message'),
                    'totalcost' => number_format($totalcost,4),
                    'smsLength' => $smsLength,
                    'totalContacts' => $totalcon,
                    'remaining_balance' => number_format($rem_bal, 4, '.', ''),
                    'res_bal' => $res_bal
        ]);
    }




  

    public function rawContactCostCount($raw_contact, $masking, $upload_type) {
        $user = Auth::user();
        
        $parent_user = Auth::user()->parent_user;
        $admin_users = Common::getAdminUsersID();
        $admin_users = (array) $admin_users;
        $isadmin = in_array($parent_user, $admin_users);
        
        $user_id = $user->id;
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
                // echo $number. "==" .$price->nonmasking_price."|| \n";
                $totalcost += ($masking =='1' ? $price->masking_price : $price->nonmasking_price);
                if($isadmin == 'false'){          
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


   
    public function costCalculate($user_id, $mask, $smsLength, $gid) {
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
                ->where([
                    'c.user_id' => $user_id,
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

    public function cAlert() {
        $alert = '<script type="text/javascript"> alert("Do you want to continue ?")</script>';
        return $alert;
    }


    public function uniChecker($text) {
        if (strlen($text) != strlen(utf8_decode($text))) {
            return true;
        }
        return false;
    }

    public function rawContactUpload($raw_contact, $campaign_name, $type) {
        $user = Auth::user();
        $user_id = $user->id;
        $parent_id = $user->parent_user;
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
        $contactgroup->status = 2;
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
            if ($pn->sts != '3') {
                $data = [
                    'group_id' => $groupid,
                    'user_id' => $user_id,
                    'reseller_id' => $parent_id,
                    'number' => $pn->pNo,
                    'country_code' => ($pn->cnCd > 0 ? $pn->cnCd : 880), //null
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

  

    

    public function editCampaign(Request $request, $id) {
        $campaign = Campaign::findOrFail($id);
        $date1 = $campaign->start_date;
        $date2 = new \DateTime();
        $date2 = $date2->format('Y-m-d H:i:s');
        if ($date1 < $date2) {
            Toastr::warning('Campaign not found','Warning');
            return redirect('user/campaign');
        }
        return view('user.management.campaign.edit_campaign')->with('campaign', $campaign);
    }

    public function updateCampaign(Request $request, $id) {
       
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
            Toastr::warning('SMS maximum charecter limit exceeded, max limit 1071.','Warning');
            return redirect('/user/edit_campaign/' . $id);
        }
        $camp = Campaign::where('id', $id)->update([
            'campaign_name' => $request->input('campaign_name'),
            'text_body' => $request->input('campaign_message'),
            'sms_count' => $smsLength,
            'start_date' => $request->input('schedule')
        ]);
        if ($camp) {
            Toastr::success('Campaign updated successfully','Warning');
            return redirect('user/campaign');
        } else {
            Toastr::warning('Campaign updated  failed !!!','Warning');
            return redirect('user/edit_campaign/' . $id);
        }
    }

    public function deleteCampaign(Request $request, $id) {
        $campaign = Campaign::findOrFail($id);
        $date1 = $campaign->start_date;
        $date2 = new \DateTime();
        $date2 = $date2->format('Y-m-d H:i:s');
        if ($date1 < $date2) {
            Toastr::warning('Campaign not found !!!','Warning');
            return redirect('user/campaign');
        } else {
            $camp_cost = $campaign->campaign_cost;
            $recharge = new Recharge();
            $user_id = Auth::user()->id;
            $recharge->user_id = $user_id;
            $recharge->status = 1;
            $recharge->amount = $camp_cost;
            $recharge->campaign_id = $id;
            if ($camp_cost > 0) {
                $recharge->comments = "Cost refunded for " . $campaign->campaign_name;
            }
            $userbalance = Recharge::where('user_id', $user_id)->latest()->pluck('balance')->first();
            if ($userbalance > 0) {
                $recharge->balance = ($userbalance + $camp_cost);
            }
            $recharge->save();
//            exit;
            Campaign::where('id', $id)->delete();
            Toastr::success('Campaign deleted successfully !!!','Success');
            return redirect('user/campaign');
        }
    }

    

    public function currentBalance() {
        $user_id = Auth::user()->id;
        $balance = Recharge::where('user_id', $user_id)->latest()->pluck('balance')->first();
        if ($balance > 0) {
            return $balance = $balance;
        } else {
            $balance = 0;
            return $balance;
        }
    }


    public function CostReport(Request $r) {


        $users = Auth::user();

        $date_from = $r->get('from_date');
        $date_to = $r->get('to_date');
        if (empty($date_to)) {
            $date_to = date('Y-m-d');
        }
        $datetime = date('Y-m-d', strtotime('0 days'));

        if($date_from || $date_to){
            $data = DB::table('sms_transactions AS s')
            ->select(DB::raw('date(s.created_at) as date'), DB::raw('SUM(s.price) as total_cost'), DB::raw('SUM(s.sms_count) AS total_sms'), DB::raw('count(*) as total_number')
            )
            ->leftjoin('campaigns as c', 'c.id', '=', 's.campaign_id')
            ->where('s.user_id', Auth::user()->id)
            ->where('s.status', 1)
            ->where('s.created_at', '>=', $date_from . ' 00:00:00')
            ->where('s.created_at', '<=', $date_to . ' 23:59:59')
            ->groupBy(DB::raw('date(s.created_at)'))
            ->orderBy(DB::raw('date(s.created_at)'), 'desc')
            ->paginate(10);
        }else{
            $data = DB::table('sms_transactions AS s')
                    ->select(DB::raw('date(s.created_at) as date'), DB::raw('SUM(s.price) as total_cost'), DB::raw('SUM(s.sms_count) AS total_sms'), DB::raw('count(*) as total_number')
                    )
                    ->leftjoin('campaigns as c', 'c.id', '=', 's.campaign_id')
                    ->where('s.user_id', Auth::user()->id)
                    ->where('s.status', 1)
                    ->groupBy(DB::raw('date(s.created_at)'))
                    ->orderBy(DB::raw('date(s.created_at)'), 'desc')
                    ->paginate(10);
        }



        return view('user.management.campaign.cost_report',compact('users','data'));
    }


   public function Retry(Request $request,$id)
    {
        $resend_time = Campaign::whereId($id)->pluck('updated_at')->first();
        $current_time = date('Y-m-d h:i:s');
        $mint = strtotime($resend_time. ' + 30 minute');
        $newdate = date('Y-m-d H:i:s', $mint);
        // dd($current_time,$newdate);

        if($current_time < $newdate)
        {
            Toastr::warning("Please do retry after 30 min of your last retried!!!",'Warning');
        }
        else
        {
            sms_senders::where('campaign_id',$id)->update(['status' => 1]);
            Campaign::whereId($id)->update(['status' => 4]);
    
            $cam_name = Campaign::whereId($id)->pluck('campaign_name')->first();
            Log::addToLog("$cam_name Campaign set for re-send");
            Toastr::success("Campaign set for re-send :)",'Success');
        }
        return back();
    }

    public function Retry_Old(Request $request,$id)
    {
        $resend_time = Campaign::whereId($id)->pluck('updated_at')->first();
        $current_time = date('Y-m-d h:i:s');
        $mint = strtotime($resend_time. ' + 30 minute');
        $newdate = date('Y-m-d H:i:s', $mint);
        // dd($current_time,$newdate);

        if($current_time < $newdate)
        {
            Toastr::warning("Please do retry after 30 min of your last retried!!!",'Warning');
        }
        else
        {
            $senders = array('status' => 1);
            sms_senders::where('campaign_id',$id)->update($senders);
            $campaign = array('status' => 4,'updated_at' => date('Y-m-d h:i:s'));
            $campaign = Campaign::whereId($id)->update($campaign);
    
            $cam_name = Campaign::whereId($id)->pluck('campaign_name')->first();
            Log::addToLog("$cam_name Campaign set for re-send");
            Toastr::success("Campaign set for re-send :)",'Success');
        }


        return back();
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
}
