<?php

namespace App\Http\Controllers;

use App\Exports\FieldExport;
use App\Models\Attendence;
use App\Models\Comission;
use App\Models\FieldCustomer;
use App\Models\Recharge;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Excel;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    public function index()
    {
    
        $total_data = FieldCustomer::all()->count();
        $total_executive = User::where('role',4)->count();
        $cur_sale = Recharge::where('type','=','recharge')
                    ->whereNotNull('sales_id')
                    ->whereMonth('created_at', Carbon::now()->month)->sum('amount');

        $total_sale = Recharge::where('type','=','recharge')
                    ->whereNotNull('sales_id')
                    ->sum('amount');



        return view('manager.dashboard',compact('total_data','total_executive','cur_sale','total_sale'));
    }

  
    public function profile()
    {
        $users= Auth::user();
        return view('manager.profile.profile',compact('users'));
    }

    public function FieldData(Request $request)
    {
        $user_id = Auth::user()->id;
        $sale = $request->get('sales_id');
        $vdf = $request->get('vdf');
        $vdt = $request->get('vdt');
        $fdf = $request->get('fdf');
        $fdt = $request->get('fdt');
        $sale = $request->get('sales_id');
        $priority = $request->get('priority');
        $source = $request->get('source');
        $cc = $request->get('cc');
        $cname = $request->get('cname');
        $email = $request->get('email');
        $mobile = $request->get('mobile');


        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = '2022-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . '23:59:59';
        }

        if($sale && $vdf && $vdt){
            
            $customers = FieldCustomer::where('sales_id', $sale)
            ->where('visiting_date', '>=', $vdf)
            ->where('visiting_date', '<=', $vdt)
            ->orderBy('id', 'DESC')
            ->paginate(20);
     
        }
        elseif($sale && $fdf && $fdt){

            $customers = FieldCustomer::where('sales_id', 'LIKE', "%{$sale}%")
            ->where('followup', '>=', $fdf)
            ->where('followup', '<=', $fdt)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }  
        elseif($sale && $from_date && $to_date){

            $customers = FieldCustomer::where('sales_id', 'LIKE', "%{$sale}%")
            ->where('created_at', '>=', $from_date)
            ->where('created_at', '<=', $to_date)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        } 

        elseif ($sale) {
            $customers = FieldCustomer::where('sales_id', 'LIKE', "%{$sale}%")
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif ($source) {
            $customers = FieldCustomer::where('source', 'LIKE', "%{$source}%")
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif ($fdf || $fdt) {
            $customers = FieldCustomer::where('followup', '>=', $fdf)
                ->where('followup', '<=', $fdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif ($vdf || $vdt) {
            $customers = FieldCustomer::where('visiting_date', '>=', $vdf)
                ->where('visiting_date', '<=', $vdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif($priority ) {
            $customers = FieldCustomer::where('priority', 'LIKE', "%{$priority}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cc) {
            $customers = FieldCustomer::where('cc', 'LIKE', "%{$cc}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cname) {
            $customers = FieldCustomer::where('cname', 'LIKE', "%{$cname}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($email) {
            $customers = FieldCustomer::where('email', 'LIKE', "%{$email}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($mobile) {
            $customers = FieldCustomer::where('mobile', 'LIKE', "%{$mobile}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
         elseif ($from_date || $to_date) {
            $customers = FieldCustomer::where('created_at', '>=', $from_date . ' 00:00:00')
                ->where('created_at', '<=', $to_date . ' 23:59:59')
                ->orderBy('id', 'DESC')
                ->paginate(20);
        } else {
            $customers = FieldCustomer::orderBy('id', 'DESC')
                ->paginate(20);
        }
        $sales = User::where('role', 4)->get();

        return view('manager.management.field.customer_list',compact('customers', 'sales'));

    }

     public function UpdateProfile(Request $request)
    {
        $auth_user = Auth::user()->id;
        $users = User::find($auth_user);
        $old_pass = $users->password;

        if (password_verify($request->input('old_pass'), $old_pass)) {
        $validator = Validator::make($request->all(), [
                    'name'    =>  'required',
                    'email'     =>  'required|email|unique:users,email,'.$auth_user,
                    'mobile'     =>  'required|unique:users,mobile,'.$auth_user,
                    'image' => 'file|max:2000',
                    'company_image' => 'file|max:2000',

                ]);
        if ($validator->fails()) {
                    Toastr::error('Name,Email,Mobile Required.Image must be less than 2MB & Unique','Error');
                    return redirect('manager/profile');
        }

        $image = $request->image;
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('images/user'))
            {
                mkdir('images/user',0777,true);
            }
            $image->move('images/user',$imagename);
        }else{
            $imagename = $users->image;
        }
        
        $users->name = $request->name;
        $users->email = $request->email;
        $users->mobile = $request->mobile;
        $users->image = $imagename;
        if ($request->new_pass != NULL || $request->new_pass != "") {
            $users->password = Hash::make($request->new_pass);
        }

        $users->save();
        Toastr::success('Profile Updated successfully :)','Success');
        return redirect('manager/profile');
        }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('manager/profile');
    }
}

    public function DownloadData(Request $request)
    {
        $data = FieldCustomer::select('visiting_date',
        'sales_id','cc','cname','caddress','cperson','designation',
        'email','mobile','requirement','priority',
        'cfeedback','cfeedback2','source',
        'transaport','from','to','cost','pay_date',
        'method','trx_num')
        ->orderBy('id','DESC')->get()->toArray();
        $data= json_decode(json_encode($data), true);

        return Excel::download(new FieldExport($data), "FieldData.xlsx");  
    }

    public function ExecutiveList(Request $request){
        $email = $request->input('email');

        if($email)
        {
            $saleslists = User::where('email', 'LIKE', "%{$email}%")->whereIn('role',[4,5])->orderBy('id','DESC')->paginate(10);
        }
        else{
            $saleslists = User::where('manager',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        }

        return view('manager.management.executive.List',compact('saleslists'));
    }

    public function ComissionList(Request $request){

        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
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

        $data = User::where('manager',Auth::user()->id)->pluck('id');
        
        if($from_date || $to_date)
        {
        $total_recharge = Recharge::groupBy('sales_id')
        ->where('amount','>',0)->where('sales_id','!=','NULL')
        ->selectRaw('sum(amount) as total_sale, sales_id')
        ->whereBetween('created_at', [$from_date, $to_date])
        ->whereIn('sales_id',$data)
        ->get();

        }else
        {
        $total_recharge = Recharge::groupBy('sales_id')
        ->where('amount','>',0)->where('sales_id','!=','NULL')
        ->selectRaw('sum(amount) as total_sale, sales_id')
        ->whereMonth('created_at', Carbon::now()->month)
        ->whereIn('sales_id',$data)
        ->get();
        }


        return view('manager.management.executive.Comission',compact('total_recharge'));
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
            return redirect('manager/attendence_list');
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
            return redirect('manager/attendence_list');
        }
        elseif($check_out_time > $now)
        {
            Toastr::error('You Office Time is not over yet !!!','Error');
            return redirect('manager/attendence_list');
        }
        else{
            Toastr::warning('Office is not opened yet !!!','Warning');
            return redirect('manager/attendence_list');
        }
        
        }
        else{
        // IP Check Condition
        Toastr::warning('You are not in Office !!!','Warning');
        return redirect('manager/attendence_list');
        }

     }

     public function AttendenceList()
     {
        $attendence = Attendence::where('user_id',Auth::user()->id)
        ->whereBetween('check_in', [date('Y-m-01 H:i:s'), date('Y-m-31 H:i:s')])
        ->paginate(30);
        return view('manager.management.attendence.attendence_list',compact('attendence'));
     }



}