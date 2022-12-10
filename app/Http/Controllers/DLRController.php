<?php

namespace App\Http\Controllers;

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
use Rap2hpoutre\FastExcel\FastExcel;
use DB;
use Excel;
use DataTables;



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


    // public function campaignwise_dlr(Request $request, $campaignid){

    //     $list = DB::table('sms_transactions')
    //     ->select('sms_transactions.*', 'campaigns.text_body', 'campaigns.sender')
    //     ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
    //     ->where('sms_transactions.campaign_id', $campaignid)
    //     ->where('sms_transactions.user_id', Auth::user()->id)
    //     ->get();


    //     return view('dlr/user/campaignwise_dlr',compact('list'));

    // }


    public function campaignwise_dlr(Request $request, $campaignid){

        $list = DB::table('sms_transactions')
        // ->select('sms_transactions.*', 'campaigns.text_body', 'campaigns.sender')
        ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
        ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
        ->where('sms_transactions.campaign_id', $campaignid)
        ->where('sms_transactions.user_id', Auth::user()->id)
        ->get();

        return DataTables::of($list)
                        ->addIndexColumn()
                        ->make(true);

        // return view('dlr/user/campaignwise_dlr');

    }

    public function userwise_dlr(Request $request){

        $list = DB::table('sms_transactions')
        // ->select('sms_transactions.*', 'campaigns.text_body', 'campaigns.sender')
        ->select('sms_transactions.mobile_number as mobile_number', 'sms_transactions.created_at as created_at', 'sms_transactions.operator as operator', 'sms_transactions.price as price', 'campaigns.text_body as text_body')
        ->join('campaigns', 'campaigns.id', 'sms_transactions.campaign_id')
        ->where('sms_transactions.user_id', Auth::user()->id)
        ->orderBy('id', 'DESC')
        ->get();

        return DataTables::of($list)
                        ->addIndexColumn()
                        ->make(true);

        // return view('dlr/user/userwise_dlr');

    }



}
