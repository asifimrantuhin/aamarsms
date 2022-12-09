<?php

namespace App\Http\Controllers;

use App\Models\Recharge;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\Mask;
use App\Models\sms_transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= Auth::user();
        $total_rerg = Recharge::where('user_id',$users->id)->where('type','recharge')->sum('amount');
        $data = User::where('id',$users->id)->pluck('mask')->first();
        $ms = explode(',', trim($data));
        $mask = $data != '' ? count($ms) : 0;
        $total_camp = Campaign::where('user_id',$users->id)->count();
        $total_contacts = Contact::where('user_id',$users->id)->count();

        $operator['gp'] = sms_transactions::where('user_id',$users->id)->where('operator','=','GP')->count();
        $operator['robi'] = sms_transactions::where('user_id',$users->id)->where('operator','=','RB')->count();
        $operator['airtel'] = sms_transactions::where('user_id',$users->id)->where('operator','=','AL')->count();
        $operator['teletalk'] = sms_transactions::where('user_id',$users->id)->where('operator','=','TL')->count();
        $operator['bl'] = sms_transactions::where('user_id',$users->id)->where('operator','=','BL')->count();



        $user_id  = Auth::user()->id;
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

        $campaigns = Campaign::where('user_id',$users->id)->orderBy('id','DESC')->paginate(5);

        return view('user.dashboard',compact('total_contacts','total_rerg','mask','total_camp','campaigns'))->with('chartdata', $chartdata)->with('operator',$operator);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

	public function Document(){
        $user = User::whereId(Auth::user()->id)->first();
        return view('user.profile.document',compact('user'));
    }

    public function profile()
    {
        $users= Auth::user();
        return view('user.profile.profile',compact('users'));
    }

    public function Api()
    {
        $users= Auth::user();
        return view('api_docs',compact('users'));
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

    public function UpdateProfile(Request $request)
    {
        $auth_user = Auth::user()->id;
        $users = User::find($auth_user);
        $old_pass = $users->password;


        if (password_verify($request->input('old_pass'), $old_pass)) {
        $validator = Validator::make($request->all(), [
                    'name'    =>  'required',
                    'image' => 'file|max:2000',
                    // 'f_nid' => 'file|max:2000',
                    // 'b_nid' => 'file|max:2000',
                    'trade' => 'file|max:2000',
                    'company_image' => 'file|max:2000',

                ]);
        if ($validator->fails()) {
                    Toastr::error('Name,Email,Mobile Required.Image must be less than 2MB & Unique','Error');
                    return redirect('user/profile');
        }

        $image = $request->image;
        // $f_nid = $request->f_nid;
        // $b_nid = $request->b_nid;
        $trade = $request->trade;
        $currentDate = Carbon::now()->toDateString();

        // if (isset($image))
        // {
        //     $imagename = $currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

        //     if (!file_exists('images/user'))
        //     {
        //         mkdir('images/user',0777,true);
        //     }
        //     $image->move('images/user',$imagename);
        //     }
        //     else{
        //     $imagename = $users->image;
        // }
        // if (isset($f_nid))
        // {
        //     $f_nidimage = $currentDate.'-'. uniqid() .'.'. $f_nid->getClientOriginalExtension();

        //     if (!file_exists('images/user/nid'))
        //     {
        //         mkdir('images/user/nid',0777,true);
        //     }
        //     $f_nid->move('images/user/nid',$f_nidimage);
        //     }
        //     else{
        //     $f_nidimage = $users->f_nid;
        // }
        // if (isset($b_nid))
        // {
        //     $b_nidimage = $currentDate.'-'. uniqid() .'.'. $b_nid->getClientOriginalExtension();

        //     if (!file_exists('images/user/nid'))
        //     {
        //         mkdir('images/user/nid',0777,true);
        //     }
        //     $b_nid->move('images/user/nid',$b_nidimage);
        //     }
        //     else{
        //     $b_nidimage = $users->b_nid;
        // }
        if (isset($trade))
        {
            $imagetrade = $currentDate.'-'. uniqid() .'.'. $trade->getClientOriginalExtension();

            if (!file_exists('images/user/trade'))
            {
                mkdir('images/user/trade',0777,true);
            }
            $trade->move('images/user/trade',$imagetrade);
            }
            else{
            $imagetrade = $users->trade;
        }

        
        $users->name = $request->name;
        // $users->image = $imagename;
        // $users->f_nid = $f_nidimage;
        // $users->b_nid = $b_nidimage;
        $users->trade = $imagetrade;
        if ($request->new_pass != NULL || $request->new_pass != "") {
            $users->password = Hash::make($request->new_pass);
        }

        $users->save();
        Toastr::success('Profile Updated successfully :)','Success');
        return redirect('user/profile');
    }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('user/profile');
    }
        
    }


    public function TransactionHistory(Request $request)
    {
        $date_from = $request->get('from_date');
        $date_to = $request->get('to_date');

        if (empty($date_from)) {
            $date_from = '2020-01-01 00:00:00';
        }
        if (empty($date_to)) {
            $date_to = date('Y-m-d H:i:s');
        }


        $cost = Recharge::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$date_from, $date_to])
        ->where('amount','<',0)
        ->orderBy('id','DESC')
        ->paginate(10);

        

        return view('user.management.others.transaction_history',compact('cost'));
    }


    public function RechargeHistory(Request $request)
    {
        $date_from = $request->get('from_date');
        $date_to = $request->get('to_date');

        if (empty($date_from)) {
            $date_from = '2020-01-01 00:00:00';
        }
        if (empty($date_to)) {
            $date_to = date('Y-m-d H:i:s');
        }


        $recharge_history  = Recharge::where('user_id',Auth::user()->id)
        ->whereBetween('created_at', [$date_from, $date_to])
        ->where('amount','>',0)
        ->orderBy('id','DESC')
        ->paginate(10);


        return view('user.management.others.recharge_history',compact('recharge_history'));
    }


    public function Summery(Request $request)
    {
        $users= Auth::user();

        $type = $request->get('type');
        $date_from = $request->get('from_date');
        $date_to = $request->get('to_date');

        if ($type) {
            if (empty($date_from)) {
                $date_from = '2020-01-01';
            }
            if (empty($date_to)) {
                $date_to = date('Y-m-d');
            }
            if ($type == 'recharge') {
                $sep = '>';
            } else {
                $sep = '<';
            }
            $account_data = DB::table('recharges as r')
                    ->select(DB::raw('date(r.created_at) as created_date'), DB::raw('ROUND(SUM(r.amount), 5) as amount'),DB::raw('(r.trx_id) as trx_id'))
                    ->where('r.user_id', $users->id)
                    ->where(DB::raw('date(r.created_at)'), '>=', $date_from . ' 00:00:00')
                    ->where(DB::raw('date(r.created_at)'), '<=', $date_to . ' 23:59:59')
                    ->where('r.amount', $sep, '0')
                    ->groupBy('trx_id')
                    ->groupBy('created_date')
                    ->orderBy('created_date', 'DESC')
                    ->get();


            $total = DB::table('recharges as r')
                    ->select(DB::raw('ROUND(SUM(r.amount), 5) as amount'))
                    ->where('r.user_id', $users->id)
                    ->where(DB::raw('date(r.created_at)'), '>=', $date_from . ' 00:00:00')
                    ->where(DB::raw('date(r.created_at)'), '<=', $date_to . ' 23:59:59')
                    ->where('r.amount', $sep, '0')
                    ->pluck('r.amount');

            return view('user.management.others.account_summery',compact('account_data','total','users')
                        
          );
        } else {

        $total_recharge = Recharge::where('user_id',$users->id)
                    ->where('amount', '>', '0')
                    ->where('type','=', 'recharge')
                    ->sum('amount');
        
        $total_expense = Recharge::where('user_id',$users->id)
                   ->where('amount', '<', '0')
                   ->sum('amount');

        $today_recharge = Recharge::where('user_id',$users->id)
                          ->where('amount', '>', '0')
                          ->whereDate('created_at', Carbon::today())
                          ->where('type','=', 'recharge')
                          ->sum('amount');

        $today_expense = Recharge::where('user_id',$users->id)
                          ->where('amount', '<', '0')
                          ->whereDate('created_at', Carbon::today())
                          ->sum('amount');

        $week_recharge = Recharge::where('user_id',$users->id)
                        ->where('amount', '>', '0')
                        ->whereDate('created_at', Carbon::now()->subDays(7))
                        ->where('type','=', 'recharge')
                        ->sum('amount');

        $week_expense = Recharge::where('user_id',$users->id)
                        ->where('amount', '<', '0')
                        ->whereDate('created_at', Carbon::now()->subDays(7))
                        ->sum('amount');
        $week_recharge = Recharge::where('user_id',$users->id)
                        ->where('amount', '>', '0')
                        ->whereDate('created_at', Carbon::now()->subDays(7))
                        ->where('type','=', 'recharge')
                        ->sum('amount');

        $week_expense = Recharge::where('user_id',$users->id)
                        ->where('amount', '<', '0')
                        ->whereDate('created_at', Carbon::now()->subDays(7))
                        ->sum('amount');
        
        $month_recharge = Recharge::where('user_id',$users->id)
                        ->where('amount', '>', '0')
                        ->where('created_at', '>', now()->subDays(30)->endOfDay())
                        ->where('type','=', 'recharge')
                        ->sum('amount');

        $month_expense = Recharge::where('user_id',$users->id)
                        ->where('amount', '<', '0')
                        ->where('created_at', '>', now()->subDays(30)->endOfDay())
                        ->sum('amount');
        }
        

        $tr = Recharge::where('user_id',$users->id)
        ->where('amount', '>', '0')
        ->where('type','=', 'recharge')
        ->sum('amount');

$negative = Recharge::where('user_id',$users->id)
        ->where('amount', '<', '0')
        ->sum('amount');
$tc = abs($negative);

$chartdata['recharge'] = $tr;
$chartdata['expense'] = $tc;


        return view('user.management.others.account_summery',compact('users',
        'total_recharge','total_expense',
        'today_recharge','today_expense',
        'week_recharge','week_expense',
        'month_recharge','month_expense','chartdata'
    ));
    }


    public function Graph() 
    {

        $users = Auth::user();
        $tr = Recharge::where('user_id',$users->id)
                          ->where('amount', '>', '0')
                          ->where('type','=', 'recharge')
                          ->sum('amount');

        $negative = Recharge::where('user_id',$users->id)
                          ->where('amount', '<', '0')
                          ->sum('amount');
        $tc = abs($negative);

        $chartdata['recharge'] = $tr;
        $chartdata['expense'] = $tc;


        return view('user.management.others.account_summery_graph',compact('users','chartdata'));
    }
    


    public function payment()
    {
        $users = Auth::user();
        return view('user/management/others/ssl_payment',compact('users'));
    }

    public function Support()
    {
        return view('user.management.others.support');
    }


    public function NidPost(Request $request)
    {

        $auth_user = Auth::user()->id;
        $users = User::find($auth_user);

        $f_nid = $request->f_nid;
        $b_nid = $request->b_nid;
        $trade = $request->trade;
        $currentDate = Carbon::now()->toDateString();

        if (isset($image))
        {
            $imagename = $currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('images/user'))
            {
                mkdir('images/user',0777,true);
            }
            $image->move('images/user',$imagename);
            }
            else{
            $imagename = $users->image;
        }
        if (isset($f_nid))
        {
            $f_nidimage = $currentDate.'-'. uniqid() .'.'. $f_nid->getClientOriginalExtension();

            if (!file_exists('images/user/nid'))
            {
                mkdir('images/user/nid',0777,true);
            }
            $f_nid->move('images/user/nid',$f_nidimage);
            }
            else{
            $f_nidimage = $users->f_nid;
        }
        if (isset($b_nid))
        {
            $b_nidimage = $currentDate.'-'. uniqid() .'.'. $b_nid->getClientOriginalExtension();

            if (!file_exists('images/user/nid'))
            {
                mkdir('images/user/nid',0777,true);
            }
            $b_nid->move('images/user/nid',$b_nidimage);
            }
            else{
            $b_nidimage = $users->b_nid;
        }
        if (isset($trade))
        {
            $imagetrade = $currentDate.'-'. uniqid() .'.'. $trade->getClientOriginalExtension();

            if (!file_exists('images/user/trade'))
            {
                mkdir('images/user/trade',0777,true);
            }
            $trade->move('images/user/trade',$imagetrade);
            }
            else{
            $imagetrade = $users->trade;
        }

        
        $users->f_nid = $f_nidimage;
        $users->b_nid = $b_nidimage;
        $users->trade = $imagetrade;
        $users->approval = 2;
        $users->save();
        Toastr::success('Document Uploaded','Success');
        return back();
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
    public function update(Request $request, $id)
    {
        //
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
