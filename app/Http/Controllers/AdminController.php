<?php

namespace App\Http\Controllers;

use App\Common;
use App\Helpers\Log;
use App\Models\AccessLog;
use App\Models\APIStatus;
use App\Models\Campaign;
use App\Models\Configuration;
use App\Models\Mask;
use App\Models\Notification;
use App\Models\OperatorBalance;
use App\Models\RechargeRequest;
use App\Models\sms_transactions;
use App\Models\User;
use App\Models\UserSmsCounter;
use App\UserSMSCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Carbon;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $users= Auth::user();
        return view('admin.profile.profile',compact('users'));
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


    public function index()
    {
        $users= Auth::user();
        $total_users = User::all();

        $balance = APIStatus::where('unit','taka')->sum('credits');

        $todays_campaign = Campaign::whereDate('created_at', Carbon::today())->count();
        $total_mask = Mask::count();

       


        $operator['gp'] = sms_transactions::where('operator','=','GP')->count();
        $operator['robi'] = sms_transactions::where('operator','=','RB')->count();
        $operator['airtel'] = sms_transactions::where('operator','=','AL')->count();
        $operator['teletalk'] = sms_transactions::where('operator','=','TL')->count();
        $operator['bl'] = sms_transactions::where('operator','=','BL')->count();


        $datetime = date('Y-m-d', strtotime('-7 days'));

        $campaigns = \DB::table('sms_transactions as st')
            ->select(DB::raw('date(st.created_at) as dt'), DB::raw("SUM(st.status) as success"))
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


        $totalrevenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
        ->get();
        $currentmonth_revenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
        ->whereMonth('created_at', Carbon::now()->month)
        ->get();

        $currentyear_revenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
        ->whereYear('created_at', Carbon::now()->year)
        ->get();



        return view('admin/dashboard',compact('totalrevenue','currentmonth_revenue','currentyear_revenue','users','total_users','balance','todays_campaign','total_mask'))->with('chartdata', $chartdata)->with('operator',$operator);
    }

    public function Api()
    {
        $users= Auth::user();
        return view('api_mod',compact('users'));
    }

    public function NotificationStore(Request $request){

        $form_data = array(
            'user_id'    =>   Auth::user()->id,
            'text'        =>  $request->text,
            'reseller'        =>  $request->reseller,
            'user'        =>  $request->user,
            'executive'        =>  $request->sales,
            'created_at' =>date('Y-m-d H:i:s')
        );

        Notification::insert($form_data);

        Toastr::success('New Notification Posted','Success');
        Log::addToLog('New Notification Posted');
        return back();
    }

    public function viewnotify($id) {
        $notify = Notification::whereId($id)->first();
        return json_decode($notify);
        
    }

    public function NotificationEdit($id){
        $notice = Notification::whereId($id)->first();

        return view('admin.management.notification.edit_notification',compact('notice'));
    }

    public function NotificationUpdate(Request $request){

        $update_data = ([
            'text' => $request->text,
            'reseller' =>$request->reseller,
            'user' =>$request->user,
            'executive' =>$request->executive,
            'status' => $request->status,

        ]);

        Notification::whereId($request->id)->update($update_data);
        Toastr::success('Notification has been Updated !!!','Success');
        return redirect('admin/notify');
    }

    public function ChangeNotification(){
      Notification::latest()->where('admin',1)->take(5)->update(['admin'=>0]);
      return back();

    }


    public function VendorTransactionsHistory(Request $request) {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if ($from_date || $to_date) {
            if (empty($from_date)) {
                $from_date = '2019-01-01 00:00:00';
            }
            if (empty($to_date)) {
                $to_date = date('Y-m-d H:i:s');
            }

            $sms_transactions = sms_transactions::select('vendor_api as vendor', DB::raw('COUNT(*) as vendor_sms_count'))
                    ->where('status', 1)
                    ->where('created_at', '>', $from_date)
                    ->where('created_at', '<', $to_date . ' 23:59:59')
                    ->groupBy('vendor_api')
                    ->orderBy('vendor_sms_count', 'DESC')
                    ->get();
        } else {
            $sms_transactions = sms_transactions::select('vendor_api as vendor', DB::raw('COUNT(*) as vendor_sms_count'))
                    ->where('status', 1)
                    ->groupBy('vendor_api')
                    ->orderBy('vendor_sms_count', 'DESC')
                    ->get();
        }


        $vendor_api = $request->input('vendor_api');
        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');
        if (empty($date_from)) {
            $date_from = '2019-01-01 00:00:00';
        }
        if (empty($date_to)) {
            $date_to = date('Y-m-d H:i:s');
        }
        if ($vendor_api) {
            $operator_sms_count = sms_transactions::select('operator', DB::raw('COUNT(*) as operator_sms_count'))
                    ->where('status', 1)
                    ->where('vendor_api', $vendor_api)
                    ->where('created_at', '>', $date_from)
                    ->where('created_at', '<', $date_to . ' 23:59:59')
                    ->groupBy('operator')
                    ->orderBy('operator_sms_count', 'DESC')
                    ->get();
        } else {
            $operator_sms_count = sms_transactions::select('operator', DB::raw('COUNT(*) as operator_sms_count'))
                    ->where('status', 1)
                    ->groupBy('operator')
                    ->orderBy('operator_sms_count', 'DESC')
                    ->get();
        }



        return view('admin.management.report.operator_sms_history')->with([
                    'sms_transactions' => $sms_transactions,
                    'operator_sms_count' => $operator_sms_count
        ]);
    }


    public function UserSMSReport(Request $request) {

        $user = $request->input('user');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = '2021-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }
        // dd($request);
        if ($user) {
            $sms_report  = DB::table('user-sms-count as usc')
                            ->leftJoin('users as u', 'u.id', '=', 'usc.user_id')
                            ->select('u.name as username', 'usc.*')
                            ->where('usc.user_id', $user)
                            ->whereBetween('usc.sent_date', [$from_date, $to_date])
                            ->orderBy('usc.sent_date', 'DESC')->paginate(10);
        } else {
            $sms_report = DB::table('user-sms-count as usc')
                            ->leftJoin('users as u', 'u.id', '=', 'usc.user_id')
                            ->select('u.name as username', 'usc.*')
                            ->whereBetween('usc.sent_date', [$from_date, $to_date])
                            ->orderBy('usc.sent_date', 'DESC')->paginate(10);
        }

        // dd($sms_report);
        $vendor_list = sms_transactions::select('vendor_api')
                ->where('status', 1)
                ->groupBy('vendor_api')
                ->get();
        $adminUsers = Common::getAdminUsersID();
        $userlist = User::whereNotIn('id', $adminUsers)
                ->get();


        return view('admin.management.report.user_sms')->with([
                    'sms_report' => $sms_report,
                    'vendor_list' => $vendor_list,
                    'userlist' => $userlist
        ]);
    }



    public function SMSTransactions(Request $request) {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');



        if ($from_date || $to_date) {
            if (empty($from_date)) {
                $from_date = '2019-01-01 00:00:00';
            }else{
                $from_date = $from_date. ' 00:00:00';
            }
            if (empty($to_date)) {
                $to_date = date('Y-m-d H:i:s');
            }else{
                $to_date = $to_date . ' 23:59:59';
            }
            

            $sms_report = UserSmsCounter::select(DB::raw('DATE(sent_date) as date'),DB::raw('SUM(mask) AS mask'),DB::raw('SUM(nonmask) AS nonmask'), DB::raw('SUM(gp) AS gp'), DB::raw('SUM(bl) AS bl'), DB::raw('SUM(robi) AS robi'), DB::raw('SUM(teletalk) AS teletalk'), DB::raw('SUM(airtel) AS airtel'), DB::raw('SUM(gp + robi + airtel + bl + teletalk) as total_sms'))
                    ->where('sent_date', '>', $from_date. ' 00:00:00')
                    ->where('sent_date', '<', $to_date . ' 23:59:59')
                    ->groupBy(DB::raw('DATE(sent_date)'))
                    ->orderBy(DB::raw('DATE(sent_date)'), 'DESC')
                    ->paginate(10);
        } else {
            $sms_report = UserSmsCounter::select(DB::raw('DATE(sent_date) as date'),DB::raw('SUM(mask) AS mask'),DB::raw('SUM(nonmask) AS nonmask'),DB::raw('SUM(gp) AS gp'), DB::raw('SUM(bl) AS bl'), DB::raw('SUM(robi) AS robi'), DB::raw('SUM(teletalk) AS teletalk'), DB::raw('SUM(airtel) AS airtel'), DB::raw('SUM(gp + robi + airtel + bl + teletalk) as total_sms'))
                    ->groupBy(DB::raw('DATE(sent_date)'))
                    ->orderBy(DB::raw('DATE(sent_date)'), 'DESC')
                    ->paginate(10);
        }


        return view('admin.management.report.sms_transaction_report')->with([
                    'sms_report' => $sms_report
        ]);
    }


    public function RevenueReport(Request $request) {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        if (empty($from_date)) {
            $from_date = '2019-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }
        $revenue = sms_transactions::select(DB::raw('DATE(created_at) as date'), DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
                ->whereBetween('created_at', [$from_date, $to_date])
                ->groupBy(DB::raw('DATE(created_at)'))
                ->orderBy(DB::raw('DATE(created_at)'), 'DESC')
                ->paginate(15);

        $totalrevenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
                ->get();
        $currentmonth_revenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
                ->whereMonth('created_at', Carbon::now()->month)
                ->get();

        $currentyear_revenue = sms_transactions::select(DB::raw('ROUND(SUM(sell_price), 2) as income'), DB::raw('ROUND(SUM(vendor_price), 2) as expense'))
                ->whereYear('created_at', Carbon::now()->year)
                ->get();



        return view('admin.management.report.revenue_report')->with([
                    'revenue_report' => $revenue,
                    'total_revenue' => $totalrevenue,
                    'currentmonth' => $currentmonth_revenue,
                    'currentyear' => $currentyear_revenue
        ]);
    }




    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        if ($validator->fails()) {
        Toastr::error('File Format is not acceptable','Error');
        return back();
        }

        $fileName = 'AamarSMS_API_Documentation'.'.'.$request->file->extension();  
        $request->file->move(public_path('api_doc'), $fileName);
        Log::addToLog('New API Uploaded by System admin');
        Toastr::success('New API Documentaion is Uploaded','Success');
        return back();
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

                ]);
        if ($validator->fails()) {
                    Toastr::error('Name,Email,Mobile Required.Image must be less than 2MB & Unique','Error');
                    return redirect('admin/profile');
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
        return redirect('admin/profile');
    }
    else{
        Toastr::warning('Old Password does not Matched :)','Warning');
        return redirect('admin/profile');
    }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Destroynotify(Request $request)
    {
        Notification::whereId($request->id)->delete();
        Toastr::error('Notification Deleted','Warning');
        Log::addToLog('Notification Deleted !!!');
        return back();
    }

    public function Notification()
    {
        $notifications = Notification::where('user_id','=',1)->get();
        return view('admin.management.notification.index',compact('notifications'));
    }

    public function settings() {
        $users =Auth::user();
        $api_status = Configuration::get();
        $vendors = APIStatus::get();

        return view('admin.configuration', compact('api_status','users','vendors'));
    }

    public function Configuration(Request $request) {       

        $form_data = array(
            'priority_1'        =>  $request->priority_1,
            'priority_2'        =>  $request->priority_2,
            'priority_3'        =>  $request->priority_3,
        );
     
        Configuration::whereId(1)->update($form_data);

        Toastr::success('Vendor Configuration Updated successfully :)','Success');
        Log::addToLog('Vendor Configuration Updated');
        return back();
    }



    public function AccessLog(Request $request)
    {
        $userlist = User::all();
        $users = Auth::user();

                $user = $request->get('user');
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
                    $to_date = $to_date . ' 23:59:59';
                }
                if ($user && $from_date && $to_date) {
                    $logs = AccessLog::where('user_id',$user)->whereBetween('created_at', [$from_date, $to_date])->orderBy('id', 'DESC')->paginate(50);
                }
               else {
                    $logs = AccessLog::orderBy('id', 'DESC')->paginate(50);
                
                }



        return view('AccessLog',compact('logs','users','userlist'));

    }

    public function DailyOperatorBalance()
    {
        $balance = OperatorBalance::orderBy('id','DESC')->paginate(10);
        return view('admin.management.report.daily_operator',compact('balance'));
    }

}
