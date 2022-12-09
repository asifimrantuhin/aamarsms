<?php

namespace App;

use Cache;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Common;
use App\SendSMS;
require_once(__DIR__."/ADNsmslibrary/lib/AdnSmsNotification.php");
use ADNsmslibrary\AdnSms\AdnSmsNotification;
use App\Models\Campaign;
use App\Models\Configuration;
use App\Models\DynamicSMS;
use App\Models\sms_senders;
use App\Models\sms_transactions;
use App\Models\User;

ini_set('max_execution_time', 0);
date_default_timezone_set('Asia/Dhaka');

class BulkService extends Model {

    public static function send($campaign_id, $min_id = 0, $max_id = 0, $limit) {
        //echo "bulk\model";

        $skip = 0;
        $campaigns = Campaign::select('group_id', 'mask', 'start_date','campaign_cost', 'text_body', 'sender', 'id', 'dynamic_sms', 'sms_count', 'user_id','sms_type')
                ->where('id', $campaign_id)
                ->where('status', 4) //2
                ->where('start_date', '<=', date('Y-m-d H:i:s'))
                ->orderBy(\DB::raw('RAND()'))
                ->first();


        $contacts = '';

        if (isset($campaigns->group_id)) {
            $group_id = explode(',', $campaigns->group_id);
            $sms_body = isset($campaigns->text_body) ? $campaigns->text_body : '';
            $sender = isset($campaigns->sender) ? $campaigns->sender : '';

            $sms_count = 0;
            if ($campaigns->dynamic_sms == 1) {

                $contacts = DynamicSMS::select('id', 'country_code', 'message', 'number', 'operator', 'user_id', 'sms_cost', 'sms_count')
                                ->where('campaign_id', $campaigns->id) 
                                ->whereBetween('id', [$min_id, $max_id])
                                ->where('status', 2)
                                ->orderBy('id', 'desc')
                                ->take($limit)->get();
            } else {
            $contacts = sms_senders::select('id', 'country_code', 'number', 'operator', 'user_id', 'group_id', 'reseller_id')
                                ->whereIn('group_id', $group_id)
                                ->whereBetween('id', [$min_id, $max_id])
                                ->where('status', 2)
                                ->orderBy('id', 'asc')
                                ->take($limit)->get();
                

                $sms_count = isset($campaigns->sms_count) ? $campaigns->sms_count : 0;
            }
                        $res = '';

            if (count($contacts) > 0) {
                foreach ($contacts as $key => $contact) {
                     sms_senders::where('campaign_id', $campaign_id)->where('number', '=', $contact->number)->update(['status' => 2]);
                    # code...
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
                }
            }



            if ($campaigns->mask == 1) {
                
                $robiArr = [];
                $alArr = [];
                $blArr = [];
                $ttArr = [];
                $gpArr = [];

                foreach ($contacts as $key => $contact) {

                    $data = [];
                    $data['to'] = $contact->country_code . $contact->number;

                    if ($campaigns->dynamic_sms == 1) {
                        $sms_body = isset($contact->message) ? $contact->message : '';
                        $sms_body = isset($contact->api_text) ? $contact->api_text : $sms_body;
                        $data['message'] = $sms_body;
                    }else{
                        $data['message'] = $sms_body;
                    }
                   
                    if ($contact->operator == 'RB') {
                        $robiArr[]= $data;
                        $vendor_api = 'ROBIAPI';
                    } else if ($contact->operator == 'AL') {
                        $alArr[]= $data;
                        $vendor_api = 'ROBIAPI';
                    } else if ($contact->operator == 'BL') {
                        $blArr[]= $data;
                        $vendor_api = 'BanglalinkApi';
                    } else if ($contact->operator == 'TL') {
                        $ttArr[]= $data;
                        $vendor_api = 'TeleTalkApi';
                    } else if ($contact->operator == 'GP') {
                        $gpArr[]= $data;
                        $vendor_api = 'GpApi';
                    }
                }

                $response = SendSMS::RobiApi($robiArr, $campaigns->sender);
                //$res = json_decode($response);
                BulkService::responsehandle($campaigns, $contacts, json_decode($response), 'RB', 'ROBIAPI');

                $response = SendSMS::RobiApi($alArr, $campaigns->sender);
                //$res = json_decode($response);
                BulkService::responsehandle($campaigns, $contacts, json_decode($response), 'AL', 'ROBIAPI');

                $response = SendSMS::BanglalinkApi($blArr, $campaigns->sender);
                //$res = json_decode($response);
                BulkService::responsehandle($campaigns, $contacts, json_decode($response), 'BL', 'BanglalinkApi');

                $response = SendSMS::TeleTalkApi($ttArr, $campaigns->sender);
                //$res = json_decode($response);
                BulkService::responsehandle($campaigns, $contacts, json_decode($response), 'TL', 'TeleTalkApi');

                $response = SendSMS::gpApiNew($gpArr, $campaigns->sender,$campaigns->sms_type);
                //$res = json_decode($response);
                BulkService::responsehandle($campaigns, $contacts, json_decode($response), 'GP', 'GpApi');
                
            } else{

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

        
           
            // echo $response->success ; exit ;
            if (isset($res->success) && $res->success == 1) {
                //echo "Final response";

                if(isset($res->smsidArr)){
                    $smsidArr = $res->smsidArr;
                    $price = null;
                    if ($campaigns->dynamic_sms == 1) {
                        $price = isset($contact->sms_cost) ? $contact->sms_cost : '';
                    }
                    $f = 0;
                    if (count($contacts) > 0) {
                        foreach ($contacts as $key => $contact) {


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
                            $data['smsid'] = (isset($smsidArr[$f]->MessageId) ? $smsidArr[$f]->MessageId: $smsidArr[$f]) ;
                            $data['price'] = $price;
                            $data['sms_count'] = ($campaigns->dynamic_sms == 1) ? $contact->sms_count : $sms_count;
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
                            $f++;
                        }
                    }

                }else{

                    $price = null;
                    if ($campaigns->dynamic_sms == 1) {
                        $price = isset($contact->sms_cost) ? $contact->sms_cost : '';
                    }
                    if (count($contacts) > 0) {
                        foreach ($contacts as $key => $contact) {
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
                            sms_transactions::insert($data);

                            $operator =  $data['operator'];
                            $user_id = $data['user_id'];
                            $sms_count = $data['sms_count'];
                            $type = 2;

                            UserSMSCount::getUserSMSsummary($operator,$user_id,$sms_count,$type);
                            
                            if ($campaigns->dynamic_sms == 1) {
                                DB::table('dynamic_sms')->where('id', $contact->id)->delete();
                            }else{
                                sms_senders::where('id', $contact->id)->delete();
                            }
                        }
                    }
                }
                
            }

        }
    }



    public static function responsehandle($campaigns,$contacts, $res, $operator, $vendor_api){


        if (isset($res->success) && $res->success == 1) {
                //echo "Final response";
            $sms_count = isset($campaigns->sms_count) ? $campaigns->sms_count : 0;
            if(isset($res->smsidArr)){
                $smsidArr = $res->smsidArr;
                $price = null;
                if ($campaigns->dynamic_sms == 1) {
                    $price = isset($contacts->sms_cost) ? $contacts->sms_cost : 0;
                }
                $f = 0;

                if (count($contacts) > 0) {
                    foreach ($contacts as $key => $contact) {

                        if ($contact->operator === $operator) {
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
                            $data['smsid'] = (isset($smsidArr[$f]->MessageId) ? $smsidArr[$f]->MessageId: $smsidArr[$f]) ;
                            $data['price'] = $contact->sms_cost;
                            $data['sms_count'] = ($campaigns->dynamic_sms == 1) ? $contact->sms_count : $sms_count;
                            //$data['text']          = "$sms_body";
                            sms_transactions::insert($data);

                            $operator =  $data['operator'];
                            $user_id = $data['user_id'];
                            $sms_count = $data['sms_count'];
                            $type = 1;

                            UserSMSCount::getUserSMSsummary($operator,$user_id,$sms_count,$type);

                            if ($campaigns->dynamic_sms == 1) {
                                DynamicSMS::where('id', $contact->id)->delete();
                            }else{
                                sms_senders::where('id', $contact->id)->delete();
                            }
                            $f++;
                        }
                       
                    }
                }

            }else{

                $price = null;
                if ($campaigns->dynamic_sms == 1) {
                    $price = $contacts[0]->sms_cost;
                }
                
                if (count($contacts) > 0) {
                    foreach ($contacts as $key => $contact) {
                        if ($contact->operator === $operator) {
                           // echo $operator;
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
                            $type = 1;

                            UserSMSCount::getUserSMSsummary($operator,$user_id,$sms_count,$type);
                            
                            if ($campaigns->dynamic_sms == 1) {
                                DynamicSMS::where('id', $contact->id)->delete();
                            }else{
                            sms_senders::where('id', $contact->id)->delete();
                            }
                        }
                    }
                }
            }
            
        }
    }

}