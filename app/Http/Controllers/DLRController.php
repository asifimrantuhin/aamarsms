<?php

namespace App\Http\Controllers;

use App\Exports\CampaignWiseDLRExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Common;
use App\Models\Campaign;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Mask;
use App\Models\Recharge;
use App\Models\sms_senders;
use App\Models\sms_transactions;
use App\Models\Template;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use DB;
use DataTables;
use Excel;
use App\Exports\GlobalExport;



class DLRController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }



    public function campaignlist_dlr(Request $request){
        $users = Auth::user();
        // $camp_name = $request->input('campaign_name');
        // $date_from = $request->input('from_date');
        // $date_to = $request->input('to_date');
        // if (empty($date_from)) {
        //     $date_from = '2019-01-01 00:00:00';
        // } else {
        //     $date_from = $date_from . ' 00:00:00';
        // }
        // if (empty($date_to)) {
        //     $date_to = date('Y-m-d H:i:s');
        // } else {
        //     $date_to = $date_to . ' 23:59:59';
        // }
        // if($camp_name){
        // $campaigns = Campaign::orderby('campaigns.id','DESC')
        // ->where('user_id',$users->id)
        // ->orderBy('id', 'DESC')
        // ->where('campaign_name', 'LIKE', "%{$camp_name}%")
        // ->paginate(20);
        // }
        // elseif($date_from || $date_to){
        //     $campaigns = Campaign::orderby('campaigns.id','DESC')
        //     ->where('user_id',$users->id)
        //     ->where('created_at', '>=', $date_from . ' 00:00:00')
        //     ->where('created_at', '<=', $date_to . ' 23:59:59')
        //     ->paginate(20);
        // }
        // else{
        //     $campaigns = Campaign::where('user_id',$users->id)->orderby('id','DESC')->paginate(20);
        // }


        $campaigns = Campaign::where('user_id',$users->id)->orderby('id','DESC')->paginate(20);

        return view('dlr/user/campaignlist_dlr',compact('users','campaigns'));

    }


    public function campaignwise_dlr(Request $request, $campaignid){
        ini_set("memory_limit", "-1");
        ini_set("max_execution_time", 0);

        $list = DB::table('sms_transactions')
        ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
        ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
        ->where('sms_transactions.campaign_id', $campaignid)
        //->where('sms_transactions.user_id', Auth::user()->id)
        ->get();

        return DataTables::of($list)->addIndexColumn()->make(true);
    }

    public function campaignDlrExport($campaignid)
    {
        return Excel::download(new CampaignWiseDLRExport($campaignid), 'campain_wise_dlr.xlsx');
    }

    

    public function reseller_selfcampaignlist_dlr(Request $request){
        $users = Auth::user();
        $campaigns = Campaign::where('user_id',$users->id)->orderby('id','DESC')->paginate(20);
        return view('dlr/user/campaignlist_dlr',compact('users','campaigns'));
    }

    public function resellers_usercampaignlist_dlr(Request $request){
        $campaign_name = $request->input('campaign_name');
        $from_date = $request->get('from_date');
        $to_date = $request->get('to_date');
        if (empty($from_date)) {
            $from_date = '2012-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }



        $userlist = DB::table('users')->where('parent_user', Auth::user()->id)->pluck('id');
        $campaigns = Campaign::whereIn('user_id',$userlist)
        ->select('campaigns.*', 'users.name as username')
        ->join('users', 'users.id', 'campaigns.user_id')
        ->when($campaign_name, function($query, $campaign_name){
            return $query->where('campaigns.campaign_name', 'LIKE', $campaign_name);
        })
        ->whereBetween('campaigns.start_date',[$from_date,$to_date])
        ->orderby('id','DESC')
        ->paginate(20);
        return view('dlr/reseller/resellers_usercampaignlist_dlr',compact('campaigns'));
    }

    public function resellers_usercampaignlist_dlr_export(Request $request){
        $campaign_name = $request->input('campaign_name');
        $from_date = $request->get('from_date');
        $to_date = $request->get('to_date');
        if (empty($from_date)) {
            $from_date = '2012-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }



        $userlist = DB::table('users')->where('parent_user', Auth::user()->id)->pluck('id');
        $campaigns = Campaign::whereIn('user_id',$userlist)
        ->select('campaigns.*', 'users.name as username')
        ->join('users', 'users.id', 'campaigns.user_id')
        ->when($campaign_name, function($query, $campaign_name){
            return $query->where('campaigns.campaign_name', 'LIKE', $campaign_name);
        })
        ->whereBetween('campaigns.start_date',[$from_date,$to_date])
        ->orderby('id','DESC')
        ->get();

        return Excel::download(new GlobalExport("dlr/reseller/resellers_usercampaignlist_dlr_export", $campaigns), 'campaign_report.xlsx');


        //return view('dlr/reseller/resellers_usercampaignlist_dlr',compact('campaigns'));
    }


    public function admin_usercampaignlist_dlr(Request $request){
        $userlist = DB::table('users')->where('parent_user', Auth::user()->id)->pluck('id');
        $campaigns = Campaign::whereIn('user_id',$userlist)
        ->select('campaigns.*', 'users.name as username')
        ->join('users', 'users.id', 'campaigns.user_id')
        ->orderby('id','DESC')
        ->paginate(20);
        return view('dlr/admin/resellers_usercampaignlist_dlr',compact('campaigns'));
    }



    public function deliverylog(Request $request){
        ini_set("memory_limit", "-1");
        ini_set("max_execution_time", 0);
        $fromdate = date('Y-m-d', strtotime("-1 months"));
        $todate = date('Y-m-t');
        if ($request->ajax()) {
            $list = DB::table('sms_transactions')
            ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
            ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
            ->where('sms_transactions.user_id', Auth::user()->id)
            ->whereBetween('sms_transactions.created_at',[$fromdate, $todate])
            ->orderBy('sms_transactions.created_at', 'DESC')
            ->get();

            return DataTables::of($list)->addIndexColumn()->make(true);
        }

        return view('dlr/user/userwise_deliverylog');
        

    }


    public function reseller_selfdeliverylog(Request $request){
        ini_set("memory_limit", "-1");
        ini_set("max_execution_time", 0);
        $fromdate = date('Y-m-d', strtotime("-1 months"));
        $todate = date('Y-m-t');
         if ($request->ajax()) {
            $list = DB::table('sms_transactions')
            ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
            ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
            ->where('sms_transactions.user_id', Auth::user()->id)
            ->whereBetween('sms_transactions.created_at',[$fromdate, $todate])
            ->orderBy('sms_transactions.created_at', 'DESC')
            ->get();

            return DataTables::of($list)->addIndexColumn()->make(true);
        }

        return view('dlr/user/userwise_deliverylog');
        

    }

    public function resellers_userdeliverylog(Request $request){
        ini_set("memory_limit", "-1");
        ini_set("max_execution_time", 0);
        $userlist = DB::table('users')->where('parent_user', Auth::user()->id)->pluck('id');
        $fromdate = date('Y-m-d', strtotime("-1 months"));
        $todate = date('Y-m-t');
        if ($request->ajax()) {
            $list = DB::table('sms_transactions')
            ->select('users.name as username','sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
            ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
            ->join('users', 'users.id', 'campaigns.user_id')
            ->whereIn('campaigns.user_id',$userlist)
            ->whereBetween('sms_transactions.created_at',[$fromdate, $todate])
            ->orderBy('sms_transactions.created_at', 'DESC')
            ->get();
            return DataTables::of($list)->addIndexColumn()->make(true);
        }
        return view('dlr/reseller/userwise_deliverylog');
    }

    public function admin_userdeliverylog(Request $request){
        ini_set("memory_limit", "-1");
        ini_set("max_execution_time", 0);

        //$userlist = DB::table('users')->where('parent_user', Auth::user()->id)->pluck('id');
        $fromdate = date('Y-m-d', strtotime("-1 months"));
        $todate = date('Y-m-t');
         if ($request->ajax()) {
            $list = DB::table('sms_transactions')
            ->select('users.name as username','sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
            ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
            ->join('users', 'users.id', 'campaigns.user_id')
            //->whereIn('campaigns.user_id',$userlist)
            ->whereBetween('sms_transactions.created_at',[$fromdate, $todate])
            ->orderBy('sms_transactions.created_at', 'DESC')
            ->get();

            return DataTables::of($list)->addIndexColumn()->make(true);
        }
        return view('dlr/admin/userwise_deliverylog');
    }

}
