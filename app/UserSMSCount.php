<?php

namespace App;

use App\Models\UserSmsCounter;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;

date_default_timezone_set('Asia/Dhaka');

class UserSMSCount extends Model
{

    public static function getUserSMSsummary($operator, $user_id, $sms_count,$type)
    {

        if($type == 2)
        {
            $nonmask = $sms_count;
            $mask = 0;
        }
        else{
            $mask = $sms_count;
            $nonmask = 0;
        }

        $data = UserSmsCounter::where('user_id',$user_id)->whereDate('sent_date', Carbon::today())->get();

        $gate = count($data);
        if ($gate > 0) {
            $data = UserSmsCounter::where('user_id',$user_id)->whereDate('sent_date', Carbon::today())->get();

            $gp = $data[0]->gp;
            $bl = $data[0]->bl;
            $robi = $data[0]->robi;
            $teletalk = $data[0]->teletalk;
            $airtel = $data[0]->airtel;
            if($type == 2)
            {
                $nonmask = $data[0]->nonmask + $sms_count;
                $mask = $data[0]->mask;
            }else{
                $mask = $data[0]->mask + $sms_count;
                $nonmask = $data[0]->nonmask;
            }

            switch ($operator) {
                case "GP":
                    $result = $gp + $sms_count;
                    $update = UserSmsCounter::find($data[0]->id);
                    $update->sent_date = date('Y-m-d H:i:s');
                    $update->gp = $result;
                    $update->mask = $mask;
                    $update->nonmask = $nonmask;
                    $update->save();
                    break;
                case "BL":
                    $result = $bl + $sms_count;
                    $update = UserSmsCounter::find($data[0]->id);
                    $update->sent_date = date('Y-m-d H:i:s');
                    $update->bl = $result;
                    $update->mask = $mask;
                    $update->nonmask = $nonmask;
                    $update->save();
                    break;
                case "RB":
                    $result = $robi + $sms_count;
                    $update = UserSmsCounter::find($data[0]->id);
                    $update->sent_date = date('Y-m-d H:i:s');
                    $update->robi = $result;
                    $update->mask = $mask;
                    $update->nonmask = $nonmask;
                    $update->save();
                    break;
                case "TL":
                    $result = $teletalk + $sms_count;
                    $update = UserSmsCounter::find($data[0]->id);
                    $update->sent_date = date('Y-m-d H:i:s');
                    $update->teletalk = $result;
                    $update->mask = $mask;
                    $update->nonmask = $nonmask;
                    $update->save();
                    break;
                case "AL":
                    $result = $airtel + $sms_count;
                    $update = UserSmsCounter::find($data[0]->id);
                    $update->sent_date = date('Y-m-d H:i:s');
                    $update->airtel = $result;
                    $update->mask = $mask;
                    $update->nonmask = $nonmask;
                    $update->save();

                    break;
                default:
                    // nothing
                }
                

        } else {

            switch ($operator) {
                case "GP":
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = date('Y-m-d H:i:s');
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['gp'] = $sms_count;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    break;
                case "BL":
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = date('Y-m-d H:i:s');
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['bl'] = $sms_count;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    break;
                case "RB":
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = date('Y-m-d H:i:s');
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['robi'] = $sms_count;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    break;
                case "TL":
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = date('Y-m-d H:i:s');
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['teletalk'] = $sms_count;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    break;
                case "AL":
                    $sms_c = array();
                    $sms_c['user_id'] = $user_id;
                    $sms_c['sent_date'] = date('Y-m-d H:i:s');
                    $sms_c['mask'] = $mask;
                    $sms_c['nonmask'] = $nonmask;
                    $sms_c['airtel'] = $sms_count;
                    $sms_c['created_at'] = date('Y-m-d H:i:s');
                    $sms_c['updated_at'] = date('Y-m-d H:i:s');
                    break;
                default:
                    // nothing
            }
            UserSmsCounter::insert($sms_c);
        }

        
    }




    public static function getUserSMSsummary2($user_id){
        // $sms_summery = DB::Select("SELECT operator, SUM(sms_count) FROM sms_transactions WHERE user_id=$user_id AND DATE_FORMAT(created_at, '%Y-%m-%d')='".date("Y-m-d")."' GROUP BY operator");
        $sms_summary = DB::Select("SELECT user_id,DATE_FORMAT(created_at, '%Y-%m-%d') AS sent_date, operator, SUM(sms_count) AS sms_count  FROM sms_transactions WHERE user_id=$user_id AND DATE_FORMAT(created_at, '%Y-%m-%d') BETWEEN '".$fromdate."' AND '".$todate."' GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d'), operator");

        foreach($sms_summary as $row){
            $user_id = $row->user_id;
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
                        // nothing
                }
            }else{
                switch ($operator) {
                    case "GP":
                        $sms_c = array();
                        $sms_c['user_id'] = $user_id;
                        $sms_c['sent_date'] = $row->sent_date;
                        $sms_c['gp'] = $sms_count;
                        $sms_c['created_at'] = date('Y-m-d H:i:s');
                        $sms_c['updated_at'] = date('Y-m-d H:i:s');
                        break;
                    case "BL":
                        $sms_c = array();
                        $sms_c['user_id'] = $user_id;
                        $sms_c['sent_date'] = $row->sent_date;
                        $sms_c['bl'] = $sms_count;
                        $sms_c['created_at'] = date('Y-m-d H:i:s');
                        $sms_c['updated_at'] = date('Y-m-d H:i:s');
                        break;
                    case "RB":
                        $sms_c = array();
                        $sms_c['user_id'] = $user_id;
                        $sms_c['sent_date'] = $row->sent_date;
                        $sms_c['robi'] = $sms_count;
                        $sms_c['created_at'] = date('Y-m-d H:i:s');
                        $sms_c['updated_at'] = date('Y-m-d H:i:s');
                        break;
                    case "TL":
                       $sms_c = array();
                        $sms_c['user_id'] = $user_id;
                        $sms_c['sent_date'] = $row->sent_date;
                        $sms_c['teletalk'] = $sms_count;
                        $sms_c['created_at'] = date('Y-m-d H:i:s');
                        $sms_c['updated_at'] = date('Y-m-d H:i:s');
                        break;
                    case "AL":
                        $sms_c = array();
                        $sms_c['user_id'] = $user_id;
                        $sms_c['sent_date'] = $row->sent_date;
                        $sms_c['airtel'] = $sms_count;
                        $sms_c['created_at'] = date('Y-m-d H:i:s');
                        $sms_c['updated_at'] = date('Y-m-d H:i:s');
                        break;
                    default:
                        // nothing
                }
                UserSmsCounter::insert($sms_c);
            }
        }

    }
}
