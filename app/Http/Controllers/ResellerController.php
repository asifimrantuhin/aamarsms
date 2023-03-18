<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Recharge;
use App\Models\sms_transactions;
use App\Models\User;
use App\Models\UserSmsCounter;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Excel;
use App\Exports\GlobalExport;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id  = Auth::user()->id;

        $total_users = User::where('parent_user',$user_id)->count();
        $total_recharge = Recharge::where('user_id',$user_id)->where('type','recharge')->sum('amount');
        $data = User::where('id',$user_id)->pluck('mask')->first();
        $ms = explode(',', trim($data));
        $total_mask = count($ms);
        $daily_campaign =sms_transactions::where('user_id',$user_id)->whereDate('created_at', Carbon::today())->sum('sms_count');

        $operator['gp'] = sms_transactions::where('user_id',$user_id)->where('operator','=','GP')->count();
        $operator['robi'] = sms_transactions::where('user_id',$user_id)->where('operator','=','RB')->count();
        $operator['airtel'] = sms_transactions::where('user_id',$user_id)->where('operator','=','AL')->count();
        $operator['teletalk'] = sms_transactions::where('user_id',$user_id)->where('operator','=','TL')->count();
        $operator['bl'] = sms_transactions::where('user_id',$user_id)->where('operator','=','BL')->count();

        
        $datetime = date('Y-m-d', strtotime('-7 days'));

        $campaigns = \DB::table('sms_transactions as st')
            ->select(DB::raw('date(st.created_at) as dt'), DB::raw('COUNT(st.status) as total_sms'), DB::raw("SUM(st.status) as success"))
        //->join('campaigns as c', 'st.campaign_id', '=', 'c.id')
            ->where('st.user_id', $user_id)
            ->where('created_at', '>=', $datetime)
            ->groupBy(DB::raw('date(st.created_at)'))
            ->get();

            $failedsms = \DB::table('sms_sender_table as fc')
            ->select(DB::raw('date(fc.created_at) as dt'), DB::raw("SUM(fc.status) as failed"))
            ->where('created_at', '>=', $datetime)
            ->groupBy(DB::raw('date(fc.created_at)'))
            ->get();


        $dtarray = [];

        for ($v = 1; $v <= 7; $v++) {
            $dtarray[] = date('Y-m-d', strtotime("-$v days"));
        }

        $success   = [];
        foreach ($campaigns as $f) {
            $success[$f->dt]   = $f->success;
        }
        $failed   = [];
        foreach ($failedsms as $fs) {
            $failed[$fs->dt]   = $fs->failed;
        }
        asort($dtarray);

        $chartdata['datetime'] = implode(",", $dtarray);

        $fs = [];
        $ss = [];
        foreach ($dtarray as $t) {
            $ss[] = isset($success[$t]) ? $success[$t] : 0;
        }
        foreach ($dtarray as $t) {
            $fs[] = isset($failed[$t]) ? $failed[$t] : 0;
        }

        $chartdata['success']   = implode(',', $ss);
        $chartdata['failed']   = implode(',', $fs);


        return view('reseller/dashboard',compact('total_users','total_recharge','total_mask','daily_campaign'))->with('chartdata', $chartdata)->with('operator',$operator);
    }

    public function profile()
    {
        $users= Auth::user();
        return view('reseller.profile.profile',compact('users'));
    }

    public function company()
    {
        $users= Auth::user();
        return view('reseller.company.profile',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MydailySMSReport(Request $request)
    {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = date('Y-m-01 H:i:s');
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }


        $sms_report = DB::table('user-sms-count')
                        ->select(DB::raw("sent_date"), 
                                DB::raw("SUM(gp) as gp"),
                                DB::raw("SUM(bl) as bl"),
                                DB::raw("SUM(robi) as robi"),
                                DB::raw("SUM(teletalk) as teletalk"),
                                DB::raw("SUM(airtel) as airtel")
                                )
                         ->where('user_id', Auth::user()->id)
                        ->whereBetween(DB::raw('sent_date'), [$from_date, $to_date])
                        ->groupBy(DB::raw('sent_date'))
                        ->orderBy('sent_date', 'DESC')
                        ->paginate(15);

 
        return view('reseller.management.reports.my_sms_report')->with(['sms_report' => $sms_report]);
    }


    public function MydailySMSReportExport(Request $request)
    {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = date('Y-m-01 H:i:s');
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }


        $sms_report = DB::table('user-sms-count')
                        ->select(DB::raw("sent_date"), 
                                DB::raw("SUM(gp) as gp"),
                                DB::raw("SUM(bl) as bl"),
                                DB::raw("SUM(robi) as robi"),
                                DB::raw("SUM(teletalk) as teletalk"),
                                DB::raw("SUM(airtel) as airtel")
                                )
                         ->where('user_id', Auth::user()->id)
                        ->whereBetween(DB::raw('sent_date'), [$from_date, $to_date])
                        ->groupBy(DB::raw('sent_date'))
                        ->orderBy('sent_date', 'DESC')
                        ->get();

        return Excel::download(new GlobalExport("reseller.management.reports.my_sms_report_export", $sms_report), 'my_sms_report.xlsx');

 
        //return view('reseller.management.reports.my_sms_report')->with(['sms_report' => $sms_report]);
    }


    public function UserSMSReport(Request $request) {
        $user = $request->input('user');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = date('Y-m-01 H:i:s');
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }

        $sms_report = DB::table('user-sms-count as usc')
                    ->leftJoin('users as u', 'u.id', '=', 'usc.user_id')
                    ->select('u.name as username', 'usc.*')
                    ->where('u.parent_user', Auth::user()->id)
                    ->whereBetween('usc.sent_date', [$from_date, $to_date])
                    ->orderBy('usc.id', 'DESC')
                    ->paginate(10);



        return view('reseller.management.reports.user_sms_report')->with(['sms_report' => $sms_report]);
    }

    public function UserSMSReportExport(Request $request) {
        $user = $request->input('user');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = date('Y-m-01 H:i:s');
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }

        $sms_report = DB::table('user-sms-count as usc')
                    ->leftJoin('users as u', 'u.id', '=', 'usc.user_id')
                    ->select('u.name as username', 'usc.*')
                    ->where('u.parent_user', Auth::user()->id)
                    ->whereBetween('usc.sent_date', [$from_date, $to_date])
                    ->orderBy('usc.id', 'DESC')
                    ->get();

        return Excel::download(new GlobalExport("reseller.management.reports.user_sms_report_export", $sms_report), 'user_sms_report.xlsx');
        //return view('reseller.management.reports.user_sms_report_export')->with(['sms_report' => $sms_report]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function UpdateProfile(Request $request)
    {
        $auth_user = Auth::user()->id;
        $users = User::find($auth_user);
        $old_pass = $users->password;

        if (password_verify($request->input('old_pass'), $old_pass)) {
        $validator = Validator::make($request->all(), [
                    'name'    =>  'required',
                    'email'     =>  'required',
                    'mobile'     =>  'required',
                    'image' => 'file|max:2000',
                    'company_image' => 'file|max:2000',

                ]);
        if ($validator->fails()) {
                    Toastr::error('Name,Email,Mobile Required.Image must be less than 2MB & Unique','Error');
                    return redirect('reseller/profile');
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

        $company_image = $request->company_image;
        if (isset($company_image))
        {
            $currentDate = Carbon::now()->toDateString();
            $companyimagename = $currentDate.'-'. uniqid() .'.'. $company_image->getClientOriginalExtension();

            if (!file_exists('images/company'))
            {
                mkdir('images/company',0777,true);
            }
            $company_image->move('images/company',$companyimagename);
        }else{
            $companyimagename = $users->company_image;
        }
        
        $users->name = $request->name;
        $users->email = $request->email;
        $users->mobile = $request->mobile;
        $users->image = $imagename;
        $users->company_image = $companyimagename;
        if ($request->new_pass != NULL || $request->new_pass != "") {
            $users->password = Hash::make($request->new_pass);
        }

        $users->save();
        Toastr::success('Profile Updated successfully :)','Success');
        return redirect('reseller/profile');
    }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('reseller/profile');
    }
        
    }


    public function UpdateCompany(Request $request)
    {
        $auth_user = Auth::user()->id;
        $users = User::find($auth_user);
        $old_pass = $users->password;

        if (password_verify($request->input('old_pass'), $old_pass)) {
        $validator = Validator::make($request->all(), [
                    'domain'    =>  'required',
                    'company_image' => 'file|max:2000',

                ]);
        if ($validator->fails()) {
                    Toastr::error('Company Image must be less than 2MB','Error');
                    return redirect('reseller/company');
        }


        $company_image = $request->company_image;
        if (isset($company_image))
        {
            $currentDate = Carbon::now()->toDateString();
            $companyimagename = $currentDate.'-'. uniqid() .'.'. $company_image->getClientOriginalExtension();

            if (!file_exists('images/company'))
            {
                mkdir('images/company',0777,true);
            }
            $company_image->move('images/company',$companyimagename);
        }else{
            $companyimagename = $users->company_image;
        }
        
       
        $users->domain = $request->domain;
        $users->company_image = $companyimagename;
        $users->save();
        Toastr::success('Company Profile Updated successfully :)','Success');
        return redirect('reseller/company');
    }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('reseller/company');
    }
        
}


    public function update(Request $request, $id)
    {
        //
    }

    public function Api()
    {
        $users= Auth::user();
        return view('api_docs',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
