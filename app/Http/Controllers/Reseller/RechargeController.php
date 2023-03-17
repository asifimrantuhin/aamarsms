<?php

namespace App\Http\Controllers\Reseller;

use App\Common;
use App\Http\Controllers\Controller;
use App\Helpers\Log;
use App\Models\Recharge;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Excel;
use App\Exports\GlobalExport;

class RechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function SslRecharge()
    {
       return view('reseller.management.ssl.payment');
    }

    public function MyRecharge(Request $request)
    {
        $users = Auth::user();

        $from_date = $request->get('date_from');
        $to_date = $request->get('date_to');
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
        if ($from_date && $to_date) {
            $rechargeHistory = Recharge::where('user_id',$users->id)
            ->where('type', 'recharge')
            ->where('created_at', '>', "$from_date")
            ->where('created_at', '<', "$to_date")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        else{
            $rechargeHistory = Recharge::where('type','recharge')->where('user_id',$users->id)->paginate(20);
        }
        

        return view('reseller.management.recharge.my_recharge',compact('users','rechargeHistory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
                    'customer_id' => 'required',
                    'amount' => 'required',
                    'note' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('error', 'Fillup mandatory field');
        }


        $id = Recharge::latest()->pluck('id')->first();
        $dateString = date('dm');
        $transaction_id = $dateString . $id;

        $add_bal = Common::addBalance($request->input('customer_id'), $request->input('amount'), $request->input('note'), $transaction_id, $user_id, 'cash', 'recharge');
        $customer = User::where('id',$request->input('customer_id'))->first()->name;
        $amount = $request->input('amount');

        if ($add_bal) {
            Log::addToLog("$amount Taka has been Recharged to $customer");
            Toastr::success("$amount has been Recharged successfully :)",'Success');
            return back();
        } else {
            Toastr::error("Recharge is Failed :)",'Error');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */

    public function History(Request $request) {

        $users = Auth::user();
        $user_id = $users->id;
        $executives = User::where('role', 4)->get();
        $customers =User::where('parent_user',$users->id)->get();

        $user = $request->input('user');
        $sales_id = $request->input('sales_id');
        $from_date = $request->get('date_from');
        $to_date = $request->get('date_to');
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

        if ($user && $from_date && $to_date) {
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->where('user_id', 'LIKE', $user)
            ->where('created_at', '>', "$from_date")
            ->where('created_at', '<', "$to_date")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }elseif($sales_id && $from_date && $to_date){
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->where('sales_id', 'LIKE', $sales_id)
            ->where('created_at', '>', "$from_date")
            ->where('created_at', '<', "$to_date")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        else{
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->orderBy('id', 'DESC')
            ->paginate(15);
        }

        return view('reseller.management.recharge.recharge_history',compact('users','customers','executives','rechargeHistory'));
    }


    public function balanceHistory() {
        $user_id = Auth::user()->id;
        
        $rechargeHistory = \DB::table('recharges')
                ->join('users', 'users.id', '=', 'recharges.user_id')
                ->select('recharges.*', 'users.name', 'users.email')
                ->where('users.id', $user_id)
                ->orWhere('users.parent_user', $user_id)
                ->orderBy('recharges.id', 'DESC')
                ->paginate(20);

        return view('reseller.management.recharge.transaction_history',compact('rechargeHistory'));
    }


    public function show(Recharge $recharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function edit(Recharge $recharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recharge $recharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recharge  $recharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recharge $recharge)
    {
        //
    }




    public function ExportHistory(Request $request){
        $users = Auth::user();
        $user_id = $users->id;
        $executives = User::where('role', 4)->get();
        $customers =User::where('parent_user',$users->id)->get();

        $user = $request->input('user');
        $sales_id = $request->input('sales_id');
        $from_date = $request->get('date_from');
        $to_date = $request->get('date_to');
        if (empty($from_date)) {
            $from_date = '2023-01-01 00:00:00';
        } else {
            $from_date = $from_date . ' 00:00:00';
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d H:i:s');
        } else {
            $to_date = $to_date . ' 23:59:59';
        }

        if ($user && $from_date && $to_date) {
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->where('user_id', 'LIKE', $user)
            ->where('created_at', '>', "$from_date")
            ->where('created_at', '<', "$to_date")
            ->orderBy('id', 'DESC')
            ->get();
        }elseif($sales_id && $from_date && $to_date){
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->where('sales_id', 'LIKE', $sales_id)
            ->where('created_at', '>', "$from_date")
            ->where('created_at', '<', "$to_date")
            ->orderBy('id', 'DESC')
            ->get();
        }
        else{
            $rechargeHistory = Recharge::where('reseller_id',$users->id)
            ->where('type', 'recharge')
            ->orderBy('id', 'DESC')
            ->get();
        }

        //return view('reseller.management.recharge.recharge_history',compact('users','customers','executives','rechargeHistory'));

        return Excel::download(new GlobalExport("reseller.management.recharge.recharge_history_download", $rechargeHistory), 'recharge_history.xlsx');
    }




    public function balanceHistoryExport() {
        $user_id = Auth::user()->id;
        
        $rechargeHistory = \DB::table('recharges')
                ->join('users', 'users.id', '=', 'recharges.user_id')
                ->select('recharges.*', 'users.name', 'users.email')
                ->where('users.id', $user_id)
                ->orWhere('users.parent_user', $user_id)
                ->orderBy('recharges.id', 'DESC')
                ->get();

        return Excel::download(new GlobalExport("reseller.management.recharge.transaction_history_download", $rechargeHistory), 'transaction_history.xlsx');

        //return view('reseller.management.recharge.transaction_history',compact('rechargeHistory'));
    }



}
