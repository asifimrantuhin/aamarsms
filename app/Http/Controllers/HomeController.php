<?php

namespace App\Http\Controllers;

use App\BulkService;
use App\Common;
use App\Models\Campaign;
use App\Models\DynamicSMS;
use App\Models\APIStatus;
use App\Models\OperatorBalance;
use App\Models\RatePlan;
use App\Models\sms_senders;
use App\Models\sms_transactions;
use App\Models\UserSmsCounter;
use App\SendSMS;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['smsSending','pricesync']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function RanksTelBalance()
    {
        $parameteres = [
            'username' => 'AJRA-TECH',
            'pass' => "R1nQt5!474g#su@jan",
            'cmd' => 'credits',
        ];

        $url = "http://api.rankstelecom.com/api/command?" . http_build_query($parameteres);
        $res = SendSMS::curlFunc($url);
        $output = $res/100;

        //$balance = SendSMS::RanksTelBalance();
        APIStatus::where('name','rankstel')->update([
            'updated_at' => date('Y-m-d H:i:s'),
            'credits' => $output,
            
        ]);
        return $output;

    }


    public function download(){
        $file_path = public_path('api_doc/'. 'AamarSMS_API_Documentation.pdf');
        $isExists = File::exists($file_path);
        if($isExists == false){
            Toastr::error('File is not there. Please contact Admin','Error');
            return back();
        }else{
        return response()->download( $file_path);
        }
    }

    public function SampleFile()
    {
        $file_path = public_path('group/'. 'AamarSMS_Group_Format.xlsx');
        $isExists = File::exists($file_path);
        if($isExists == false){
            Toastr::error('File is not there. Please contact Admin','Error');
            return back();
        }else{
        return response()->download( $file_path);
        }
    }

    public function DynamicFile()
    {
        $file_path = public_path('sms/'. 'AamarSMS_Dynamic_SMS.xlsx');
        $isExists = File::exists($file_path);
        if($isExists == false){
            Toastr::error('File is not there. Please contact Admin','Error');
            return back();
        }else{
        return response()->download( $file_path);
        }
    }

    public function DynamicSMSTemplate()
    {
        $file_path = public_path('sms/'. 'DynamicSMS.pdf');
        $isExists = File::exists($file_path);
        if($isExists == false){
            Toastr::error('File is not there. Please contact Admin','Error');
            return back();
        }else{
        return response()->download( $file_path);
        }
    }

    

    public static  function smsSender() {
		ini_set('max_execution_time', 0);
        echo SendSMS::send();
    }

    public function callback_response_push() {

        $succ = sms_transactions::where('status', 1)
        ->whereNotNull('callback_url')
        ->where('callback_status', '=','0') 
        ->get();

        foreach($succ as $s){
            $callback_url = $s->callback_url;
            $reference_id = $s->campaign_id."-".$s->mobile_number;
            $msisdn = $s->mobile_number;
            $status = "Delivered";

            if($this->curlFunc($callback_url, $reference_id, $msisdn, $status)){
                $update_callback = sms_transactions::where('campaign_id', $s->campaign_id)
                ->where('mobile_number', $s->mobile_number)
                ->update([
                    "callback_status" => 1
                ]);
            }
         }
        

        

        $fail = sms_senders::where('status', 2)
        ->whereNotNull('callback_url')
        ->where('callback_status', '=','0') 
        ->get();


        foreach($fail as $f){
            //$response_back_URL = $f->callback_url."?reference_id=".$f->campaign_id."-".$f->country_code.$f->number."&msisdn=".$f->country_code.$f->number."&status=Failed";

            $callback_url = $f->callback_url;
            $reference_id = $f->campaign_id."-".$f->country_code.$f->number;
            $msisdn = $f->country_code.$f->number;
            $status = "Delivered";
            if($this->curlFunc($callback_url, $reference_id, $msisdn, $status)){
                $update_callback = sms_senders::where('campaign_id', $f->campaign_id)
                ->where('number', $f->number)
                ->update([
                    "callback_status" => 1
                ]);
            }
        }
        
    }


    public static function priceSync() {
        ini_set('max_execution_time', 0);
        $sms_list = sms_transactions::select('sms_transactions.*')
        ->where('price', '=', null)
        ->orderBy('campaign_id', 'asc')
        ->get();

        foreach ($sms_list as $key => $value) {
            # code...
            $price = 0;
            $vendor_price = 0;
            $campaigns = Campaign::where('id', $value->campaign_id)->first();

            $rates = RatePlan::where('user_id', $value->user_id)->first();
            $reseller_price = RatePlan::where('user_id', $value->reseller_id)->first();

            if (isset($campaigns->mask) && $campaigns->mask == 1) {
                $price = isset($rates->masking_price) ? $rates->masking_price : 0;
                $rprice = isset($reseller_price->masking_price) ? $reseller_price->masking_price : 0; 
            } else {
                $price = isset($rates->nonmasking_price) ? $rates->nonmasking_price : 0;
                $rprice = isset($reseller_price->nonmasking_price) ? $reseller_price->nonmasking_price : 0; 
            }

            ## For Dynamic SMS

            if (isset($campaigns->dynamic_sms) && $campaigns->dynamic_sms == 1) {
                
            } else {
                $sms_count = Common::smsCount(isset($campaigns->text_body) ? $campaigns->text_body : '');
            }

            $price = ($sms_count * $price);
            $rprice = ($sms_count * $rprice);

        //    echo $rprice."><".$price ; exit ;
            if (isset($campaigns->campaign_name) && $campaigns->campaign_name == 'API') {
                Common::addBalance($value->user_id, -$price, 'API sms sent');
            }
            $vndor_rate =  config('rate.vendor_price');

            $rprice = ($rprice == 0 ? $price : $rprice );

            $vendor_price = isset($vndor_rate[$value->vendor_api]) ? $vndor_rate[$value->vendor_api] : 0;
            $vendor_price = ($vendor_price * $sms_count);
            if($value->reseller_id == '1'){
                sms_transactions::where('id', $value->id)->update(['price' => $price, 'vendor_price' => $vendor_price, 'sell_price' => $price]);
            }else{
                sms_transactions::where('id', $value->id)->update(['price' => $price, 'vendor_price' => $vendor_price, 'sell_price' => $rprice]);
            }
            
        }

    }

    public static function curlFunc($callback_url, $reference_id, $msisdn, $status) {
		ini_set('max_execution_time', 0);
        $curl = curl_init();


        $data = array(
            "reference_id" => $reference_id,
            "msisdn" => $msisdn,
            "status"=> $status
        );

        $data_string = json_encode($data);

        curl_setopt_array($curl, array(
          CURLOPT_URL => $callback_url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 30,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $data_string,
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }


    public static function smsSending() {
        ini_set('max_execution_time', 0);
        $limit = 100;
        $campaigns =  Campaign::select('id', 'dynamic_sms', 'sms_count', 'campaign_name')
        ->where('status', 4)// 2
        ->where('api_sms', 0)// 2
        ->where('start_date', '<=', date('Y-m-d H:i:s'))
        ->orderBy(DB::raw('RAND()'))
        ->first();

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
                
                echo "SMS SENDING PROCESSING...";
                $max_id = $min_id + ($limit-1);
                echo $min_id . '/' . $max_id. '  / ';
                $cron_id = 0;
                $cron_check = DB::table('crontab')
                    ->where('campaign_id' , $campaign_id)
                    ->where('min_id', '>=', $min_id)
                    ->where('min_id','<=', $max_id)
                    ->where('max_id','>=',  $min_id)
                    ->where('max_id', '<=', $max_id)
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

                    
                    if($campaigns->dynamic_sms){
                        DynamicSMS::where('id', '>=', $min_id)->where('id', '<=', $max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
                    }else{
                        sms_senders::where('id', '>=', $min_id)->where('id', '<=', $max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
                    }
                    
                    
                    echo BulkService::send($campaign_id, $min_id, $max_id, $limit,$cron_id);
                    
                    if($campaign_id > 0){
                        DB::table('crontab')->where('id', $cron_id)->update(['end_time' => date('Y-m-d H:i:s')]);
                    }
                }
            }else{
                $countFailed = sms_senders::where('campaign_id', $campaign_id)->count();
                $camp = Campaign::where('id', $campaign_id)->first();
                $retryCount = ($camp ? $camp->retry +1 : 0);
                if($countFailed > 0 && $retryCount < 3){
                    echo "Retry Campaign";
                    Campaign::where('id', $campaign_id)->update(['retry' => $retryCount]);
                    sms_senders::where('campaign_id', $campaign_id)->update(['status' => 1]);
                    DynamicSMS::where('campaign_id', $campaign_id)->update(['status' => 1]);
                }else{
                    $finish=  Campaign::where('id', $campaign_id)->update(['status' => 1]);
                    if($finish){echo "Sent";}else{echo "Not Exist";}
                }
            }
        }
    }
 
    public static function smsSending_old() {
		ini_set('max_execution_time', 0);
        $limit = 200;
        $campaigns =  Campaign::select('id', 'dynamic_sms', 'sms_count', 'campaign_name')
        ->where('status', 4)// 2
        ->where('start_date', '<=', date('Y-m-d H:i:s'))
        // ->where('mask', 1)  Masking+Non-masking both kaj krbe ekn
        //->orderBy('id', 'asc')
        ->orderBy(DB::raw('RAND()'))
        ->first();

        $campaign_id = isset($campaigns->id) ? $campaigns->id : 0;

        $min_id = sms_senders::where('campaign_id', $campaign_id)->where('status', 1)->min('id');//use 1
        // dd($min_id);
        $max_id = ($min_id) ? ($min_id + $limit) : 0;
        // dd($max_id);
        $dynamic_sms_min_id = DynamicSMS::where('campaign_id', $campaign_id)->where('status', 1)->min('id');
        $dynamic_sms_max_id = ($dynamic_sms_min_id) ? ($dynamic_sms_min_id + $limit) : 0;
       

        $min_id = $min_id != NULL ? $min_id : $dynamic_sms_min_id;
        $max_id = $max_id != NULL ? $max_id : $dynamic_sms_max_id;

        if($min_id == NULL && $dynamic_sms_min_id == NULL){
            $min_id = 0;
        }
        

        
        echo $min_id . '/' . $max_id. '  / ';
        if ($min_id != 0 && $max_id != 0) {
            echo "SMS SENDING PROCESSING...";
            $cron_id = 0;
            if($campaign_id > 0){
                $cron_id = DB::table('crontab')->insertGetId([
                    'cron_name' => 'bulk',
                    'campaign_id' => $campaign_id,
                    'min_id' => $min_id,
                    'max_id' =>  $max_id,
                    'execute_time' => date('Y-m-d H:i:s')
                ]);
            }
            sms_senders::where('id', '<=', $max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
            DynamicSMS::where('id', '<=', $dynamic_sms_max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
            
            echo BulkService::send($campaign_id, $min_id, $max_id, $limit,$cron_id);
            
            if($campaign_id > 0){
                DB::table('crontab')->where('id', $cron_id)->update(['end_time' => date('Y-m-d H:i:s')]);
            }

        }else{
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
        
    }

    public static function apismsSending() {
        ini_set('max_execution_time', 0);
        $limit = 100;
        $campaigns =  Campaign::select('id', 'dynamic_sms', 'sms_count', 'campaign_name')
        ->where('status', 4)// 2
        ->where('api_sms', 1)// 2
        ->where('start_date', '<=', date('Y-m-d H:i:s'))
        ->orderBy(DB::raw('RAND()'))
        ->first();

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
                
                echo "SMS SENDING PROCESSING...";
                $max_id = $min_id + ($limit-1);
                echo $min_id . '/' . $max_id. '  / ';
                $cron_id = 0;
                $cron_check = DB::table('crontab')
                    ->where('campaign_id' , $campaign_id)
                    ->where('min_id', '>=', $min_id)
                    ->where('min_id','<=', $max_id)
                    ->where('max_id','>=',  $min_id)
                    ->where('max_id', '<=', $max_id)
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

                    
                    if($campaigns->dynamic_sms){
                        DynamicSMS::where('id', '>=', $min_id)->where('id', '<=', $max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
                    }else{
                        sms_senders::where('id', '>=', $min_id)->where('id', '<=', $max_id)->where('campaign_id', $campaign_id)->update(['status' => 2]);
                    }
                    
                    
                    echo BulkService::send($campaign_id, $min_id, $max_id, $limit,$cron_id);
                    
                    if($campaign_id > 0){
                        DB::table('crontab')->where('id', $cron_id)->update(['end_time' => date('Y-m-d H:i:s')]);
                    }
                }
            }else{
                $countFailed = sms_senders::where('campaign_id', $campaign_id)->count();
                $camp = Campaign::where('id', $campaign_id)->first();
                $retryCount = ($camp ? $camp->retry +1 : 0);
                if($countFailed > 0 && $retryCount < 3){
                    echo "Retry Campaign";
                    Campaign::where('id', $campaign_id)->update(['retry' => $retryCount]);
                    sms_senders::where('campaign_id', $campaign_id)->update(['status' => 1]);
                    DynamicSMS::where('campaign_id', $campaign_id)->update(['status' => 1]);
                }else{
                    $finish=  Campaign::where('id', $campaign_id)->update(['status' => 1]);
                    if($finish){echo "Sent";}else{echo "Not Exist";}
                }
            }
        }
        
    }


    public static function OperatorBalance()
    {

        // Mirtel Config
        $url = "http://www.btssms.com/miscapi/R2000199617d9227d609f2.12995255/getBalance";
        $res = HomeController::curlFun($url);
        $array = explode("BDT ",$res);
        $mirtel_balance = $array[1];

        $gate = OperatorBalance::whereDate('created_at', date('Y-m-d'))->where('operator','=','mirtel')->count();
            if($gate > 0){
                $data = array('close' => $mirtel_balance,'updated_at' =>Carbon::now());
                OperatorBalance::where('operator','=','mirtel')->update($data);
            }else
            {
            $data[] = ['date'=> Carbon::now(),'operator' => 'mirtel','open'=>$mirtel_balance,'created_at' =>Carbon::now(),'updated_at' =>Carbon::now()];
            OperatorBalance::insert($data);
            }

        // Mirtel Config


        // Teletalk CONFIG
        $parameteres = [
            'op' => 'BALANCE',
            'user' => 'najjtechno',
            'pass' => 'NzAsT15623P'
        ];
        $response = '';
        $url = "http://bulksms.teletalk.com.bd/link_sms_send.php?" . http_build_query($parameteres);
        $res = HomeController::curlFun($url);
        $exp_response = explode(',', $res);
        $array = explode(": ",$exp_response[0]);
        $teletalk_balance = $array[1];

        
        $gate = OperatorBalance::whereDate('created_at', date('Y-m-d'))->where('operator','=','teletalk')->count();
        if($gate > 0){
            $data = array('close' => $teletalk_balance,'updated_at' =>Carbon::now());
            OperatorBalance::where('operator','=','teletalk')->update($data);
        }
        else{
        $data[] = ['date'=> Carbon::now(),'operator' => 'teletalk','open'=>$teletalk_balance,'created_at' =>Carbon::now(),'updated_at' =>Carbon::now()];
        OperatorBalance::insert($data);
        }

        // Telatalk CONFIG

        // GP Configurations
        $user = 'NTLadmin';
        $pass = 'N@jjTech123$';
        $info = '{ "username": "' . $user . '", "password": "' . $pass . '", "apicode": "3", "msisdn":"0", "countrycode": "0", "cli": "0", "messagetype": "0", "message": "0", "messageid": "0" }';
        $url = "https://gpcmp.grameenphone.com/ecmapigw/webresources/ecmapigw.v2";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $info,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
                "cache-control: no-cache",
            ),
        ));

      $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $responseData = '';
        if ($err) {
            // echo "cURL Error #:" . $err;
        } else {
            $responseData = json_decode($response, true);
        }

            $response = $responseData['message'];
            $balance = substr_replace($response,'.',-2,0);
            $gate = OperatorBalance::whereDate('created_at', date('Y-m-d'))->where('operator','=','gremeenphone')->count();
            if($gate > 0){
                $data = array('close' => $balance,'updated_at' =>Carbon::now());
                OperatorBalance::where('operator','=','gremeenphone')->update($data);
            }else
            {
            $data[] = ['date'=> Carbon::now(),'operator' => 'gremeenphone','open'=>$balance,'created_at' =>Carbon::now(),'updated_at' =>Carbon::now()];
            OperatorBalance::insert($data);
            }
        // GP Configurations           
        

    }
    
    public static function curlFun($url) {
        // echo $url;exit;
        // create curl resource
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

        // if (!$output) {
        //     $output = file_get_contents($url);
        // }

        return $output;
    }



    public function getUserSMSsummary2(Request $request){
        $userid = $request->get('userid');
        $fromdate = ($request->get('fromdate') ? $request->get('fromdate') : date("Y-m-d"));
        $todate =  ($request->get('todate') ? $request->get('todate') : date("Y-m-d"));

        $userlist = DB::table('users')
            ->select('id')
            ->where('status', 1)
            ->when($userid, function($q) use ($userid){
                $q->where('id', '=',$userid);
            })
            ->get();

        foreach($userlist as $user){
            $user_id = $user->id;
            $sms_summary = DB::Select("SELECT DATE_FORMAT(created_at, '%Y-%m-%d') AS sent_date, operator, SUM(sms_count) AS sms_count  FROM sms_transactions WHERE user_id=".$user_id." AND DATE_FORMAT(created_at, '%Y-%m-%d') BETWEEN '".$fromdate."' AND '".$todate."' GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d'), operator");

            foreach($sms_summary as $row){
                $operator = $row->operator;
                $checkData = UserSmsCounter::where('user_id',$user_id)->whereDate('sent_date', $row->sent_date)->first();
                if($checkData) {
                    switch ($operator) {
                        case "GP":
                            $update = UserSmsCounter::find($checkData->id);
                            $update->sent_date = $row->sent_date;
                            $update->gp = $row->sms_count;
                            $update->save();
                            break;
                        case "BL":
                            $update = UserSmsCounter::find($checkData->id);
                            $update->sent_date = $row->sent_date;
                            $update->bl = $row->sms_count;
                            $update->save();
                            break;
                        case "RB":
                            $update = UserSmsCounter::find($checkData->id);
                            $update->sent_date = $row->sent_date;
                            $update->robi = $row->sms_count;
                            $update->save();
                            break;
                        case "TL":
                            $update = UserSmsCounter::find($checkData->id);
                            $update->sent_date = $row->sent_date;
                            $update->teletalk = $row->sms_count;
                            $update->save();
                            break;
                        case "AL":
                            $update = UserSmsCounter::find($checkData->id);
                            $update->sent_date = $row->sent_date;
                            $update->airtel = $row->sms_count;
                            $update->save();
                            break;
                        default:
                           
                    }
                }else{
                    switch ($operator) {
                        case "GP":
                            $sms_c = array();
                            $sms_c['user_id'] = $user_id;
                            $sms_c['sent_date'] = $row->sent_date;
                            $sms_c['gp'] = $row->sms_count;
                            $sms_c['created_at'] = date('Y-m-d H:i:s');
                            $sms_c['updated_at'] = date('Y-m-d H:i:s');
                            break;
                        case "BL":
                            $sms_c = array();
                            $sms_c['user_id'] = $user_id;
                            $sms_c['sent_date'] = $row->sent_date;
                            $sms_c['bl'] = $row->sms_count;
                            $sms_c['created_at'] = date('Y-m-d H:i:s');
                            $sms_c['updated_at'] = date('Y-m-d H:i:s');
                            break;
                        case "RB":
                            $sms_c = array();
                            $sms_c['user_id'] = $user_id;
                            $sms_c['sent_date'] = $row->sent_date;
                            $sms_c['robi'] = $row->sms_count;
                            $sms_c['created_at'] = date('Y-m-d H:i:s');
                            $sms_c['updated_at'] = date('Y-m-d H:i:s');
                            break;
                        case "TL":
                           $sms_c = array();
                            $sms_c['user_id'] = $user_id;
                            $sms_c['sent_date'] = $row->sent_date;
                            $sms_c['teletalk'] = $row->sms_count;
                            $sms_c['created_at'] = date('Y-m-d H:i:s');
                            $sms_c['updated_at'] = date('Y-m-d H:i:s');
                            break;
                        case "AL":
                            $sms_c = array();
                            $sms_c['user_id'] = $user_id;
                            $sms_c['sent_date'] = $row->sent_date;
                            $sms_c['airtel'] = $row->sms_count;
                            $sms_c['created_at'] = date('Y-m-d H:i:s');
                            $sms_c['updated_at'] = date('Y-m-d H:i:s');
                            break;
                        default:
                            
                    }
                    UserSmsCounter::insert($sms_c);
                }
            }


            $mask_nonmask_summary = DB::Select("SELECT DATE_FORMAT(st.created_at, '%Y-%m-%d') AS sent_date,
                IF(c.mask='0', SUM(st.sms_count), 0) AS nonmask,
                IF(c.mask='1', SUM(st.sms_count), 0) AS mask
                FROM sms_transactions st
                JOIN campaigns c ON c.id = st.`campaign_id`
                WHERE st.user_id=$user_id AND DATE_FORMAT(st.created_at, '%Y-%m-%d') BETWEEN '".$fromdate."' AND '".$todate."'
                GROUP BY DATE_FORMAT(st.created_at, '%Y-%m-%d'), c.mask");
        
            foreach($mask_nonmask_summary as $row){
                $mask = $row->mask;
                $nonmask = $row->nonmask;
                $checkData = UserSmsCounter::where('user_id',$user_id)->whereDate('sent_date', $row->sent_date)->first();
                if($checkData) {
                    $update = UserSmsCounter::find($checkData->id);
                    $update->mask = ($mask > 0 ? $mask : $update->mask);
                    $update->nonmask = ($nonmask > 0 ? $nonmask : $update->nonmask);
                    $update->updated_at = date('Y-m-d H:i:s');
                    $update->save();
                }else{
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = $sent_date;
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    UserSmsCounter::insert($sms_c);
                }
            }


            $total_summary = DB::Select("SELECT DATE_FORMAT(st.created_at, '%Y-%m-%d') AS sent_date,
                SUM(st.sms_count) AS total_sms,
                ROUND(SUM(st.price),2) AS total_price,
                ROUND(SUM(st.sell_price),2) AS total_sell_price
                FROM sms_transactions st
                JOIN campaigns c ON c.id = st.`campaign_id`
                WHERE st.user_id=$user_id AND DATE_FORMAT(st.created_at, '%Y-%m-%d') BETWEEN '".$fromdate."' AND '".$todate."'
                GROUP BY DATE_FORMAT(st.created_at, '%Y-%m-%d')");
        
            foreach($total_summary as $row){
                $total_sms = $row->total_sms;
                $total_price = $row->total_price;
                $total_sell_price = $row->total_sell_price;
                $sent_date = $row->sent_date;

                $checkData = UserSmsCounter::where('user_id',$user_id)->whereDate('sent_date', $row->sent_date)->first();
                if($checkData) {
                    $update = UserSmsCounter::find($checkData->id);
                    $update->total_sms = $total_sms;
                    $update->total_price = $total_price;
                    $update->total_sell_price = $total_sell_price;
                    $update->updated_at = date('Y-m-d H:i:s');
                    $update->save();
                }else{
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = $sent_date;
                    $sms_c['total_sms'] = $total_sms;
                    $sms_c['total_price'] = $total_price;
                    $sms_c['total_sell_price'] = $total_sell_price;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    UserSmsCounter::insert($sms_c);
                }
            }
        }
    }

   
}

