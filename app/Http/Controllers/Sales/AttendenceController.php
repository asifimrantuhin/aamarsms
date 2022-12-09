<?php

namespace App\Http\Controllers\Sales;

use App\Helpers\Log;
use App\Helpers\Notification;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Attendence;
use App\Models\Campaign;
use App\Models\FieldCustomer;
use App\Models\Recharge;
use App\Models\RechargeRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use Config;
use Carbon\CarbonImmutable;
use carbon\CarbonPeriod;

class AttendenceController extends Controller
{
    

    public function AttendenceList(Request $request)
     {

        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $today = date('Y-m-d H:i:s');
        if (empty($from_date)) {
            $from_date = Carbon::now()->startOfMonth();
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }

        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now();
        $days = $end->diff($start)->format('%a');

        $attendence = Attendence::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$from_date, $to_date])
        ->orderBy('id','DESC')
        ->paginate(30);

        $late = Attendence::where('user_id',Auth::user()->id)->where('flag','=','Late')->count();
        $aa = Attendence::where('user_id',Auth::user()->id)->whereBetween('created_at',[$from_date,$today])->count();
        
        $absent = $days - $aa;

        $late>3 ? $latecount = round($late/3) : $latecount = 0;

        // Count Holidays
        $now = CarbonImmutable::now();
        $holidays =  CarbonPeriod::create($now->startOfMonth(), $now->endOfMonth())
          ->filter(static fn ($date) => $date->is('Friday'))->count();
        // Count Holidays


        $thismonth = Carbon::now('Asia/Dhaka')->daysInMonth;
        $leave = Application::where('user_id',Auth::user()->id)
                ->where('type','=','Medical Leave')
                ->orwhere('type','=','Marrital Leave')
                ->whereMonth('from', Carbon::now()->month)
                ->sum('days');


        // Salary Days
        $salary = $thismonth - $holidays;
        // Salary Days


        return view('sales.management.attendence.attendence_list',
        compact('attendence','thismonth','latecount','holidays','leave','salary','absent'));
     }


     public function LeaveList()
     {
        $list = Application::where('user_id',Auth::user()->id)->paginate(5);
        return view('sales.management.attendence.leave_list',compact('list'));
     }

     public function LeaveStore(Request $request)
     {

        $type = $request->get('type');
        $from = $request->get('from');
        $to = $request->get('to');
        $message = $request->get('message');
        $document = $request->get('document');

        // Diff in days
        $from_date = Carbon::createFromFormat('Y-m-d H:s:i', "$from 00:00:00");
        $to_date = Carbon::createFromFormat('Y-m-d H:s:i', "$to 00:00:00");
        $days = $from_date->diffInDays($to_date);
        // Diff in days

        $attendence = new Application();
        $attendence->user_id = Auth::user()->id;
        $attendence->user_name = Auth::user()->name;
        $attendence->from = $from;
        $attendence->to = $to;
        $attendence->type = $type;
        $attendence->days = $days;
        $attendence->message = $message;
        $attendence->document = $document;       
        $attendence->save();
        Toastr::success('Leave Application Submitted','Success');
        return back();
       

     }

     public function Application()
     {
        $sick = Application::where('user_id',Auth::user()->id)->where('type','=','Medical Leave')->sum('days');

        return view('sales.management.attendence.application',compact('sick'));
     }


     public function Attendence(Request $request)
     {


        $user_id = Auth::user()->id;

        // OfficeIP = 103.144.201.128
        // Local = 127.0.0.1
        if($request->ip() == '103.144.201.128')
        {

        $check = Attendence::where('user_id',$user_id)->whereDate('created_at', Carbon::today())->count();
        $check_in_time = date('Y-m-d 09:00:00');   // Now time must be greater than check in time
        $late = date('Y-m-d 10:30:00');   // 30 mint Late
        $check_out_time = date('Y-m-d 18:00:00'); // Now time must be less than chekout time
        $now = date("Y-m-d H:i:s");

        if($check == 0 && $now > $check_in_time)
        {
            $data = new Attendence();
            $data->user_id = $user_id;
            $data->user_name = Auth::user()->name;
            $data->ip = $request->ip();
            $data->agent = $request->header('user-agent');
            $data->check_in = Carbon::now();
            $data->flag = $now>$late ? 'Late' : 'On Time';
            $data->created_at = date('Y-m-d H:i:s');
            $data->updated_at = date('Y-m-d H:i:s');
            $data->save();
            Toastr::success('You have been given your Attendence !!!','Success');
            return redirect('sales/attendence_list');
        }
        elseif($check == 1 && $now > $check_out_time)
        {
            $today_id = Attendence::where('user_id', $user_id)->whereDate('created_at', Carbon::today())->pluck('id')->first();
            $c_in = Attendence::whereId($today_id)->pluck('check_in')->first();
            $today_check_in = Carbon::parse($c_in);
            $check_out = Carbon::now();
            $duration = $today_check_in->diff($check_out)->format('%H:%I:%S');

            $data = (['check_out' => $check_out,'duration' => $duration]);
            
            Attendence::whereId($today_id)->update($data);
            Toastr::warning('You have been Checked Out !!!','Warning');
            return redirect('sales/attendence_list');
        }
        elseif($check_out_time > $now)
        {
            Toastr::error('You Office Time is not over yet !!!','Error');
            return redirect('sales/attendence_list');
        }
        else{
            Toastr::warning('Office is not opened yet !!!','Warning');
            return redirect('sales/attendence_list');
        }
        
        }
        else{
        // IP Check Condition
        Toastr::warning('You are not in Office !!!','Warning');
        return redirect('sales/attendence_list');
        }

     }





   
}
