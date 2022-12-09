<?php

namespace App;

use Cache;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Common;
require_once(__DIR__."/ADNsmslibrary/lib/AdnSmsNotification.php");

use AdnSms\AdnSmsNotification;
use App\Models\Configuration;
use App\Models\sms_senders;
use App\Models\sms_transactions;
use App\Models\User;

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Dhaka');

class SendSMS extends Model {

    //

    public static function send() {
        $campaigns = DB::table('campaigns')
                        ->select('id','group_id', 'mask', 'start_date', 'text_body', 'sender', 'id', 'dynamic_sms', 'sms_count', 'user_id', 'sms_type')
                        ->where('status', 4)
                        ->where('start_date', '<=', date('Y-m-d H:i:s'))
                        ->orderBy('id', 'asc')->first();
    

        $contacts = '';

        if (isset($campaigns)) {
            $campaign_id = $campaigns->id;
            $group_id = explode(',', $campaigns->group_id);
            $sms_body = isset($campaigns->text_body) ? $campaigns->text_body : '';
            $sender = isset($campaigns->sender) ? $campaigns->sender : '';

            // $contacts = DB::table('contacts')
            //     ->select('id', 'country_code', 'number', 'operator', 'user_id', 'group_id', 'reseller_id')
            //     ->whereIn('group_id',$group_id) // [1,4,5]
            //     ->where('status', 1)->get();
            ## For Dynmic SMS
            $sms_count = 0;
            if ($campaigns->dynamic_sms == 1) {

                $contacts = DB::table('dynamic_sms')
                                ->select('id', 'country_code', 'message', 'number', 'operator', 'user_id', 'sms_cost', 'sms_count')
                                ->where('campaign_id', $campaign_id) // [2,4,5]
                                ->where('status', 1)->skip(0)->take(1)->get();
            } else {
                $contacts = DB::table('sms_sender_table')
                                ->select('id', 'country_code', 'number', 'operator', 'user_id', 'group_id', 'reseller_id')
                                ->where('campaign_id', $campaign_id) // [2,4,5]
                                ->whereIn('group_id', $group_id) // [2,4,5]
                                ->where('status', 1)->skip(0)->take(1)->get();

                 //print_r($contacts) ; exit ;
                $sms_count = isset($campaigns->sms_count) ? $campaigns->sms_count : 0;
            }

            // print_r($contacts) ; exit ;

            if (count($contacts) > 0) {
                //DB::table('campaigns')->where('id', $campaigns->id)->update(['status' => 2]);
        

                
                foreach ($contacts as $key => $contact) {
                    try {
                        $res = '';
                        DB::table('sms_sender_table')->where('campaign_id', $campaign_id)->where('number', '=', $contact->number)->update(['status' => 2]);
                    
	                    $data = [];
	                    $data['to'] = $contact->country_code . $contact->number;
	                    if ($campaigns->dynamic_sms == 1) {
	                        $sms_body = isset($contact->message) ? $contact->message : '';
	                        $sms_body = isset($contact->api_text) ? $contact->api_text : $sms_body;
	                        $data['message'] = $sms_body;
	                    }else{
	                        $data['message'] = $sms_body;
	                    }
	                    $contacts_arr[] = $data;

                        // dd($contacts_arr);

                        if ($campaigns->mask == 1) {
                            DB::table('dynamic_sms')->where('campaign_id', $campaign_id)->where('number', '=', $contact->number)->update(['status' => 2]);
                           
                            if ($contact->operator == 'RB') {
                                $response = SendSMS::RobiApi($contacts_arr, $campaigns->sender);
                                $vendor_api = 'ROBIAPI';
                            } else if ($contact->operator == 'AL') {
                                $response = SendSMS::RobiApi($contacts_arr, $campaigns->sender);
                                $vendor_api = 'ROBIAPI';
                            } else if ($contact->operator == 'BL') {
                                $response = SendSMS::BanglalinkApi($contacts_arr, $campaigns->sender);
                                $vendor_api = 'BanglalinkApi';
                            } else if ($contact->operator == 'TL') {
                            	//echo "teletalkk";
                                $response = SendSMS::TeleTalkApi($contacts_arr, $campaigns->sender);
                                $vendor_api = 'TeleTalkApi';
                            } else if ($contact->operator == 'GP') {
                                $response = SendSMS::gpApiNew($contacts_arr, $campaigns->sender);
                                $vendor_api = 'GpApi';


                            }

                            $res = json_decode($response);
                            
                        } else {
                            $getOperator = User::whereId($campaigns->user_id)->first();
                            $getUserSelectedOperator = $getOperator->operator;
                            $global_api = Configuration::pluck('priority_1')->first();

                            $api_name = ($getUserSelectedOperator !='' ? $getUserSelectedOperator : $global_api);
                            $response = SendSMS::routeSMS($api_name,  $contacts_arr, $campaigns->sender, $campaigns->sms_type);
                            $vendor_api = $api_name;
                            $res = json_decode($response);
                            
                            if (isset($res->success) && $res->success == 0) {
                            # Priority 2
                                $api_name = Configuration::pluck('priority_2')->first();
                                //dd($api_name);
                                $response = SendSMS::routeSMS($api_name,  $contacts_arr, $campaigns->sender, $campaigns->sms_type);
                                $vendor_api = $api_name;
                                $res = json_decode($response);

                                if (isset($res->success) && $res->success == 0) {
                                # Priority 3
                                    $api_name = Configuration::pluck('priority_3')->first();
                                    $response = SendSMS::routeSMS($api_name,  $contacts_arr, $campaigns->sender, $campaigns->sms_type);
                                    $vendor_api = $api_name;
                                    $res = json_decode($response);
                                }
                            }
                        }

                        


                        if (isset($res->success) && $res->success == 1) {
                                                    
                                $price = null;
                                if ($campaigns->dynamic_sms == 1) {
                                    $price = isset($contact->sms_cost) ? $contact->sms_cost : '';
                                }
                                $data = array();
                                $data['user_id'] = $contact->user_id;
                                $data['group_id'] = isset($contact->group_id) ? $contact->group_id : 0;
                                $data['operator'] = $contact->operator;
                                $data['campaign_id'] = $campaigns->id;
                                $data['country_code'] = $contact->country_code;
                                $data['mobile_number'] = $contact->country_code . $contact->number;
                                $data['vendor_api'] = $vendor_api;
                                $data['reseller_id'] = isset($contact->reseller_id) ? $contact->reseller_id : 0;
                                $data['created_at'] = date('Y-m-d H:i:s');
                                $data['comments'] = $res->msg;
                                $data['status'] = $res->success;
                                $data['smsid'] = $res->smsid;
                                $data['price'] = $price;
                                $data['sms_count'] = ($campaigns->dynamic_sms == 1) ? $contact->sms_count : $sms_count;
                                //$data['text']          = "$sms_body";
                                sms_transactions::insert($data);

                                $operator =  $data['operator'];
                                $user_id = $data['user_id'];
                                $sms_count = $data['sms_count'];
                                $campaigns->mask == 1 ? $type = 1 : $type = 2;

                                UserSMSCount::getUserSMSsummary($operator,$user_id,$sms_count,$type);

                                if ($campaigns->dynamic_sms == 1) {
                                    DB::table('dynamic_sms')->where('id', $contact->id)->delete();
                                }else{
                                    sms_senders::where('id', $contact->id)->delete();
                                }
                            
                        }
                    } catch (\Exception $e) {
                        echo $e->getMessage(); exit;

                        DB::table('error_log')->insert(
                                [
                                    'campaign_id' => $campaigns->id,
                                    'mobile' => $contact->country_code . $contact->number,
                                    'vendor_api' => "",
                                    'api_response' => '',
                                    'error_text' => $e->getMessage(),
                                    'created_at' => date('Y-m-d H:i:s'),
                                ]
                        );
                    }
                    
                }
            } else {
                DB::table('campaigns')->where('id', $campaigns->id)->update(['status' => 3]);
            }
        }
    }

# Banglalink API

    public static function BanglalinkApi($contacts_arr, $mask = '') {

        //https://vas.banglalink.net/sendSMS/sendSMS?userID=ajratech2&passwd=ajratech2@Kqn183&sender=&message=testing&msisdn=8801829673377
        if (!$mask) {
            $mask = '';
        }

        $message = "";
        $smsStr ="";
        foreach ($contacts_arr as $value) {
            $smsStr .= $value['to'].";";
            $message = $value['message'];
        }
        $smsStr = rtrim($smsStr, ',');

        //Need Creadentials
        $parameteres = [
            'userID' => 'ajratech2',
            'passwd' => 'ajratech2@Kqn183',
            'sender' => $mask,
            'message' => str_replace('+', '%20', $message),
            'msisdn' => $smsStr,
        ];



        if ($smsStr !="") {
            $url = "https://vas.banglalink.net/sendSMS/sendSMS?" . http_build_query($parameteres);

           //echo $url;exit;
            $response = SendSMS::curlFunc($url);
           // print_r($response);

            $getresult['success'] = 0;
            $getresult['msg'] = 'SMS failed';
            $getresult['smsid'] = '';
            $getresult['destination'] = '';
            $getresult['operator'] = '';
            $getresult['price'] = '0.0';


            if (isset($response) && $response != "Sorry you send wrong username") {
                $getresult['success'] = 1;
                $getresult['msg'] = 'SMS sent successfully';
                $getresult['smsid'] = '';
                $getresult['destination'] = '';
            }

            header('Content-Type: application/json');
            return json_encode($getresult);
        }
    }
    

# Teletalk Api

    public static function TeleTalkApi($contacts_arr = '', $mask='') {
        $user = 'ajratech';
        if ($mask == '' || $mask == 'ajratech') {
            $user = 'ajratech';
        }
        


        $smsidArr = array();
        foreach ($contacts_arr as $data) {
            // code...
        

            $unicode = Common::uniChecker($data['message']);
            $parameteres = [
                'op' => 'SMS',
                'user' => $user,
                'pass' => 'Ajrtech@76',
                'mobile' => urlencode($data['to']),
                'charset' => ($unicode ? 'UTF-8' : 'ASCII'),
                'sms' => $data['message'],
                
            ];
            $response = '';

            if ($data['to'] !='') {
                $url = "http://bulksms.teletalk.com.bd/link_sms_send.php?" . http_build_query($parameteres);
                // echo $url;
                $response = SendSMS::curlFunc($url);
                //echo $response;
                $exp_response = explode(',', $response); //SendSMS::curlFunc($url);


                $getresult['success'] = 0;
                $getresult['msg'] = 'SMS failed';
                $getresult['smsid'] = '';
                $getresult['destination'] = '';
                $getresult['operator'] = '';
                $getresult['price'] = '0.0';

                if (stripos($response, "SUCCESS") !== false) {
                    array_push($smsidArr,$exp_response[1]);
                    $getresult['success'] = 1;
                    $getresult['msg'] = 'SMS sent successfully';
                    $getresult['smsid'] = isset($exp_response[1]) ? $exp_response[1] : '';
                    $getresult['destination'] = $response;
                    $val = isset($exp_response[3]) ? $exp_response[3] : '';
                    $cur_price = explode("=", $val);
                    $operator_credit = number_format($cur_price[1], 0);

	                DB::table('api_status')->where('name', 'teletalk')
	                    ->update([
                        'name' => 'teletalk',
	                    'credits' => $operator_credit,
	                    'status'  => 1,
	                    'updated_at' => date("Y-m-d H:i:s")
	                ]);
                }
               
            }
        }

        $getresult['smsidArr'] = $smsidArr;

        header('Content-Type: application/json');
        //print_r($getresult);
        return json_encode($getresult);

    }

# Robi API

    public static function RobiApi($contacts_arr, $mask = '') {

        //dd($contacts_arr);

        if (!$mask) {
            $mask = 'adareach';
        }
        $message = "";
        $smsStr ="";
        foreach ($contacts_arr as $value) {
            $smsStr .= $value['to'].",";
            $message = $value['message'];
        }
        $smsStr = rtrim($smsStr, ',');

        //echo $smsStr;exit;
        //   $message = iconv("UTF-8", "UTF-32", $message);
        //  $message = SendSMS::textConvert($message);
        $parameteres = [
            'Username' => 'ajratech',
            'Password' => "Dhaka@5599",
            'From' => $mask,
            'Message' => str_replace('+', '%20', $message),
            'To' => $smsStr,
        ];

       // print_r($parameteres);exit;

        //https://api.mobireach.com.bd/SendTextMultiMessage?Username=testuser&Password=XXXXXX&From=88018XXXXXXXX&To=8801XXXXXXXXXX,8801XXXXXXXXXX,8801XXXXXXXXXX&Message=testmessage

        if ($smsStr !="") {
            $url = "https://api.mobireach.com.bd/SendTextMultiMessage?" . http_build_query($parameteres);
            //echo  $url;
            $res = SendSMS::curlFunc($url);
            $xml = simplexml_load_string($res);
            if ($xml === false) {
                
            } else {
                $response = json_decode(json_encode($xml), true);
            }

            //print_r($response['ServiceClass']);

            
            $getresult['success'] = 0;
            $getresult['msg'] = 'SMS failed';
            $getresult['smsid'] = '';
            $getresult['destination'] = '';
            $getresult['operator'] = '';
            $getresult['price'] = '0.0';

            if (isset($response['ServiceClass']) && isset($response['ServiceClass']['MessageId'])) {
               // echo "=========================Single SMS sent form robi=============================";
                $getresult['success'] = 1;
                $getresult['msg'] = 'SMS sent successfully';

                if($response['ServiceClass']['Status'] == '0'){
	                $getresult['smsid'] = $response['ServiceClass']['MessageId'];
	                $getresult['destination'] = $response['ServiceClass']['StatusText'];
	                $operator_credit = $response['ServiceClass']['CurrentCredit'];
	                DB::table('api_status')->where('name', '=', 'robi')
	                ->update([
	                    'credits' => $operator_credit,
	                    'status'  => 1,
	                    'updated_at' => date("Y-m-d H:i:s")
	                ]);
            	}
            }
            if(isset($response['ServiceClass'][0])  && isset($response['ServiceClass'][0]['MessageId'])){
               // echo "=========================Bulk SMS sent form robi=============================";
                $getresult['success'] = 1;
                $getresult['msg'] = 'SMS sent successfully';
                $getresult['smsid'] = '';
                $getresult['destination'] = 'Success';
                $getresult['smsidArr'] = $response['ServiceClass'];
                $operator_credit = $response['ServiceClass'][0]['CurrentCredit'];
                 DB::table('api_status')->where('name', '=', 'robi')
                 ->update([
                     'credits' => $operator_credit,
                     'status'  => 1,
                     'updated_at' => date("Y-m-d H:i:s")
                 ]);
            }


            header('Content-Type: application/json');
            return json_encode($getresult);
        }
    
    }


    public static function gpApiNew($contacts_arr = '',$mask = '') {
        $user = '';
        $pass = '';
        if (!$mask) {
            $mask = '';
        } else {

            // $gpmask = config('gpmask');
            // if (isset($gpmask[$mask])) {
            //     $user = trim($gpmask[$mask]['user']);
            //     $pass = trim($gpmask[$mask]['pass']);
            // }
        }

        $text = "";
        $smsStr = '';
        $smsArr = "";
        $smsArr .="[";

        foreach ($contacts_arr as $value) {
            $smsArr .= '"'.substr($value['to'], 2, 11).'",';
            $smsStr .= '"'.substr($value['to'], 2, 11).'"';
            $text = $value['message'];
        }
        $smsArr = rtrim($smsArr, ',');
        $smsArr .="]";

    //    echo $text;

        $messagetype = 1;
        if (SendSMS::uniChecker($text) === true) {
            $messagetype = 3;
            $text = SendSMS::textConvert($text);
            //echo "After textConvert=> <pre>".$text."</pre>";
            //$text = SendSMS::text2Hex($text);
            //echo "After text2Hex=> <pre>".$text."</pre>";
            $text = SendSMS::getUniCode($text);
            //echo "After getUniCode => <pre>".$text."</pre>";
        } else {
            $text = SendSMS::textConvert($text);
            $text = str_replace('~', '\"', $text);
            $text = str_replace('`', '\r', $text);            
        }


        




        if(count($contacts_arr) > 1){
        	$request_body = '{ "username": "' . $user . '", "password": "' . $pass . '", "apicode": "6", "msisdn": ' . $smsArr . ', "countrycode": "880", "cli": "' . $mask . '", "messagetype": "' . $messagetype . '", "message": "' . $text . '", "messageid": "0" }';
        }else{
        	$request_body = '{ "username": "' . $user . '", "password": "' . $pass . '", "apicode": "1", "msisdn": ' . $smsStr . ', "countrycode": "880", "cli": "' . $mask . '", "messagetype": "' . $messagetype . '", "message": "' . $text . '", "messageid": "0" }';
        }



        //echo $request_body;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://gpcmp.grameenphone.com/ecmapigw/webresources/ecmapigw.v2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request_body,
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

        //print_r($responseData);

        $getresult['success'] = 0;
        $getresult['msg'] = 'SMS failed';
        $getresult['smsid'] = '';
        $getresult['destination'] = '';
        $getresult['operator'] = '';
        $getresult['price'] = '0.0';

        if (isset($responseData['statusCode']) && $responseData['statusCode'] == '200') {
            $getresult['success'] = 1;
            $getresult['msg'] = 'SMS sent successfully';
            $getresult['smsid'] = '';
            $getresult['destination'] = '';
        }

        header('Content-Type: application/json');
        return json_encode($getresult);
    }


public static function gpBalance() {
        $user = 'NTLadmin';
        $pass = 'N@jjTech123$';

        	$request_body = '{ "username": "' . $user . '", "password": "' . $pass . '", "apicode": "3", "msisdn":"0", "countrycode": "0", "cli": "0", "messagetype": "0", "message": "0", "messageid": "0" }';

        //echo $request_body;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://gpcmp.grameenphone.com/ecmapigw/webresources/ecmapigw.v2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request_body,
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

        

        if (isset($responseData['statusCode']) && $responseData['statusCode'] == '200') {
           $response = $responseData['message'];
        }
        DB::table('api_status')->where('name', '=', 'gp')
                 ->update([
                     'credits' => substr_replace($response,'.',-2,0),
                     'status'  => 1,
                     'updated_at' => date("Y-m-d H:i:s")
                 ]);
        

        header('Content-Type: application/json');
        return json_encode($response);
    }    

# Curl function

    public static function curlFunc($url) {
        //echo $url;exit;
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

    public static function uniChecker($text) {
        if (strlen($text) != strlen(utf8_decode($text))) {
            return true;
        }
        return false;
    }

    

    public static function textConvert($txt) {
        $txt = str_replace('"', '~', $txt); 
        //$txt = str_replace(["\r\n", "\u\n", "\r", "\n"], "`", $txt);
        $txt = str_replace("\r\n", "`", $txt);
        //$txt = str_replace("\u\n", "``", $txt);
        $txt = str_replace("\r", "```", $txt);
        $txt = str_replace("\n", "````", $txt);
        $txt = str_replace(' ', ' ', $txt); //\u
        $txt = str_replace('&', '&', $txt);

        return $txt;
    }

    public static function text2Hex($text) {
        $txtValue = '';
        for ($i = 0; $i < strlen($text); $i++) {
            //echo hexCode($hextext[$i]);
            $t = SendSMS::functionHexArray($text[$i]);
            $txtValue .= $t;
        }

        return $txtValue;
    }

    public static function getUniCode($txt) {
        //$txt = json_encode($txt); //\u
        $txt = str_replace('"', ' ', $txt);
        $txt = str_replace('~', '"', $txt); // 
        $txt = str_replace('""', '"', $txt); // here "" come for " quote
        $txt = str_replace("\u", '', $txt);
        //$txt = str_replace(' ', '0020', $txt); //0027
        //$txt = str_replace("'", '0027', $txt);
        //echo "Before uppercase => <pre> $txt </pre>";
        //$txt = strtoupper($txt);
        //echo "After uppercase => <pre> $txt </pre>";
        $txt = str_replace('`', '\n', $txt);
        return $txt;
    }


    public static function functionHexArray($chr) {
        $char = [
            
            
            'Z' => '005A',
            'X' => '0058',
            'C' => '0043',
            'V' => '0056',
            'B' => '0042',
            'N' => '004E',
            'M' => '004D',
            'z' => '007A',
            'x' => '0078',
            'c' => '0063',
            'v' => '0076',
            'b' => '0062',
            'n' => '006E',
            'm' => '006D',
            'A' => '0041',
            'S' => '0053',
            'D' => '0044',
            'F' => '0046',
            'G' => '0047',
            'H' => '0048',
            'J' => '004A',
            'K' => '004B',
            'L' => '004C',
            ':' => '003A',
            'a' => '0061',
            's' => '0073',
            'd' => '0064',
            'f' => '0066',
            'g' => '0067',
            'h' => '0068',
            'j' => '006A',
            'k' => '006B',
            'l' => '006C',
            ';' => '003B',
            'Q' => '0051',
            'W' => '0057',
            'E' => '0045',
            'R' => '0052',
            'T' => '0054',
            'Y' => '0059',
            'U' => '0055',
            'I' => '0049',
            'O' => '004F',
            'P' => '0050',
            'q' => '0071',
            'w' => '0077',
            'e' => '0065',
            'r' => '0072',
            't' => '0074',
            'y' => '0079',
            'u' => '0075',
            'i' => '0069',
            'o' => '006F',
            'p' => '0070',


            '1' => '0031',
            '2' => '0032',
            '3' => '0033',
            '4' => '0034',
            '5' => '0035',
            '6' => '0036',
            '7' => '0037',
            '8' => '0038',
            '9' => '0039',
            '0' => '0030',

            '<' => '003C',
            '>' => '003E',
            '?' => '003F',
            //',' => '002C',
            '.' => '002E',
            '/' => '002F',
            "\'" => '005C',
            
            '{' => '007B',
            '}' => '007D',
            //'-' => '002D',
            '=' => '003D',
            '!' => '0021',
            '@' => '0040',
            '#' => '0023',
            '$' => '0024',
            '%' => '0025',
            '^' => '005E',
            '&' => '0026',
            '*' => '002A',
            '(' => '0028',
            ')' => '0029',
            '_' => '005F',
            '+' => '002B',
            '[' => '005B',
            ']' => '005D',
            '|' => '007C'
        ];

        return isset($char[$chr]) ? $char[$chr] : $chr;
    }

    #  Value First

    

   

    public static function mirTel($contacts = '') {
        $apiKey = 'R2000199617d9227d609f2.12995255';
        $senderid = '8809601002785';
        
        $url = "http://www.btssms.com/smsapimany";
       
        $data = [
            "api_key" => "$apiKey",
            "senderid" => "$senderid",
            "messages" => json_encode($contacts)
        ];
        //echo "<br/>";
    //    print_r($data);exit;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        // if ($err) {
        //      echo "cURL Error #:" . $err;
        // } else {
        //      echo $response;
        // }
       

        $responseData = json_decode($response, true);
        //print_r($responseData);

        $getresult['success'] = 1;
        $getresult['msg'] = 'SMS sent successfully';
        $getresult['smsid'] = $responseData;
        $getresult['destination'] = '';
        

        if ($responseData == '1002' || $responseData == '1003' || $responseData == '1004' || $responseData == '1005' || $responseData == '1006' || $responseData == '1007' || $responseData == '1008' || $responseData == '1009' || $responseData == '1010' || $responseData == '1011') {
            $getresult['success'] = 0;
            $getresult['msg'] = 'SMS failed';
            $getresult['smsid'] = '';
            $getresult['destination'] = '';
            $getresult['operator'] = '';
            $getresult['price'] = '0.0';
            
        }



        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://www.btssms.com/miscapi/R2000199617d9227d609f2.12995255/getBalance',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: application/html",
                    "postman-token: 35b1b556-9ad7-5cd8-e7be-8f33565e0558",
                ),
                
            ));
            $response = curl_exec($curl);
           // echo  $response;
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo $err;
            } else {
                //$response = json_decode($response);

                if (isset($response)) {
                    $balance_str = explode("BDT",$response);
                DB::table('api_status')->where('name', '=', 'mirtel')
                    ->update([
                        'credits' => $balance_str[1],
                        'updated_at' => date("Y-m-d H:i:s")
                    ]);
                }
            }



        //print_r($getresult);exit;

        header('Content-Type: application/json');
        return json_encode($getresult);
    }

    public static function adnTel($contacts_arr){
        $smsArray =[];
        foreach ($contacts_arr as $value) {
            $sms=[];
            $sms['mobile']= $value['to'];
            $sms['message_body']= $value['message'];
            $smsArray[] = $sms;
        }

        $messageType = 'TEXT'; // option available: "TEXT", "UNICODE"
        $campaignTitle = date('Ymdhis').'_MultibodyCampaign'; // optional for MULTIBODY_CAMPAIGN

        /*
         * Prepare the $smsArray for Multibody Campaign
         */
        // $smsArray = [
        //     ['mobile' => '8801829673377', 'message_body' => 'This is message body 01'],
        //     ['mobile' => '8801730085980', 'message_body' => 'This is message body 02'],
            
        // ];
        $sms = new AdnSmsNotification();
        $response = $sms->multibodyCampaign($smsArray, $messageType, $campaignTitle);

        $responseData = json_decode($response, true);

       // print_r($responseData) ;exit;

        $getresult['success'] = 0;
        $getresult['msg'] = 'SMS failed';
        $getresult['smsid'] = '';
        $getresult['destination'] = '';
        $getresult['operator'] = '';
        $getresult['price'] = '0.0';

        if ($responseData['api_response_code'] =='200' && $responseData['api_response_message'] == 'SUCCESS' ) {
            $getresult['success'] = 1;
            $getresult['msg'] = 'SMS sent successfully';
            $getresult['smsid'] = $responseData['sms_uid'];
            $getresult['destination'] = '';
           // echo $getresult['msg'];
        }

        header('Content-Type: application/json');
        return json_encode($getresult);



    }

    public static function ranksTelBulkSMS($contacts_arr){
        $smsArray =[];
        $smstext = '';
        foreach ($contacts_arr as $value) {
            $smstext = $value['message'];
            $sms=[];
            $sms['gsm']= $value['to'];
            //$sms['text']= $value['message'];
            $smsArray[] = $sms;
        }
        //$smsArray= json_encode($smsArray);
        $postData = '';
        if(SendSMS::uniChecker($smstext) === true) {
            

            $data=array(
                'authentication'=>array(
                    'username'=>'AJRA-TECH',
                    'password'=>'R1nQt5!474g#su@jan'
                ),
                'messages'=>array(array(
                    'sender'=> '8809617609821',
                    'text'=> $smstext,
                    'type' => 'longSMS',
                    'datacoding'=> 8, 
                    'recipients'=> $smsArray
                ))
            );
        }else{
            

            $data=array(
                'authentication'=>array(
                    'username'=>'AJRA-TECH',
                    'password'=>'R1nQt5!474g#su@jan'
                ),
                'messages'=>array(array(
                    'sender'=> '8809617609821',
                    'text'=> $smstext,
                    'type' => 'longSMS',
                    'recipients'=> $smsArray
                ))
            );


        }

        
        $jsondata = json_encode($data);
        //echo $jsondata;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://api.rankstelecom.com/api/v3/sendsms/json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsondata,
            CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        //print_r($response);
        $getresult['success'] = 0;
        $getresult['msg'] = 'SMS failed';
        $getresult['smsid'] = '';
        $getresult['destination'] = '';
        $getresult['operator'] = '';
        $getresult['price'] = '0.0';

        if (isset($response->results) && $response->results[0]->status == '0') {
            $getresult['success'] = 1;
            $getresult['msg'] = 'SMS sent successfully';
            $getresult['smsid'] = $response->results[0]->status;
            $getresult['destination'] = $response->results[0]->destination;
        }
        header('Content-Type: application/json');
        return json_encode($getresult);
    }



    public static function ranksTelBulkSMS_old($contacts_arr){
        $smsArray =[];
        $smstext = '';
        foreach ($contacts_arr as $value) {
            $smstext = $value['message'];
            $sms=[];
            $sms['gsm']= $value['to'];
            //$sms['text']= $value['message'];
            $smsArray[] = $sms;
        }
        $smsArray= json_encode($smsArray);
        $postData = '';
        if(SendSMS::uniChecker($smstext) === true) {
            $postData .= '[{ 
                        "sender": "8809617609821", 
                        "text": "'.$smstext.'",
                        "datacoding": "8", 
                        "recipients": '.$smsArray.'
                    }]';
        }else{
            $postData .='[{ 
                        "sender": "8809617609821", 
                        "text": "'.$smstext.'", 
                        "recipients": '.$smsArray.'
                    }]';
        }
        //echo $postData;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://api.rankstelecom.com/api/v3/sendsms/json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{ 
                "authentication": { 
                    "username": "AJRA-TECH", 
                    "password": "R1nQt5!474g#su@jan" 
                }, 
                "messages":  '.$postData.'
            }',
            CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        print_r($response);
        $getresult['success'] = 0;
        $getresult['msg'] = 'SMS failed';
        $getresult['smsid'] = '';
        $getresult['destination'] = '';
        $getresult['operator'] = '';
        $getresult['price'] = '0.0';

        if (isset($response->results) && $response->results[0]->status == '0') {
            $getresult['success'] = 1;
            $getresult['msg'] = 'SMS sent successfully';
            $getresult['smsid'] = $response->results[0]->status;
            $getresult['destination'] = $response->results[0]->destination;
        }
        header('Content-Type: application/json');
        return json_encode($getresult);

    }

    public static function getActiveAPiName() {

        
    }

    public static function routeSMS($vendor_name, $contacts_arr, $mask='',  $sms_type='') {

        $response = '';
        switch ($vendor_name) {
            case "banglalink":
                $response = SendSMS::BanglalinkApi($contacts_arr, $mask);
                break;
            
            case "robi":
                $response = SendSMS::RobiApi($contacts_arr, $mask);
                break;
            case "teletalk":
                $response = SendSMS::TeleTalkApi($contacts_arr, $mask);
                break;
            case "grameenphone":
                $response = SendSMS::gpApiNew($contacts_arr, $mask,$sms_type);
                //$response = SendSMS::ranksTelBulkSMS($contacts_arr);
                break;
            case "rankstel":
                $response = SendSMS::ranksTelBulkSMS($contacts_arr);
                break;
            // case "mirtel":
            //     $response = SendSMS::mirTel($contacts_arr,$sms_type);
            //     break;
            // case "adn":
            //     $response = SendSMS::adnTel($contacts_arr);
            //     break;
            default:
            // echo "Your favorite color is neither red, blue, nor green!";
        }

       

        return $response;
    }

    

}
