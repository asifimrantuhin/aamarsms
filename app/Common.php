<?php

namespace App;

use App\Models\RatePlan;
use App\Models\Recharge;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

date_default_timezone_set('Asia/Dhaka');

class Common extends Model {

    public static function getPriceByUserId($userid, $masking = false, $operator = null) {
        if ($masking == true || $masking == 1) {
            $data = RatePlan::select('masking_price')->where('user_id', $userid);
            if ($operator) {
                return $data->where('operator', $operator)->first();
            }

            $data = $data->get();
        } else {
            $data = RatePlan::select('nonmasking_price')->where('user_id', $userid);
            if ($operator) {
                return $data->where('operator', $operator)->first();
            }

            $data = $data->get();
        }
        // print_r($data);exit;
        return $data;
    }

    public static function getCurrentBalanceById($userid) {
//        $data = DB::table('recharges')->where('user_id', $userid)->orderBy('id', 'desc')->first();
        //        return isset($data->balance) ? $data->balance : 0;
        $balance = \DB::table('recharges')
                ->select(\DB::raw('SUM(amount) as currentBalance'))
                ->where('user_id', $userid)
                ->get();
        return isset($balance) ? $balance[0]->currentBalance : 0;
    }

    public static function getGroupContactsCountByGroupId($group_id) {
        // $data = DB::table('contact_groups')->where()
    }

    public static function addBalance($user_id, $ammount = 0, $comments = '', $transaction_id = '', $rechared_by = 0, $payment_method = '', $type = '') {
         $user_balance = Recharge::take(1)->where('user_id', $user_id)->orderBy('id', 'desc')->first();
        $sales_id = User::where('id',$user_id)->pluck('sales_person')->first();
        $reseller_id = User::where('id',$user_id)->pluck('parent_user')->first();
        $current_balance = isset($user_balance->balance) ? $user_balance->balance : 0;
        $new_balance = ($current_balance + $ammount);
        $data = [
            'user_id' => $user_id,
            'sales_id' => $sales_id,
            'reseller_id' => $reseller_id,
            'amount' => $ammount,
            'balance' => $new_balance,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => 1,
            'comments' => $comments,
            'trx_id' => $transaction_id,
            'recharged_by' => $rechared_by,
            'payment_method' => $payment_method,
            'type' => $type,
        ];
        Recharge::insert($data);
        return $new_balance;    }

    public static function deductBalance($user_id, $ammount = 0, $comments = '') {
        // $data = DB::table('contact_groups')->where()
    }

    public static function getUniCode($txt) {
        $txt = json_encode($txt); //\u
        $txt = str_replace('"', '', $txt); //\u
        $txt = str_replace('\u', '', $txt);
        $txt = str_replace(' ', '0020', $txt); //0027
        $txt = str_replace("'", '0027', $txt);
        $txt = strtoupper($txt);

        return $txt;
    }

    public static function uniChecker($text) {
        if (strlen($text) != strlen(utf8_decode($text))) {
            return true;
        }
        return false;
    }

    public static function smsCount($text) {
        if (strlen($text) != strlen(utf8_decode($text))) {
            $strlength = strlen(utf8_decode($text));
            if ($strlength > 70) {
                $smsLength = ($strlength / 67);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        } else {
            $strlength = strlen($text);
            if ($strlength > 160) {
                $smsLength = ($strlength / 153);
                $smsLength = ceil($smsLength);
            } else {
                $smsLength = 1;
            }
        }

        return $smsLength;
    }
    



       public static function costmerge() {
        $user_id = Auth::user()->id;
        $camp = \DB::table('sms_transactions as st')
                ->select('st.campaign_id', 'c.campaign_name', DB::raw('(SELECT ROUND(SUM(price), 5) FROM sms_transactions WHERE STATUS=1 AND campaign_id=st.campaign_id) AS success_price'), DB::raw('(SELECT ROUND(SUM(price), 5) FROM sms_transactions WHERE STATUS=0 AND campaign_id=st.campaign_id) AS failed_price'), 'c.campaign_cost as camp_cost')
                ->join('campaigns as c', 'st.campaign_id', '=', 'c.id')
                ->where('st.user_id', $user_id)
//                ->where('st.status', 0)
                ->groupBy('st.campaign_id', 'c.campaign_name', 'c.campaign_cost')
                ->orderBy('c.id', 'desc')
                ->get();
//        echo '<pre>';
//                print_r($camp);
//                echo '<pre/>';

        foreach ($camp as $c) {
            $failed_price = $c->camp_cost - $c->success_price;
            if (isset($c->failed_price) || $failed_price) {
//               echo "$c->campaign_id <br/>";
                $campaign_actual_cost = (isset($c->success_price) ? $c->success_price : '0');
                $refaund_amount = str_replace(',', '', $c->camp_cost) - $campaign_actual_cost;
                $refaund_amount = number_format($refaund_amount, 5, '.', '');
                $camp_update = \DB::table('campaigns')
                        ->where('id', $c->campaign_id)
                        ->update(['campaign_cost' => number_format($campaign_actual_cost, 5, '.', '')]);
                $recharge = new Recharge();
                $recharge->user_id = $user_id;
                $recharge->status = 1;
                $recharge->amount = $refaund_amount;
                $recharge->campaign_id = $c->campaign_id;

                if ($refaund_amount > 0) {
                    $recharge->comments = "Cost refunded for " . $c->campaign_name . " Campaign failure number";
                }
                if ($refaund_amount < 0) {
                    $recharge->comments = "Cost deduct for " . $c->campaign_name . " Campaign recent success number";
                }
                $userbalance = Recharge::where('user_id', $user_id)
                                ->whereNotNull('balance')
                                ->orderBy('id', 'DESC')->first();
//                print_r($userbalance);exit;
                if (isset($userbalance)) {
                    $recharge->balance = ($userbalance->balance + $refaund_amount);
                }
                if ($refaund_amount > 0 || $refaund_amount < 0) {
                    $recharge->save();
                }
                //echo "$c->campaign_id / $c->camp_cost / $campaign_actual_cost / $refaund_amount <br/>";
            }
        }
    }


    public static function userBalance($user_id) {
        echo $user_id;
    }

    public static function bkashVerify($transaction_id = 0) {
        $json_request = '{"user":"AJRATECHLTDRM10199","pass":"J@9k6Wnt6","msisdn":"01711407923","trxid":"' . $transaction_id . '"}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "9081",
            CURLOPT_URL => "https://www.bkashcluster.com:9081/dreamwave/merchant/trxcheck/sendmsg",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $json_request,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: bde3d43f-286e-99a4-5bdd-cb2544fb4c18",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

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

        if (!$output) {
            $output = file_get_contents($url);
        }

        return $output;
    }



    public static function getOperatorBalance($opname = '') {
        if ($opname == '') {
            return ['error' => 'Parameter is missing !'];
        }

        if ($opname == 'RanksTel') {
            $data['status'] = 0;

            try {

                $file_get = file_get_contents('http://api.rankstelecom.com/api/command?user=AJRA-TECH&password=R1nQt5!474g#su@jan&cmd=CREDITS');

                if (isset($file_get)) {
                    return ($file_get) ? (trim($file_get) / 100) : 0;
                }
            } catch (Exception $e) {
                $data['status'] = 0;
            }
        }
        //// Metro Net

        if ($opname == 'mirtel') {
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
           // echo  $response;exit;
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo $err;
            } else {
                $response = json_decode($response);

                if (isset($response)) {
                    return $response;
                }
            }
        }

        /// ValueFirst
       if ($opname == 'ValueFirst') {

           $curl = curl_init();

           curl_setopt_array($curl, array(
               CURLOPT_URL => "http://api.myvaluefirst.com/psms/servlet/psms.Eservice2?data=%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22ISO-8859-1%22%3F%3E%3C!DOCTYPE%20REQUESTCREDIT%20SYSTEM%20%22http%3A%2F%2F127.0.0.1%2Fpsms%2Fdtd%2Frequestcredit.dtd%22%20%3E%3CREQUESTCREDIT%20USERNAME%3D%22ajratlxmlint%22%20PASSWORD%3D%22ajra9871%22%3E%3C%2FREQUESTCREDIT%3E&action=credits",
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => "",
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 30,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => "GET",
               CURLOPT_HTTPHEADER => array(
                   "cache-control: no-cache",
                   "postman-token: 35b1b556-9ad7-5cd8-e7be-8f33565e0558",
               ),
           ));

           $response = curl_exec($curl);
           $err = curl_error($curl);

           curl_close($curl);

           if ($err) {
               echo "cURL Error #:" . $err;
           } else {
               $xml = simplexml_load_string($response);
               $r = (array) json_decode(json_encode($xml->Credit));
               $limit = (array) $r['@attributes']->Limit;
               $used = (array) $r['@attributes']->Used;

               if (isset($used[0])) {
                   return ($limit[0] - $used[0]);
               }
           }
       }

        // Robi

        
        /// ValueFirst
        if ($opname == 'Teletalk') {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://bulksms.teletalk.com.bd/link_sms_send.php?op=BALANCE&user=AJRA&pass=AJRA1234",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "postman-token: 35b1b556-9ad7-5cd8-e7be-8f33565e0558",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $credits = '';
            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $xml = simplexml_load_string($response);
                $xml = (array) $xml;

                //print_r( $xml[0]) ;exit ;
                if (isset($xml[0])) {
                    $credits = explode('AVAILABLE CREDIT', $xml[0]);
                    // print_r($credits); exit ;
                    if (isset($credits[1])) {
                        $credits = explode('.', $credits[1]);
                        if (isset($credits[0])) {

                            $credits = str_replace(':', '', $credits[0]);
                            //echo $credits ;exit ;
                        }
                    }
                }

                return $credits;
            }
        }

        // GP
        if ($opname == 'GP78') {

            $request = '{ "username": "AJRATECADMN78", "password": "@dmin@JRA2018", "apicode": "3", "msisdn": "0", "countrycode": "0", "cli": "0", "messagetype": "0", "message": "0", "messageid": "0" }';

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://gpcmp.grameenphone.com/ecmapigw/webresources/ecmapigw.v2",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $request,
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: application/json",
                    "postman-token: 35b1b556-9ad7-5cd8-e7be-8f33565e0558",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response = json_decode($response);

                if (isset($response->statusCode) && $response->statusCode == 200) {
                    return ($response->message / 100);
                }
            }
        }
        if ($opname == 'GP10') {

            $request = '{ "username": "AJRAdmin", "password": "@dmin@JRA2018api", "apicode": "3", "msisdn": "0", "countrycode": "0", "cli": "0", "messagetype": "0", "message": "0", "messageid": "0" }';

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://gpcmp.grameenphone.com/ecmapigw/webresources/ecmapigw.v2",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $request,
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: application/json",
                    "postman-token: 35b1b556-9ad7-5cd8-e7be-8f33565e0558",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response = json_decode($response);

                if (isset($response->statusCode) && $response->statusCode == 200) {
                    return ($response->message / 100);
                }
            }
        }
    }

    public static function getAdminUsersID() {
        $userID = DB::table('users')
                ->where('role', 1)
                ->pluck('id')->toArray();
        
        return $userID;
    }

    public static function getSMSsummary() {
        $sms_summary = DB::table('sms_transactions as st')
                ->select(DB::raw('DATE(st.created_at) AS sent_date'), 'st.vendor_api AS vendor_api', DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='GP' AND DATE(created_at) = sent_date) AND vendor_api = st.vendor_api) AS gp"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='BL' AND DATE(created_at) = sent_date) AND vendor_api = st.vendor_api) AS bl"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='RB' AND DATE(created_at) = sent_date) AND vendor_api = st.vendor_api) AS robi"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='TL' AND DATE(created_at) = sent_date) AND vendor_api = st.vendor_api) AS teletalk"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='AL' AND DATE(created_at) = sent_date) AND vendor_api = st.vendor_api) AS airtel")
                )
                ->groupBy(DB::raw('DATE(st.created_at)'), 'st.vendor_api')
                ->orderBy(DB::raw('DATE(st.created_at)'), 'DESC')
                ->take(3)
                ->get();

        foreach ($sms_summary as $val) {
            $find = DB::table('sms_summary')
                    ->where('sent_date', 'LIKE', '%' . $val->sent_date . '%')
                    ->where('vendor_api', $val->vendor_api)
                    ->get();
            if (count($find) < 1) {
                $sms_sum = array(
                    'sent_date' => $val->sent_date . ' ' . date("H:i:s"),
                    'vendor_api' => $val->vendor_api,
                    'gp' => (isset($val->gp) ? $val->gp : '0'),
                    'bl' => (isset($val->bl) ? $val->bl : '0'),
                    'robi' => (isset($val->robi) ? $val->robi : '0'),
                    'teletalk' => (isset($val->teletalk) ? $val->teletalk : '0'),
                    'airtel' => (isset($val->airtel) ? $val->airtel : '0'),
                );
                $db_insert = DB::table('sms_summary')
                        ->insert($sms_sum);
            } else {
                $sms_sum = array(
                    'sent_date' => $val->sent_date . ' ' . date("H:i:s"),
                    'vendor_api' => $val->vendor_api,
                    'gp' => (isset($val->gp) ? $val->gp : '0'),
                    'bl' => (isset($val->bl) ? $val->bl : '0'),
                    'robi' => (isset($val->robi) ? $val->robi : '0'),
                    'teletalk' => (isset($val->teletalk) ? $val->teletalk : '0'),
                    'airtel' => (isset($val->airtel) ? $val->airtel : '0'),
                );
                $db_update = DB::table('sms_summary')
                        ->where('id', $find[0]->id)
                        ->update($sms_sum);
            }
        }
    }

    public static function getUserSMSsummary() {

        $sms_summary = DB::table('sms_transactions as st')
                ->select(DB::raw('DATE(st.created_at) AS sent_date'), 'st.user_id AS userid', DB::raw('ROUND(SUM(price), 2) as sms_price'), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (mask='1' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS mask"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='GP' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS gp"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='BL' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS bl"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='RB' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS robi"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='TL' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS teletalk"), DB::raw("(SELECT SUM(sms_count) FROM sms_transactions WHERE (operator='AL' AND DATE(created_at) = sent_date) AND user_id = st.user_id) AS airtel")
                )
                ->groupBy(DB::raw('DATE(st.created_at)'), 'st.user_id')
                ->orderBy(DB::raw('DATE(st.created_at)'), 'DESC')
                ->get();
        // dd($sms_summary);
        foreach ($sms_summary as $val) {
            $find = DB::table('user-sms-count')
                    ->where('sent_date', 'LIKE', '%' . $val->sent_date . '%')
                    ->where('user_id', $val->userid)
                    ->get();
            if (count($find) < 1) {
                $sms_sum = array(
                    'user_id' => $val->userid,
                    'sent_date' => $val->sent_date . ' ' . date("H:i:s"),
                    'price' => $val->sms_price,
                    'mask' => (isset($val->mask) ? $val->mask : '0'),
                    'nonmask' => (($val->gp + $val->bl + $val->robi + $val->teletalk + $val->airtel) - $val->mask),
                    'gp' => (isset($val->gp) ? $val->gp : '0'),
                    'bl' => (isset($val->bl) ? $val->bl : '0'),
                    'robi' => (isset($val->robi) ? $val->robi : '0'),
                    'teletalk' => (isset($val->teletalk) ? $val->teletalk : '0'),
                    'airtel' => (isset($val->airtel) ? $val->airtel : '0'),
                    'total' => ($val->gp + $val->bl + $val->robi + $val->teletalk + $val->airtel)
                );
                $db_insert = DB::table('user-sms-count')
                        ->insert($sms_sum);
            }else {
                $sms_sum = array(
                    'user_id' => $val->userid,
                    'sent_date' => $val->sent_date . ' ' . date("H:i:s"),
                    'price' => $val->sms_price,
                    'mask' => (isset($val->mask) ? $val->mask : '0'),
                    'nonmask' => (($val->gp + $val->bl + $val->robi + $val->teletalk + $val->airtel) - $val->mask),
                    'gp' => (isset($val->gp) ? $val->gp : '0'),
                    'bl' => (isset($val->bl) ? $val->bl : '0'),
                    'robi' => (isset($val->robi) ? $val->robi : '0'),
                    'teletalk' => (isset($val->teletalk) ? $val->teletalk : '0'),
                    'airtel' => (isset($val->airtel) ? $val->airtel : '0'),
                     'total' => ($val->gp + $val->bl + $val->robi + $val->teletalk + $val->airtel)
                );
                $db_update = DB::table('user-sms-count')
                        ->where('id', $find[0]->id)
                        ->update($sms_sum);
            }
        }
    }

}