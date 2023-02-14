<?php

namespace App\Http\Controllers;

use App\Common;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\Recharge;
use App\Models\sms_senders;
use App\Models\sms_transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BulkService;
use App\Helpers\Log;
use App\Models\DynamicSMS;
use App\Models\User;
use DB;

date_default_timezone_set("Asia/Dhaka");

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function api(Request $r)
    {
        $response_array["success"] = 0;
        $response_array["message"] = "SMS failed";
        $response_array["response_code"] = 0;
        $response_array["campaign_cost"] = 0;
        

        if (!$r->filled('user')) {
            $response_array["success"] = 0;
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
            return json_encode($response_array);
        }

        if (!$r->filled('password')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
            return json_encode($response_array);
        }

        if (!$r->filled('to')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Recipient empty";
            $response_array["response_code"] = 103;
            return json_encode($response_array);
        }

        if (!$r->filled('text')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Message text empty";
            $response_array["response_code"] = 104;
            return json_encode($response_array);
        }


        $to_number = $r->to;
        $to = $r->to;
        $country_code = "880";
        if (substr($r->to, 0, 3) == "880") {
            $country_code = "880";
            $to_number = substr($to_number, 3);
        } else {
            $to_number = $r->to;
        }

        $mask = $r->from;
        $smstext = $r->text;


        if (Auth::attempt(["email" => $r->user,"password" => $r->password,"status" => 1,"api_enabled" => 1])) {
            $user_id = Auth::user()->id;
            $campaign_id = "";
            $balance = Common::getCurrentBalanceById(Auth::user()->id);
            // echo $balance;exit;
            if ($balance <= 0) {
                $response_array["success"] = 0;
                $response_array["message"] = "No Credits available";
                $response_array["response_code"] = 106;
                return json_encode($response_array);
            }

            if ($r->text !== "" && $r->to !== "") {
                if (strlen($r->text) != strlen(utf8_decode($r->text))) {
                    $strlength = strlen(utf8_decode($r->text));
                    if ($strlength > 70) {
                        $smsLength = $strlength / 67;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                } else {
                    $strlength = strlen($r->text);
                    if ($strlength > 160) {
                        $smsLength = $strlength / 153;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                }

                if ($strlength > 1071) {
                    $response_array["success"] = 0;
                    $response_array["message"] =
                        "SMS maximum charecter limit exceeded, max limit 1071.";
                        $response_array["response_code"] = 108;
                    return json_encode($response_array);
                }
                // print_r($strlength);exit;

                $parent_user = Auth::user()->parent_user;
                $admin_users = Common::getAdminUsersID();
                $admin_users = (array) $admin_users;
                $isadmin = in_array($parent_user, $admin_users);
                $totalcost = 0;
                $resellercost = 0;

                // dd($parent_user,$admin_users,$isadmin);

                $check = Campaign::where('user_id',Auth::user()->id)->whereDate("start_date", date("Y-m-d"))->where("api_sms", 1)->count();
                $check = 0;
                if ($check <= 0) {
                    DB::beginTransaction();
                    // echo $r->text;exit;
                    try {
                        $data = [
                            "campaign_name" => "P2_API " . date("Ymdhis"),
                            "created_at" => date("Y-m-d H:i:s"),
                            "updated_at" => date("Y-m-d H:i:s"),
                            "start_date" => date("Y-m-d H:i:s"),
                            "status" => 4,
                            "user_id" => Auth::user()->id,
                            "campaign_created" => Auth::user()->id,
                            "reseller_id" => Auth::user()->parent_user,
                            "text_body" => "$r->text",
                            "sms_count" => Common::smsCount($r->text),
                            "dynamic_sms" => 0,
                            "mask" => ($r->from !='' ? 1 : 0),
                            "sender" => ($r->from !='' ? $r->from : ""),
                            "api_sms" => 1,
                            "otp_sms" => 1,
                        ];
                        // print_r($data);exit;
                        $campaign_name = "P2_API " . date("Ymdhis");
                       
                       
                        $ResellerCampaignController = new Reseller\CampaignController();


                        if ($r->to != "") {
                            $mask = $r->from ? 1 : 0;
                            $cgroups = $ResellerCampaignController->rawContactUpload(
                                $user_id,
                                $r->to,
                                $campaign_name,
                                "raw"
                            );
                            $groups = explode(",", $cgroups);
                            $totalcost += $ResellerCampaignController->costCalculate(
                                $user_id,
                                $mask,
                                $smsLength,
                                $cgroups
                            );
                            if ($isadmin) {
                                //price not calculate for admin
                            } else {
                                $resellercost += $ResellerCampaignController->resellercostCalculate(
                                    $parent_user,
                                    $mask,
                                    $smsLength,
                                    $cgroups
                                );
                            }
                        }

                        // echo $balance;exit;

                        if ($balance < $totalcost) {
                            $response_array["success"] = 0;
                            $response_array["response_code"] = 106;
                            $response_array["message"] =
                                "You do not have sufficiant balance, your sms cost " .
                                $totalcost .
                                " but your balance is " .
                                $balance .
                                ", Please reacharge first.";
                            return json_encode($response_array);
                        }

                        // print_r($response_array);exit;
                        //Reseller balance check
                        if ($isadmin) {
                            //for admin
                        } else {
                            $reseller_balance = Common::getCurrentBalanceById($parent_user);
                            // print_r($reseller_balance);

                            if (
                                number_format($reseller_balance, 4, ".", "") <
                                $resellercost
                            ) {
                                $response_array["success"] = 0;
                                $response_array["response_code"] = 107;
                                $response_array["message"] =
                                    "Your Reseller do not have sufficiant balance, your sms cost " .
                                    $totalcost .
                                    ". Contact with Reseller. ";
                                return json_encode($response_array);
                            }
                        }

                        $data["group_id"] = $cgroups;
                        $data["campaign_cost"] = number_format($totalcost, 4);
                        //Insert campaign
                        $campaign_id = Campaign::insertGetId($data);

                        $sales_id = User::whereId($user_id)->pluck('sales_person')->first();

                        $recharge = new Recharge();
                        $recharge->user_id = $user_id;
                        $recharge->sales_id = $sales_id;
                        $recharge->status = 1;
                        $recharge->amount = number_format(-$totalcost,4,".","");
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $userbalance = Recharge::where("user_id", $user_id)->latest()->pluck('balance')->first();
                        if (!empty($userbalance)) {
                            $rembalance = $userbalance - $totalcost;
                            $recharge->balance = $rembalance;
                        }

                        $r = $recharge->save();

                        $recharge = new Recharge();
                        $recharge->user_id = $parent_user;
                        $recharge->status = 1;
                        $recharge->amount = number_format(-$resellercost,4,".","");
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $reseller_bal = Recharge::where("user_id", $parent_user)->latest()->pluck('balance')->first();
                        if (!empty($reseller_bal)) {
                            $recharge->balance = $reseller_bal - $resellercost;
                        }
                        $r = $recharge->save();
                        // print_r($resellercost);exit;
                        $contacts = Contact::whereIn("group_id",$groups)->get();
                        $data = [];
                        $contacts_arr = [];
                        $txt = addslashes($smstext);
                        foreach ($contacts as $c) {
                            $time = date("Y-m-d H:i:s");
                            $data = [
                                "user_id" => $c["user_id"],
                                "reseller_id" => $c["reseller_id"],
                                "group_id" => $c["group_id"],
                                "campaign_id" => $campaign_id,
                                "operator" => $c["operator"],
                                "country_code" => $c["country_code"],
                                "number" => $c["number"],
                                "api_text" => addslashes($smstext),
                                "created_at" => $time,
                                "updated_at" => $time,
                                "status" => 1,
                            ];
                            array_push($contacts_arr, $data);
                            if (count($contacts_arr) == 200) {
                                $con_inserts = sms_senders::insert($contacts_arr);
                                $contacts_arr = [];
                            }
                        }

                        $con_inserts = sms_senders::insert($contacts_arr);


                        DB::commit();


                        $response = $this->apiSMSsend($campaign_id);

                         
                        //SOMOSSA EKHNEI apiSMSsend

                        // $response_array["reportsid"] = $campaign_id;
                        $response_array["delivery_status"] = [];

                        $succ = sms_transactions::where('campaign_id', $campaign_id)->where('status', 1)->get();
                        $fail = sms_senders::where('campaign_id', $campaign_id)->where('status', 2)->get();


                        foreach($succ as $s){
                            $data = array();
                            $data['MSISDN'] = $s->mobile_number;
                            $data['Status'] = 1;
                            $data['StatusText'] = "Sent";
                            $data["smsid"] = $campaign_id ."-". $s->mobile_number;
                            $response_array["delivery_status"][] = $data;
                        }
                        foreach($fail as $f){
                            $data = array();
                            $data['MSISDN'] = $f->country_code.$f->number;
                            $data['Status'] = 0;
                            $data['StatusText'] = "Failed";
                            $data["smsid"] = $campaign_id ."-". $f->country_code.$f->number;
                            $response_array["delivery_status"][] = $data;
                        }

                        if (count($contacts) < 2) {
                        }

                        if(count($succ) > 0){
                            $response_array["message"] = "SMS send successfully.";
                            $response_array["success"] = 1;
                            $response_array["response_code"] = 100;
                            $response_array["campaign_cost"] = $totalcost;
                            Log::addToLog("$campaign_name Sent Successfully");

                        }

                        


                    } catch (\Exception $e) {
                        DB::rollback();
                        echo $e->getMessage();
                    }
                } 
            }
        } else {
            $response_array["message"] = "Username or Password is wrong.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
        }

        return json_encode($response_array);
    }


    public function otp(Request $r)
    {
        $response_array["success"] = 0;
        $response_array["message"] = "SMS failed";
        $response_array["response_code"] = 0;
        $response_array["campaign_cost"] = 0;
        

        if (!$r->filled('user')) {
            $response_array["success"] = 0;
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
            return json_encode($response_array);
        }

        if (!$r->filled('password')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
            return json_encode($response_array);
        }

        if (!$r->filled('to')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Recipient no empty";
            $response_array["response_code"] = 103;
            return json_encode($response_array);
        }

        if (!$r->filled('text')) {
            $response_array["success"] = 0;
            $response_array["message"] = "Message text empty";
            $response_array["response_code"] = 104;
            return json_encode($response_array);
        }

        $to_number = $r->to;
        $to = $r->to;
        $country_code = "880";
        if (substr($r->to, 0, 3) == "880") {
            $country_code = "880";
            $to_number = substr($to_number, 3);
        } else {
            $to_number = $r->to;
        }

        $mask = $r->from;

        //echo $mask;exit;



        $smstext = $r->text;

        if (Auth::attempt(["email" => $r->user,"password" => $r->password,"status" => 1,"api_enabled" => 1])) {
            $user_id = Auth::user()->id;
            $campaign_id = "";
            $balance = Common::getCurrentBalanceById(Auth::user()->id);
            // echo $balance;exit;
            if ($balance <= 0) {
                $response_array["success"] = 0;
                $response_array["message"] = "No Credits available";
                $response_array["response_code"] = 106;
                return json_encode($response_array);
            }

            if ($r->text !== "" && $r->to !== "") {
                if (strlen($r->text) != strlen(utf8_decode($r->text))) {
                    $strlength = strlen(utf8_decode($r->text));
                    if ($strlength > 70) {
                        $smsLength = $strlength / 67;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                } else {
                    $strlength = strlen($r->text);
                    if ($strlength > 160) {
                        $smsLength = $strlength / 153;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                }

                if ($strlength > 1071) {
                    $response_array["success"] = 0;
                    $response_array["message"] =
                        "SMS maximum charecter limit exceeded, max limit 1071.";
                        $response_array["response_code"] = 108;
                    return json_encode($response_array);
                }

                $parent_user = Auth::user()->parent_user;
                $admin_users = Common::getAdminUsersID();
                $admin_users = (array) $admin_users;
                $isadmin = in_array($parent_user, $admin_users);
                $totalcost = 0;
                $resellercost = 0;

                $check = Campaign::where("user_id", Auth::user()->id)->whereDate("start_date", date("Y-m-d"))->where("api_sms", 1)->count();
                $check = 0;
                if ($check <= 0) {
                    DB::beginTransaction();
                    // echo $r->text;exit;
                    try {
                        $data = [
                            "campaign_name" => "P2_OTP " . date("Ymdhis"),
                            "created_at" => date("Y-m-d H:i:s"),
                            "updated_at" => date("Y-m-d H:i:s"),
                            "start_date" => date("Y-m-d H:i:s"),
                            "status" => 4,
                            "user_id" => Auth::user()->id,
                            "reseller_id" => Auth::user()->parent_user,
                            "text_body" => "$r->text",
                            "sms_count" => Common::smsCount($r->text),
                            "dynamic_sms" => 0,
                            "mask" => ($r->from !='' ? 1 : 0),
                            "sender" => ($r->from !='' ? $r->from : ""),
                            "api_sms" => 1,
                            "otp_sms" => 1,
                        ];

                       

                        $campaign_name = "P2_OTP " . date("Ymdhis");

                        $ResellerCampaignController = new Reseller\CampaignController();

                        if ($r->to != "") {
                            $mask = $r->from ? 1 : 0;
                            $cgroups = $ResellerCampaignController->rawContactUpload(
                                $user_id,
                                $r->to,
                                $campaign_name,
                                "raw"
                            );
                            $groups = explode(",", $cgroups);
                            $totalcost += $ResellerCampaignController->costCalculate(
                                $user_id,
                                $mask,
                                $smsLength,
                                $cgroups
                            );
                            if ($isadmin) {
                                //price not calculate for admin
                            } else {
                                $resellercost += $ResellerCampaignController->resellercostCalculate(
                                    $parent_user,
                                    $mask,
                                    $smsLength,
                                    $cgroups
                                );
                            }
                        }

                        //echo $totalcost;exit;

                        if ($balance < $totalcost) {
                            $response_array["success"] = 0;
                            $response_array["response_code"] = 106;
                            $response_array["message"] =
                                "You do not have sufficiant balance, your sms cost " .
                                $totalcost .
                                " but your balance is " .
                                $balance .
                                ", Please reacharge first.";
                            return json_encode($response_array);
                        }

                        //Reseller balance check
                        if ($isadmin) {
                            //for admin
                        } else {
                            $reseller_balance = Common::getCurrentBalanceById(
                                $parent_user
                            );

                            if (
                                number_format($reseller_balance, 4, ".", "") <
                                $resellercost
                            ) {
                                $response_array["success"] = 0;
                                $response_array["response_code"] = 107;
                                $response_array["message"] =
                                    "Your Reseller do not have sufficiant balance, your sms cost " .
                                    $totalcost .
                                    ". Contact with Reseller. ";
                                return json_encode($response_array);
                            }
                        }

                        $data["group_id"] = $cgroups;
                        $data["campaign_cost"] = number_format($totalcost, 4);
                        //Insert campaign
                        $campaign_id = Campaign::insertGetId($data);
                        // $data['campaign_id'] = $get_campaign;
                        $sales_id = User::whereId($user_id)->pluck('sales_person')->first();

                        $recharge = new Recharge();
                        $recharge->user_id = $user_id;
                        $recharge->sales_id = $sales_id;
                        $recharge->status = 1;
                        $recharge->amount = number_format(-$totalcost,4,".","");
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $userbalance = Recharge::where("user_id", $user_id)
                            ->whereNotNull("balance")
                            ->orderBy("id", "DESC")
                            ->first();
                        if (!empty($userbalance)) {
                            $rembalance = $userbalance->balance - $totalcost;
                            $recharge->balance = $rembalance;
                        }
                        $r = $recharge->save();

                        $recharge = new Recharge();
                        $recharge->user_id = $parent_user;
                        $recharge->status = 1;
                        $recharge->amount = number_format(
                            -$resellercost,
                            4,
                            ".",
                            ""
                        );
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $reseller_bal = Recharge::where("user_id", $parent_user)
                            ->whereNotNull("balance")
                            ->orderBy("id", "DESC")
                            ->first();
                        if (!empty($reseller_bal)) {
                            $recharge->balance =
                                $reseller_bal->balance - $resellercost;
                        }
                        $r = $recharge->save();
                        // if (!$r) {
                        //    // DB::rollback();
                        // }

                        $contacts = Contact::whereIn("group_id",$groups)->get();
                        $data = [];
                        $contacts_arr = [];
                        $txt = addslashes($smstext);
                        foreach ($contacts as $c) {
                            $time = date("Y-m-d H:i:s");
                            $data = [
                                "user_id" => $c["user_id"],
                                "reseller_id" => $c["reseller_id"],
                                "group_id" => $c["group_id"],
                                "campaign_id" => $campaign_id,
                                "operator" => $c["operator"],
                                "country_code" => $c["country_code"],
                                "number" => $c["number"],
                                "api_text" => addslashes($smstext),
                                "created_at" => $time,
                                "updated_at" => $time,
                                "status" => 1,
                            ];
                            array_push($contacts_arr, $data);
                            if (count($contacts_arr) == 200) {
                                $con_inserts = sms_senders::insert($contacts_arr);
                                $contacts_arr = [];
                            }
                        }
                        $con_inserts = sms_senders::insert($contacts_arr);
                        

                        DB::commit();

                        //echo $campaign_id;exit;

                        
                        $response = $this->apiSMSsend($campaign_id);
                       
                        //$response_array["reportsid"] = $campaign_id;
                        //$response_array["delivery_status"] = [];

                        $succ = sms_transactions::where('campaign_id', $campaign_id)->where('status', 1)->get();
                        $fail = sms_senders::where('campaign_id', $campaign_id)->where('status', 2)->get();

                        foreach($succ as $s){
                            $response_array["status"] = "Delivered";
                        }
                        foreach($fail as $f){
                            $response_array["status"] = "Failed";
                        }


                        

                        

                        if(count($succ) > 0){
                            $response_array["message"] = "SMS send successfully.";
                            $response_array["success"] = 1;
                            $response_array["response_code"] = 100;
                            $response_array["campaign_cost"] = $totalcost;
                            Log::addToLog("$campaign_name Sent Successfully");
                        }
                        $response_array["smsid"] = $campaign_id ."-". $to;

                        


                    } catch (\Exception $e) {
                        DB::rollback();
                        echo $e->getMessage();
                    }
                } 
            }
        } else {
            $response_array["message"] = "Username or Password is wrong.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
        }

        return json_encode($response_array);
    }


    public function smsstatus(Request $r)
    {
        if (!$r->user) {
            $response_array["success"] = 0;
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
        }

        if (!$r->password) {
            $response_array["success"] = 0;
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
        }

        if (!$r->smsid) {
            $response_array["success"] = 0;
            $response_array["message"] = "SMSID  empty";
            $response_array["response_code"] = 109;
        }


        if (Auth::attempt(["email" => $r->user,"password" => $r->password,"status" => 1])) {
            $user_id = Auth::user()->id;
            
           $smsid = $r->smsid;
           $exp = explode("-", $smsid);
           $camp_id = isset($exp[0]) ? $exp[0] : '';
           $number[880] = isset($exp[1]) ? $exp[1] : '';
            $check = sms_transactions::where('campaign_id', $camp_id)->where('mobile_number',$number)->pluck('status');
            if(isset($exp[1]) == 1){
                $response_array["success"] = 1;
                $response_array["response_code"] = 100;
                $response_array["message"] = "SMS send successfully";
                $response_array["STATUS"] = 'SENT';
                return json_encode($response_array);
            }else{
                $response_array["failed"] = 0;
                $response_array["response_code"] = 0;
                $response_array["message"] = "SMS sent failed";
                $response_array["STATUS"] = 'FAILED';
                return json_encode($response_array);
            }
            
        }
            
        else {
            $response_array["message"] = "Please use valid user credentials.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
            }

        return json_encode($response_array);
}

public function balance(Request $r)
    {

        if (!$r->user) {
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
        }

        if (!$r->password) {
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
        }

        if (Auth::attempt(["email" => $r->user,"password" => $r->password,"status" => 1])) {
            $user_id = Auth::user()->id;
            $balance = Common::getCurrentBalanceById(Auth::user()->id);
            // echo $balance;exit;
            if ($balance <= 0) {
                $response_array["message"] = "No Balance available";
                $response_array["response_code"] = 106;
                return json_encode($response_array);
            }
            $response_array["message"] = "Balance available";
            $response_array["response_code"] = 110;
            $response_array["AVAILABLE BALANCE ="] = number_format($balance, 4, '.', '');

        }
            
        else {
            $response_array["message"] = "Please use valid user credentials.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
            }

        return json_encode($response_array);
}



    public static function apiSMSsend($campaign_id)
    {
        $limit = 50;
        $campaigns = Campaign::select("id", "dynamic_sms", "sms_count")->where("id", $campaign_id)->first();
        if($campaigns){
            $campaign_id = isset($campaigns->id) ? $campaigns->id : 0;

            if($campaigns->dynamic_sms){
                $min_id = DynamicSMS::where('campaign_id', $campaign_id)->where('status', 1)->min('id');
            }else{
                $min_id = sms_senders::where('campaign_id', $campaign_id)->where('status', 1)->min('id');//use 1
            }

            if($min_id == NULL){
                $min_id = 0;
            }
        
            if ($min_id > 0) {
                $max_id = $min_id + ($limit-1);
            
                $cron_check = DB::table('crontab')
                        ->where('campaign_id' , $campaign_id)
                        ->where('min_id', $min_id)
                        ->where('max_id',  $max_id)
                        ->whereNull('end_time')
                        ->first();

                if(!$cron_check){
                    if($campaign_id > 0){
                        $cron_id = DB::table('crontab')->insertGetId([
                            'cron_name' => 'bulk',
                            'campaign_id' => $campaign_id,
                            'min_id' => $min_id,
                            'max_id' =>  $max_id,
                            'execute_time' => date('Y-m-d H:i:s')
                        ]);
                    }
                    echo BulkService::send($campaign_id, $min_id, $max_id, $limit, $cron_id);
                    if($campaign_id > 0){
                        DB::table('crontab')->where('id', $cron_id)->update(['end_time' => date('Y-m-d H:i:s')]);
                    }
                }
            } else {
                $countFailed = sms_senders::where('campaign_id', $campaign_id)->count();
                $camp = Campaign::where('id', $campaign_id)->first();
                $retryCount = ($camp ? $camp->retry +1 : 0);
                if($countFailed > 0 && $retryCount < 10){
                    echo "Retry Campaign";
                    Campaign::where('id', $campaign_id)->update(['retry' => $retryCount]);
                    sms_senders::where('campaign_id', $campaign_id)->update(['status' => 1]);
                    DynamicSMS::where('campaign_id', $campaign_id)->update(['status' => 1]);
                }else{
                    $finish=  Campaign::where('id', $campaign_id)->update(['status' => 1]);
                    if($finish){echo "Sent";}else{echo "Not Exist";}
                }

            }
            if($campaign_id > 0){
                DB::table('crontab')->where('id', $cron_id)->update(['end_time' => date('Y-m-d H:i:s')]);
            }
        }
    }

    public function getOperator($number)
    {
        $length = strlen($number);

        $opCode = [
            ["GP", 13],
            ["BL", 14],
            ["TL", 15],
            ["AL", 16],
            ["GP", 17],
            ["RB", 18],
            ["BL", 19],
        ];
        $orator = [
            "13" => "GP",
            "14" => "BL",
            "15" => "TL",
            "16" => "AL",
            "17" => "GP",
            "18" => "RB",
            "19" => "BL",
        ];

        $op = "";
        $country_code = substr($number, 0, 3); // 880

        if ($country_code == "880" && $length == 13) {
            $op = substr($number, 3, 2);
        } elseif ($length == 11) {
            $op = substr($number, 1, 2);
        }

        return isset($orator[$op]) ? $orator[$op] : "";
    }


    public function otpWithCallback(Request $r)
    {
        $response_array["success"] = 0;
        $response_array["message"] = "SMS failed";
        $response_array["response_code"] = 0;
        $response_array["campaign_cost"] = 0;

        if (!$r->user) {
            $response_array["success"] = 0;
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
        }

        if (!$r->password) {
            $response_array["success"] = 0;
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
        }

        if (!$r->to) {
            $response_array["success"] = 0;
            $response_array["message"] = "Recipient no empty";
            $response_array["response_code"] = 103;
            return json_encode($response_array);
        }

        if (!$r->text) {
            $response_array["success"] = 0;
            $response_array["message"] = "Message text empty";
            $response_array["response_code"] = 104;
            return json_encode($response_array);
        }

        // if ($r->reference_id =="") {
        //     $response_array["success"] = 0;
        //     $response_array["message"] = "Reference ID empty";
        //     $response_array["response_code"] = 109;
        //     return json_encode($response_array);
        // }

        if ($r->callback_url=="") {
            $response_array["success"] = 0;
            $response_array["message"] = "Callback URL empty";
            $response_array["response_code"] = 110;
            return json_encode($response_array);
        }

        // $reference_id = $r->reference_id;
        $callback_url = $r->callback_url;


        $to_number = $r->to;
        $to = $r->to;
        $country_code = "880";
        if (substr($r->to, 0, 3) == "880") {
            $country_code = "880";
            $to_number = substr($to_number, 3);
        } else {
            $to_number = $r->to;
        }

        $mask = $r->from;

        //echo $mask;exit;



        $smstext = $r->text;

        if (Auth::attempt(["email" => $r->user,"password" => $r->password,"status" => 1])) {
            $user_id = Auth::user()->id;
            $campaign_id = "";
            $balance = Common::getCurrentBalanceById(Auth::user()->id);
            // echo $balance;exit;
            if ($balance <= 0) {
                $response_array["success"] = 0;
                $response_array["message"] = "No Credits available";
                $response_array["response_code"] = 106;
                return json_encode($response_array);
            }

            if ($r->text !== "" && $r->to !== "") {
                if (strlen($r->text) != strlen(utf8_decode($r->text))) {
                    $strlength = strlen(utf8_decode($r->text));
                    if ($strlength > 70) {
                        $smsLength = $strlength / 67;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                } else {
                    $strlength = strlen($r->text);
                    if ($strlength > 160) {
                        $smsLength = $strlength / 153;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                }

                if ($strlength > 1071) {
                    $response_array["success"] = 0;
                    $response_array["message"] =
                        "SMS maximum charecter limit exceeded, max limit 1071.";
                        $response_array["response_code"] = 108;
                    return json_encode($response_array);
                }

                $parent_user = Auth::user()->parent_user;
                $admin_users = Common::getAdminUsersID();
                $admin_users = (array) $admin_users;
                $isadmin = in_array($parent_user, $admin_users);
                $totalcost = 0;
                $resellercost = 0;

                $check = Campaign::where("user_id", Auth::user()->id)->whereDate("start_date", date("Y-m-d"))->where("api_sms", 1)
                    ->count();
                $check = 0;
                if ($check <= 0) {
                    DB::beginTransaction();
                    // echo $r->text;exit;
                    try {
                        $data = [
                            "campaign_name" => "OTPsms " . date("Ymdhis"),
                            "created_at" => date("Y-m-d H:i:s"),
                            "updated_at" => date("Y-m-d H:i:s"),
                            "start_date" => date("Y-m-d H:i:s"),
                            "status" => 4,
                            "user_id" => Auth::user()->id,
                            "reseller_id" => Auth::user()->parent_user,
                            "text_body" => "$r->text",
                            "sms_count" => Common::smsCount($r->text),
                            "dynamic_sms" => 0,
                            "mask" => ($r->from !='' ? 1 : 0),
                            "sender" => ($r->from !='' ? $r->from : ""),
                            "api_sms" => 1,
                            "otp_sms" => 1,
                        ];

                        //print_r($data);exit;

                        // $group_data = [
                        //     'name' => "APIsms-(".date("Y-m-d").")",
                        //     'created_at' => date('Y-m-d H:i:s'),
                        //     'updated_at' => date('Y-m-d H:i:s'),
                        //     'user_id' => Auth::user()->id,
                        //     'contacts_count' => 1,
                        //     'parent_id' => 0,
                        // ];

                        // $get_campaign_group = DB::table('contact_groups')->insertGetId($group_data);
                        // $data['group_id'] = $get_campaign_group;

                        $campaign_name = "APIsms " . date("Ymdhis");

                        //$CampaignController = new User\CampaignController();
                        $ResellerCampaignController = new Reseller\CampaignController();

                        if ($r->to != "") {
                            $mask = $r->from ? 1 : 0;
                            $cgroups = $ResellerCampaignController->rawContactUpload(
                                $user_id,
                                $r->to,
                                $campaign_name,
                                "raw"
                            );
                            $groups = explode(",", $cgroups);
                            $totalcost += $ResellerCampaignController->costCalculate(
                                $user_id,
                                $mask,
                                $smsLength,
                                $cgroups
                            );
                            if ($isadmin) {
                                //price not calculate for admin
                            } else {
                                $resellercost += $ResellerCampaignController->resellercostCalculate(
                                    $parent_user,
                                    $mask,
                                    $smsLength,
                                    $cgroups
                                );
                            }
                        }

                        // echo $totalcost;exit;

                        if ($balance < $totalcost) {
                            $response_array["success"] = 0;
                            $response_array["response_code"] = 106;
                            $response_array["message"] =
                                "You do not have sufficiant balance, your sms cost " .
                                $totalcost .
                                " but your balance is " .
                                $balance .
                                ", Please reacharge first.";
                            return json_encode($response_array);
                        }

                        //Reseller balance check
                        if ($isadmin) {
                            //for admin
                        } else {
                            $reseller_balance = Common::getCurrentBalanceById(
                                $parent_user
                            );

                            if (
                                number_format($reseller_balance, 4, ".", "") <
                                $resellercost
                            ) {
                                $response_array["success"] = 0;
                                $response_array["response_code"] = 107;
                                $response_array["message"] =
                                    "Your Reseller do not have sufficiant balance, your sms cost " .
                                    $totalcost .
                                    ". Contact with Reseller. ";
                                return json_encode($response_array);
                            }
                        }

                        $data["group_id"] = $cgroups;
                        $data["campaign_cost"] = number_format($totalcost, 4);
                        //Insert campaign
                        $campaign_id = Campaign::insertGetId($data);
                        // $data['campaign_id'] = $get_campaign;

                        $recharge = new Recharge();
                        $recharge->user_id = $user_id;
                        $recharge->status = 1;
                        $recharge->amount = number_format(
                            -$totalcost,
                            4,
                            ".",
                            ""
                        );
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $userbalance = Recharge::where("user_id", $user_id)
                            ->whereNotNull("balance")
                            ->orderBy("id", "DESC")
                            ->first();
                        if (!empty($userbalance)) {
                            $rembalance = $userbalance->balance - $totalcost;
                            $recharge->balance = $rembalance;
                        }
                        $r = $recharge->save();

                        $recharge = new Recharge();
                        $recharge->user_id = $parent_user;
                        $recharge->status = 1;
                        $recharge->amount = number_format(
                            -$resellercost,
                            4,
                            ".",
                            ""
                        );
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $reseller_bal = Recharge::where("user_id", $parent_user)
                            ->whereNotNull("balance")
                            ->orderBy("id", "DESC")
                            ->first();
                        if (!empty($reseller_bal)) {
                            $recharge->balance =
                                $reseller_bal->balance - $resellercost;
                        }
                        $r = $recharge->save();
                        // if (!$r) {
                        //    // DB::rollback();
                        // }

                        $contacts = Contact::whereIn("group_id",$groups)->get();
                        $data = [];
                        $contacts_arr = [];
                        $txt = addslashes($smstext);
                        foreach ($contacts as $c) {
                            $time = date("Y-m-d H:i:s");
                            $data = [
                                "user_id" => $c["user_id"],
                                "reseller_id" => $c["reseller_id"],
                                "group_id" => $c["group_id"],
                                "campaign_id" => $campaign_id,
                                "operator" => $c["operator"],
                                "country_code" => $c["country_code"],
                                "number" => $c["number"],
                                "api_text" => addslashes($smstext),
                                "created_at" => $time,
                                "updated_at" => $time,
                                "status" => 1,
                                "callback_url" => $callback_url
                            ];
                            array_push($contacts_arr, $data);
                            if (count($contacts_arr) == 200) {
                                $con_inserts = sms_senders::insert($contacts_arr);
                                $contacts_arr = [];
                            }
                        }
                        $con_inserts = sms_senders::insert($contacts_arr);
                        

                        DB::commit();

                        //echo count($contacts);exit;

                        
                        $response = $this->apiSMSsend($campaign_id);
                       
                        //$response_array["reportsid"] = $campaign_id;
                        //$response_array["delivery_status"] = [];

                        $succ = sms_transactions::where('campaign_id', $campaign_id)->where('status', 1)->get();
                        $fail = sms_senders::where('campaign_id', $campaign_id)->where('status', 2)->get();
                        
                        foreach($succ as $s){
                            $response_array["status"] = "Delivered";
                            $insert_callback = sms_transactions::where('campaign_id', $campaign_id)->where('status', 1)->update([
                            	"callback_url" => $callback_url
                            ]);

                           // echo "callback=> ".$insert_callback;

                        }
                        foreach($fail as $f){
                            $response_array["status"] = "Failed";
                        }

                        

                        if(count($succ) > 0){
                            $response_array["message"] = "SMS send successfully.";
                            $response_array["success"] = 1;
                            $response_array["response_code"] = 100;
                            $response_array["campaign_cost"] = $totalcost;
                            $reference_id = $campaign_id."-".$to;
                            $response_array["reference_id"] = $reference_id;
                            $response_back_URL = $callback_url."?reference_id=".$reference_id."&msisdn=".$to."&status=Delivered";
                        }else{
                            $response_back_URL = $callback_url."?reference_id=&msisdn=".$to."&status=Failed";
                        }

                        if($this->curlFunc($response_back_URL)){
                        	return json_encode($response_array);
                        }

                    } catch (\Exception $e) {
                        DB::rollback();
                        echo $e->getMessage();
                    }
                } 
            }
        } else {
            $response_array["message"] = "Please use valid user credentials.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
        }

        //return json_encode($response_array);
    }



    public static function curlFunc($url) {
               $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => array("Content-Type: text/html; charset=utf-8"),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0',
        ));
        //curl_setopt($ch, CURLOPT_HTTPHEADER,array ("Content-Type: text/xml; charset=utf-8"));
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);
        return $output;
    }


    public function multitextapi(Request $request)
    {

        $r = json_decode(json_encode($request->all()), true);

        $response_array["success"] = 0;
        $response_array["message"] = "SMS failed";
        $response_array["response_code"] = 0;
        $response_array["campaign_cost"] = 0;
        
  
        if (!$r['username']) {
            $response_array["success"] = 0;
            $response_array["message"] = "User name empty";
            $response_array["response_code"] = 101;
            return json_encode($response_array);
        }

        if (!$r['password']) {
            $response_array["success"] = 0;
            $response_array["message"] = "Password empty";
            $response_array["response_code"] = 102;
            return json_encode($response_array);
        }

        


        if (!$r['to']) {
            $response_array["success"] = 0;
            $response_array["message"] = "Recipient empty";
            $response_array["response_code"] = 103;
            return json_encode($response_array);
        }

        if (!$r['text']) {
            $response_array["success"] = 0;
            $response_array["message"] = "Message text empty";
            $response_array["response_code"] = 104;
            return json_encode($response_array);
        }

        $mask = $r['from'];
        $smstext = $r['text'];

        $to_number = $r['to'];
        $to = $r['to'];
        $country_code = "880";
        

        print_r($r);
        

        exit;


        if (Auth::attempt(["email" => $r['username'],"password" => $r['password'],"status" => 1,"api_enabled" => 1])) {
            $user_id = Auth::user()->id;
            $campaign_id = "";
            $balance = Common::getCurrentBalanceById(Auth::user()->id);
            // echo $balance;exit;
            if ($balance <= 0) {
                $response_array["success"] = 0;
                $response_array["message"] = "No Credits available";
                $response_array["response_code"] = 106;
                return json_encode($response_array);
            }

            if ($r->text !== "" && $r->to !== "") {
                if (strlen($r->text) != strlen(utf8_decode($r->text))) {
                    $strlength = strlen(utf8_decode($r->text));
                    if ($strlength > 70) {
                        $smsLength = $strlength / 67;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                } else {
                    $strlength = strlen($r->text);
                    if ($strlength > 160) {
                        $smsLength = $strlength / 153;
                        $smsLength = ceil($smsLength);
                    } else {
                        $smsLength = 1;
                    }
                }

                if ($strlength > 1071) {
                    $response_array["success"] = 0;
                    $response_array["message"] =
                        "SMS maximum charecter limit exceeded, max limit 1071.";
                        $response_array["response_code"] = 108;
                    return json_encode($response_array);
                }
                // print_r($strlength);exit;

                $parent_user = Auth::user()->parent_user;
                $admin_users = Common::getAdminUsersID();
                $admin_users = (array) $admin_users;
                $isadmin = in_array($parent_user, $admin_users);
                $totalcost = 0;
                $resellercost = 0;

                // dd($parent_user,$admin_users,$isadmin);

                $check = Campaign::where('user_id',Auth::user()->id)->whereDate("start_date", date("Y-m-d"))->where("api_sms", 1)->count();
                $check = 0;
                if ($check <= 0) {
                    DB::beginTransaction();
                    // echo $r->text;exit;
                    try {
                        $data = [
                            "campaign_name" => "P2_API " . date("Ymdhis"),
                            "created_at" => date("Y-m-d H:i:s"),
                            "updated_at" => date("Y-m-d H:i:s"),
                            "start_date" => date("Y-m-d H:i:s"),
                            "status" => 4,
                            "user_id" => Auth::user()->id,
                            "campaign_created" => Auth::user()->id,
                            "reseller_id" => Auth::user()->parent_user,
                            "text_body" => "$r->text",
                            "sms_count" => Common::smsCount($r->text),
                            "dynamic_sms" => 0,
                            "mask" => ($r->from !='' ? 1 : 0),
                            "sender" => ($r->from !='' ? $r->from : ""),
                            "api_sms" => 1,
                            "otp_sms" => 1,
                        ];
                        // print_r($data);exit;
                        $campaign_name = "P2_API " . date("Ymdhis");
                       
                       
                        $ResellerCampaignController = new Reseller\CampaignController();


                        if ($r->to != "") {
                            $mask = $r->from ? 1 : 0;
                            $cgroups = $ResellerCampaignController->rawContactUpload(
                                $user_id,
                                $r->to,
                                $campaign_name,
                                "raw"
                            );
                            $groups = explode(",", $cgroups);
                            $totalcost += $ResellerCampaignController->costCalculate(
                                $user_id,
                                $mask,
                                $smsLength,
                                $cgroups
                            );
                            if ($isadmin) {
                                //price not calculate for admin
                            } else {
                                $resellercost += $ResellerCampaignController->resellercostCalculate(
                                    $parent_user,
                                    $mask,
                                    $smsLength,
                                    $cgroups
                                );
                            }
                        }

                        // echo $balance;exit;

                        if ($balance < $totalcost) {
                            $response_array["success"] = 0;
                            $response_array["response_code"] = 106;
                            $response_array["message"] =
                                "You do not have sufficiant balance, your sms cost " .
                                $totalcost .
                                " but your balance is " .
                                $balance .
                                ", Please reacharge first.";
                            return json_encode($response_array);
                        }

                        // print_r($response_array);exit;
                        //Reseller balance check
                        if ($isadmin) {
                            //for admin
                        } else {
                            $reseller_balance = Common::getCurrentBalanceById($parent_user);
                            // print_r($reseller_balance);

                            if (
                                number_format($reseller_balance, 4, ".", "") <
                                $resellercost
                            ) {
                                $response_array["success"] = 0;
                                $response_array["response_code"] = 107;
                                $response_array["message"] =
                                    "Your Reseller do not have sufficiant balance, your sms cost " .
                                    $totalcost .
                                    ". Contact with Reseller. ";
                                return json_encode($response_array);
                            }
                        }

                        $data["group_id"] = $cgroups;
                        $data["campaign_cost"] = number_format($totalcost, 4);
                        //Insert campaign
                        $campaign_id = Campaign::insertGetId($data);

                        $sales_id = User::whereId($user_id)->pluck('sales_person')->first();

                        $recharge = new Recharge();
                        $recharge->user_id = $user_id;
                        $recharge->sales_id = $sales_id;
                        $recharge->status = 1;
                        $recharge->amount = number_format(-$totalcost,4,".","");
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $userbalance = Recharge::where("user_id", $user_id)->latest()->pluck('balance')->first();
                        if (!empty($userbalance)) {
                            $rembalance = $userbalance - $totalcost;
                            $recharge->balance = $rembalance;
                        }

                        $r = $recharge->save();

                        $recharge = new Recharge();
                        $recharge->user_id = $parent_user;
                        $recharge->status = 1;
                        $recharge->amount = number_format(-$resellercost,4,".","");
                        $recharge->campaign_id = $campaign_id;
                        $recharge->comments = $campaign_name;
                        $reseller_bal = Recharge::where("user_id", $parent_user)->latest()->pluck('balance')->first();
                        if (!empty($reseller_bal)) {
                            $recharge->balance = $reseller_bal - $resellercost;
                        }
                        $r = $recharge->save();
                        // print_r($resellercost);exit;
                        $contacts = Contact::whereIn("group_id",$groups)->get();
                        $data = [];
                        $contacts_arr = [];
                        $txt = addslashes($smstext);
                        foreach ($contacts as $c) {
                            $time = date("Y-m-d H:i:s");
                            $data = [
                                "user_id" => $c["user_id"],
                                "reseller_id" => $c["reseller_id"],
                                "group_id" => $c["group_id"],
                                "campaign_id" => $campaign_id,
                                "operator" => $c["operator"],
                                "country_code" => $c["country_code"],
                                "number" => $c["number"],
                                "api_text" => addslashes($smstext),
                                "created_at" => $time,
                                "updated_at" => $time,
                                "status" => 1,
                            ];
                            array_push($contacts_arr, $data);
                            if (count($contacts_arr) == 200) {
                                $con_inserts = sms_senders::insert($contacts_arr);
                                $contacts_arr = [];
                            }
                        }

                        $con_inserts = sms_senders::insert($contacts_arr);


                        DB::commit();


                        $response = $this->apiSMSsend($campaign_id);

                         
                        //SOMOSSA EKHNEI apiSMSsend

                        // $response_array["reportsid"] = $campaign_id;
                        $response_array["delivery_status"] = [];

                        $succ = sms_transactions::where('campaign_id', $campaign_id)->where('status', 1)->get();
                        $fail = sms_senders::where('campaign_id', $campaign_id)->where('status', 2)->get();


                        foreach($succ as $s){
                            $data = array();
                            $data['MSISDN'] = $s->mobile_number;
                            $data['Status'] = 1;
                            $data['StatusText'] = "Sent";
                            $data["smsid"] = $campaign_id ."-". $s->mobile_number;
                            $response_array["delivery_status"][] = $data;
                        }
                        foreach($fail as $f){
                            $data = array();
                            $data['MSISDN'] = $f->country_code.$f->number;
                            $data['Status'] = 0;
                            $data['StatusText'] = "Failed";
                            $data["smsid"] = $campaign_id ."-". $f->country_code.$f->number;
                            $response_array["delivery_status"][] = $data;
                        }

                        if (count($contacts) < 2) {
                        }

                        if(count($succ) > 0){
                            $response_array["message"] = "SMS send successfully.";
                            $response_array["success"] = 1;
                            $response_array["response_code"] = 100;
                            $response_array["campaign_cost"] = $totalcost;
                            Log::addToLog("$campaign_name Sent Successfully");

                        }

                        


                    } catch (\Exception $e) {
                        DB::rollback();
                        echo $e->getMessage();
                    }
                } 
            }
        } else {
            $response_array["message"] = "Username or Password is wrong.";
            $response_array["response_code"] = 105;
            return json_encode($response_array);
        }

        return json_encode($response_array);
    }




}
