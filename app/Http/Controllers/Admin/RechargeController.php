<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use App\Helpers\Log;
use App\Models\Recharge;
use App\Models\RechargeRequest;
use App\Models\User;
use App\Models\APIStatus;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        $users = Auth::user();
        $customers = User::where('role','!=',[1,4])->orderBy('id', 'DESC')->get();

        
        $rechargeHistory =  Recharge::where('recharges.amount', '>', '0')
                            ->where('recharges.type', 'recharge')
                            ->orderBy('recharges.id', 'DESC')
                            ->paginate(3);

        return view('admin.management.recharge.recharge',compact('users','customers','rechargeHistory'));
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
        $customers = User::where('id', '<>', $user_id)->orderBy('id', 'DESC')->get();

        $user = $request->input('user');
        $sales_id = $request->input('sales_id');
        $from_date = $request->get('date_from');
        $to_date = $request->get('date_to');
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

        $rechargeHistory = DB::table('recharges')
                          ->join('users', 'users.id', '=', 'recharges.user_id')
                          ->select('recharges.*', 'users.name as user_name')
                          ->when($user, function($query, $user){
                                return $query->where('recharges.user_id', 'LIKE', $user);
                          })
                           ->when($sales_id, function($query, $sales_id){
                                return $query->where('recharges.sales_id', 'LIKE', $sales_id);
                          })
                           ->where('recharged_by', Auth::user()->id)
                          ->whereBetween('recharges.created_at',[$from_date,$to_date])
                          ->where('recharges.type','=', 'recharge')
                          ->orderBy('recharges.id', 'DESC')
                          ->paginate(20);


                      
            
            
            


        // if ($user && $from_date && $to_date) {
        //     $rechargeHistory = Recharge::where('recharges.amount', '>', '0')
            
        //     ->where('recharges.created_at', '>', "$from_date")
        //     ->where('recharges.created_at', '<', "$to_date")
        //     ->where('recharges.type', 'recharge')
        //     ->orderBy('recharges.id', 'DESC')
        //     ->paginate(20);
        // }elseif($sales_id && $from_date && $to_date){
        //     $rechargeHistory = Recharge::where('recharges.amount', '>', '0')
            
        //     ->where('recharges.created_at', '>', "$from_date")
        //     ->where('recharges.created_at', '<', "$to_date")
        //     ->where('recharges.type', 'recharge')
        //     ->orderBy('recharges.id', 'DESC')
        //     ->paginate(20);
        // }
        // else{
        //     $rechargeHistory = Recharge::where('recharges.amount', '>', '0')
        //     ->join('users', 'users.id', '=', 'recharges.user_id')
        //     ->select('recharges.*', 'users.name as user_name')
        //     ->where('recharges.created_at', '>', "$from_date")
        //     ->where('recharges.created_at', '<', "$to_date")
        //     ->where('recharges.type', 'recharge')
        //     ->orderBy('recharges.id', 'DESC')
        //     ->paginate(20);
        // }

        return view('admin/management/recharge/recharge_history',compact('customers','executives','rechargeHistory'));
    }


    public function TransactionHistory() {
        $rechargeHistory = DB::table('recharges')
                ->leftjoin('users as u', 'u.id', '=', 'recharges.user_id')
                ->leftjoin('users as ru', 'ru.id', '=', 'u.parent_user')
                ->select('recharges.*', 'u.name', 'ru.name as reseller')
                ->where('amount', '<', '0')
                ->orderBy('recharges.id', 'DESC')
                ->paginate(20);
        return view('admin.management.recharge.transaction_history')->with('rechargeHistory', $rechargeHistory);
    }




    public function requestlist(Request $request)
    {
        $userlists = User::whereNotIn('role',[1,4])->get();


        $cus_id = $request->input('cus_id');
        $status = $request->input('status');
        $admin_sts = $request->input('admin_sts');
        $sales_sts = $request->input('sales_sts');
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

        if($cus_id)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('rr.user_id', $cus_id)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($status)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('rr.status', $status)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($admin_sts)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('rr.admin_status', $admin_sts)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sales_sts)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('rr.sales_status', $sales_sts)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($from_date || $to_date)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->whereBetween('rr.created_at', [$from_date, $to_date])
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        
        else {
            $recharge_requests = \DB::table('recharge_requests as rr')
        ->join('users', 'users.id', '=', 'rr.user_id')
        ->select('rr.*', 'users.name as username')
        ->orderBy('id', 'DESC')
        ->paginate(20);
        }
        
       
        return view('admin.management.recharge_request.request_list',compact('recharge_requests','userlists'));
    }

    public function viewRecharge($id) {
        $recharge = RechargeRequest::where('id', $id)->get();
        return json_decode($recharge);
    }

    public function RechargeApprove(Request $request)
    {

        $request_id = $request->get('request_id');
        $user_id = Auth::user()->id;
        $transaction_id = uniqid(); // tran_id must be unique
        $add_bal = Common::addBalance($request->input('customer_id'), $request->input('amount'), $request->input('note'), $transaction_id, $user_id, 'cash', 'recharge');
        $customer = User::where('id',$request->input('customer_id'))->first()->name;
        $amount = $request->input('amount');

        if($request->input('admin_status') == 1)
        {
          $date = date('Y-m-d h:i:s');
        }
        else{
            $date = '';
        }
        
        $data = array(
            'admin_status' => $request->input('admin_status'),
            'admin_rcv_date' =>$date,
            'approved_at' => date('Y-m-d h:i:s'),
            'status' =>1
        );
        $request = new RechargeRequest();
        $request->where('id',$request_id )->update($data);
        
        if ($add_bal) {
            Log::addToLog("$amount Taka has been Recharged to $customer");
            return redirect('admin/customer_credit')->with('success', 'Recharge Balance successfully');
        } else {
            return redirect('admin/customer_credit')->with('error', 'Recharge balance added failed!');
        }
    }

    public function EditPayment($id) {
        $data = RechargeRequest::whereid($id)->get();

        $username = User::whereId($data[0]->user_id)->pluck('name')->first();
        return view('admin.management.recharge_request.edit_payment',compact('data','username'));
    }

    public function UpdatePayment(Request $request,$id) {

        $data = array(
            'admin_rcv_date' => $request->input('rcv_date'),
            'admin_status' => 1
        );

        $request= RechargeRequest::whereId($id)->update($data);

        $data = RechargeRequest::whereid($id)->get();
        $cus_name = User::whereId($data[0]['user_id'])->pluck('name')->first();
        Toastr::success("$cus_name Payment Receive Date Updated",'Success');
        Log::addToLog("$cus_name Payment Receive Date Updated");
       
        return redirect('admin/customer_credit');
    }

    public function AdminTransaction($id, $status) {
        Recharge::where('id', $id)->update(['adm_payment' => $status]);
        Toastr::success('Admin Transaction Status Changed !!!','Success');
        return back();
    }

    
    public function operator_recharge(Request $request) {
        $users = Auth::user();
        $user_id = $users->id;
        

        $operator = $request->input('operator');
        
        $from_date = $request->get('date_from');
        $to_date = $request->get('date_to');
        if (empty($from_date)) {
            $from_date = '2012-01-01';
        } else {
            $from_date = $from_date;
        }
        if (empty($to_date)) {
            $to_date = date('Y-m-d');
        } else {
            $to_date = $to_date;
        }

        $vendorList = APIStatus::get();

        $rechargeHistory = DB::table('vendor_recharge')
                          ->when($operator, function($query, $operator){
                                return $query->where('vendor', 'LIKE', $operator);
                          })
                          ->whereBetween('recharge_date',[$from_date,$to_date])
                          ->orderBy('created_at', 'DESC')
                          ->paginate(20);


        return view('admin/management/operator_recharge/recharge_history',compact('rechargeHistory','vendorList'));
    }

    public function save_operator_recharge(Request $request)
    {
        $user_id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
                    'operator' => 'required',
                    'amount' => 'required',
                    'recharge_date' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error', 'Fillup mandatory field');
        }

        $insert = DB::table('vendor_recharge')->insert([
            'vendor' => $request->input('operator'),
            'amount' => $request->input('amount'),
            'recharge_date' => date("Y-m-d", strtotime($request->input('recharge_date'))),
            'note' => $request->input('note'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        

        if ($insert) {
            return back()->with('success', 'Recharge saved');
        } else {
            return back()->with('error', "Recharge is Failed :)");
        }
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
}
