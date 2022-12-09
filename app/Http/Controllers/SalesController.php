<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Comission;
use App\Models\FieldCustomer;
use App\Models\Recharge;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    public function index()
    {
        $month_sell = Recharge::whereMonth('recharges.created_at', Carbon::now()->month)
        ->join('users as users','recharges.user_id','=','users.id')
        ->where('users.sales_person',Auth::user()->id)
        ->where('recharges.type','recharge')
        ->where('recharges.amount','>','0')
        ->sum('amount');

        $total_sell = Recharge::where('sales_id',Auth::user()->id)
        ->where('recharges.type','recharge')
        ->where('recharges.amount','>','0')
        ->sum('amount');

        $asn_cus = User::where('sales_person',Auth::user()->id)->count();
        $g_cus = FieldCustomer::where('sales_id',Auth::user()->id)->count();

        $customers =User::where('sales_person', Auth::user()->id)
        ->orderBy('id', 'DESC')
        ->paginate(5);


        $datetime = date('Y-m-d', strtotime('-7 days'));

        $recharges = \DB::table('recharges as st')
            ->select(DB::raw('date(st.created_at) as dt'), DB::raw("SUM(st.amount) as amount"))
            ->where('st.sales_id', Auth::user()->id)
            ->where('created_at', '>=', $datetime)
            ->groupBy(DB::raw('date(st.created_at)'))
            ->get();
        
        $dtarray = [];

        for ($v = 1; $v <= 7; $v++) {
            $dtarray[] = date('Y-m-d', strtotime("-$v days"));
        }

        $amount   = [];
        foreach ($recharges as $f) {
            $amount[$f->dt]   = $f->amount;
        }
        asort($dtarray);

        $chartdata['datetime'] = implode(",", $dtarray);

        $ss = [];
        foreach ($dtarray as $t) {
            $ss[] = isset($amount[$t]) ? $amount[$t] : 0;
        }


        $chartdata['recharge']   = implode(',', $ss);
        // dd($chartdata['recharge']);



        return view('sales.dashboard',compact('month_sell','total_sell','asn_cus','g_cus','customers'))->with('chartdata', $chartdata);
    }

    public function MyCommission(Request $request)
    {


        $currentuser = Auth::user()->id;
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

            $total_recharge = Recharge::whereBetween('recharges.created_at',[$from_date,$to_date])
            ->join('users as users','recharges.user_id','=','users.id')
            ->where('users.sales_person',$currentuser)
            ->where('recharges.type','recharge')
            ->where('recharges.amount','>','0')
            ->sum('amount');
        
        
        // whereMonth('recharges.created_at', Carbon::now()->month)
        // dd($total_recharge);

        $round = round($total_recharge);
        
        $base_sales = Auth::user()->base_sales;

        $comissionale_sales = (int)($round-$base_sales);
        

        if($comissionale_sales < 0){
            $comissions = 0;
        }
        else{
            $comissions = Comission::where('sales',$currentuser)
            ->where('maximum', '>', $comissionale_sales)
            ->pluck('comission')
            ->first();
        }
        
        $comission_list = Comission::where('sales',$currentuser)
        ->orderBy('id', 'ASC')
        ->where('status', 1)
        ->paginate(5);
  

        return view('sales.management.comission.comission',compact('round','comissionale_sales','base_sales','comissions','comission_list'));    
    }

    public function profile()
    {
        $users= Auth::user();
        return view('sales.profile.profile',compact('users'));
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
                    return redirect('sales/profile');
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
        return redirect('sales/profile');
        }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('sales/profile');
    }
}


   

     



}