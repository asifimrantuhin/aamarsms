<?php

namespace App\Http\Controllers\Sales;

use App\Helpers\Log;
use App\Helpers\Notification;
use App\Models\Customer;
use App\Http\Controllers\Controller;
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

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $sale = $request->get('sales_id');
        $vdf = $request->get('vdf');
        $vdt = $request->get('vdt');
        $fdf = $request->get('fdf');
        $fdt = $request->get('fdt');
        $sale = $request->get('sales_id');
        $priority = $request->get('priority');
        $cc = $request->get('cc');
        $cname = $request->get('cname');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $area = $request->get('area');


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

        if ($sale) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('sales_id', 'LIKE', "%{$sale}%")
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif ($fdf || $fdt) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('followup', '>=', $fdf)
                ->where('followup', '<=', $fdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif ($vdf || $vdt) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('visiting_date', '>=', $vdf)
                ->where('visiting_date', '<=', $vdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif($priority ) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('priority', 'LIKE', "%{$priority}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cc) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cc', 'LIKE', "%{$cc}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cname) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cname', 'LIKE', "%{$cname}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($email) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('email', 'LIKE', "%{$email}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($mobile) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('mobile', 'LIKE', "%{$mobile}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($area) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('area', 'LIKE', "%{$area}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
         elseif ($from_date || $to_date) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('created_at', '>=', $from_date . ' 00:00:00')
                ->where('created_at', '<=', $to_date . ' 23:59:59')
                ->orderBy('id', 'DESC')
                ->paginate(20);
        } else {
            $customers = FieldCustomer::where('sales_id',$user_id)->orderBy('id', 'DESC')->paginate(20);
        }

        $area = Config::get('area.show');

        return view('sales.management.customer.customer_list',compact('customers','area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $area = Config::get('area.show');

        return view('sales.management.customer.form',compact('area'));
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
        $user_name = Auth::user()->name;
        if (!empty($request->input('requirement'))) {
            $requirement = implode(",", $request->input('requirement'));
        } else {
            $requirement = '';
        }
        $visiting = $request->input('visiting_date');
        $yesterday = Carbon::yesterday()->format('Y-m-d');
        if(($visiting < $yesterday)){
            Toastr::error('You can only entry "Yesterday/Today" Visiting Data','Error');
            return back();
        }
        $validator = Validator::make($request->all(), [
                    'cname' => 'required',
                    'caddress' => 'required',
                    'cperson' => 'required',
                    'designation' => 'required',
                    'priority' => 'required',
                    'email' => 'required|string|email|max:255|unique:field_customers',
                    'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11|unique:field_customers',
                    'cfeedback' => 'required'
                    
        ]);
        if ($validator->fails()) {
            Toastr::warning('Fillup mandatory Data','Warning');
            return back();
        }



        $last = FieldCustomer::latest('id')->pluck('id')->first();
        $add = $last+1;
        $cc = date('dmy').$add;

        $data = new FieldCustomer();
        $data->sales_id = $user_id;
        $data->sales_name = $user_name;
        $data->cc = $cc;
        $data->cname = $request->input('cname');
        $data->caddress = $request->input('caddress');
        $data->area = $request->input('area');
        $data->cperson = $request->input('cperson');
        $data->designation = $request->input('designation');
        $data->email = $request->input('email');
        $data->mobile = $request->input('mobile');
        $data->requirement = $requirement;
        $data->proposal = $request->input('proposal');
        $data->priority = $request->input('priority');
        $data->cfeedback = $request->input('cfeedback');
        $data->source = $request->input('source');
        $data->visiting_date = $request->input('visiting_date');
        $data->followup = $request->input('followup');
        $data->cost = $request->input('cost');
        $data->from = $request->input('from');
        $data->to = $request->input('to');
        $data->transaport = $request->input('transaport');
        $data->save();

        if ($data->save()) {
            Log::addToLog("$data->cname has been saved to system");
            Toastr::success("$data->cname added successfully :)",'Success');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FieldCustomer::findOrFail($id);
        $requirement = explode(",",$data->requirement);
        return view('sales.management.customer.edit_customer',compact('data','requirement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if (!empty($request->input('requirement'))) {
            $requirement = implode(",", $request->input('requirement'));
        } else {
            $requirement = '';
        }
        $validator = Validator::make($request->all(), [
                    'cname' => 'required',
                    'caddress' => 'required',
                    'cperson' => 'required',
                    'designation' => 'required',
                    'email' => 'required',
                    'mobile' => 'required',
                    'cfeedback' => 'required',
        ]);
        if ($validator->fails()) {
            Toastr::success('Fillup mandatory field','success');
            return redirect('sales/editcustomer/');
        }

        $cname = $request->input('cname');
        $caddress = $request->input('caddress');
        $cperson = $request->input('cperson');
        $designation = $request->input('designation');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $requirement = $requirement;
        $proposal = $request->input('proposal');
        $priority = $request->input('priority');
        $visiting_date = $request->input('visiting_date');
        $followup = $request->input('followup');
        $cost = $request->input('cost');
        $from = $request->input('from');
        $to = $request->input('to');
        $transaport = $request->input('transaport');

        $gate = FieldCustomer::where('id',$id)->pluck('cfeedback')->first();
        $cfeedback2 = FieldCustomer::where('id',$id)->pluck('cfeedback2')->first();
        if($request->cfeedback != $gate){
            $cfeedback2 = $gate;
        }
        else{
            $cfeedback2 = $cfeedback2;
        }

        $data = array(
            'cname' => $request->input('cname'),
            'caddress' => $request->input('caddress'),
            'area' => $request->input('area'),
            'cperson' => $request->input('cperson'),
            'designation' => $request->input('designation'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'requirement' => $requirement,
            'proposal' => $request->input('proposal'),
            'priority' => $request->input('priority'),
            'source' => $request->input('source'),
            'cfeedback' => $request->input('cfeedback'),
            'cfeedback2' => $cfeedback2,
            'followup' => $request->input('followup'),
            // 'cost' => $request->input('cost'),
            // 'from' => $request->input('from'),
            // 'to' => $request->input('to'),
            // 'transaport' => $request->input('transaport'),
        );
        $customer = new FieldCustomer();
        $customer->where(['id' => $id])->update($data);
        $update = FieldCustomer::where('id',$id)->pluck('cname')->first();
        Log::addToLog("$update Data Updated");
        Toastr::success("$update Data Updated Successfully",'success');
        return back();
    }

    public function Conveyance(Request $request) {
        $user_id = Auth::user()->id;
        $sale = $request->get('sales_id');
        $vdf = $request->get('vdf');
        $vdt = $request->get('vdt');
        $pdf = $request->get('pdf');
        $pdt = $request->get('pdt');
        $pay_status = $request->get('pay_status');
        $cc = $request->get('cc');
        $cperson = $request->get('cperson');
        $method = $request->get('method');


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

        if ($pdf || $pdt) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('cost','>',0)
                ->where('pay_date', '>=', $pdf)
                ->where('pay_date', '<=', $pdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif($sale) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cost','>',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif ($vdf || $vdt) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('cost','>',0)
                ->where('visiting_date', '>=', $vdf)
                ->where('visiting_date', '<=', $vdt)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }
        elseif($pay_status ) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cost','>',0)
            ->where('pay_status', 'LIKE', "%{$pay_status}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cc) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cost','>',0)
            ->where('cc', 'LIKE', "%{$cc}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($cperson) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cost','>',0)
            ->where('cperson', 'LIKE', "%{$cperson}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($method) {
            $customers = FieldCustomer::where('sales_id',$user_id)
            ->where('cost','>',0)
            ->where('method', 'LIKE', "%{$method}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
         elseif ($from_date || $to_date) {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('cost','>',0)
                ->where('created_at', '>=', $from_date . ' 00:00:00')
                ->where('created_at', '<=', $to_date . ' 23:59:59')
                ->orderBy('id', 'DESC')
                ->paginate(20);
        } else {
            $customers = FieldCustomer::where('sales_id',$user_id)
                ->where('cost','>',0)
                ->orderBy('id', 'DESC')
                ->paginate(20);
        }  

        return view('sales.management.customer.convayance',compact('customers'));
    }

    public function AssignedCustomer(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $userrole = $request->get('userrole');
        $currentuser = Auth::user()->id;
        if ($name || $email || $mobile || $userrole) {
            $customers = User::where('name', 'LIKE', "%{$name}%")
                ->where('email', 'LIKE', "%{$email}%")
                ->where('mobile', 'LIKE', "%{$mobile}%")
                ->where('role', 'LIKE', "%{$userrole}%")
                ->where('sales_person', $currentuser)
                ->orderBy('id', 'DESC')
                ->paginate(10);
        } else {
            $customers = User::where('sales_person', $currentuser)
                ->orderBy('id', 'DESC')
                ->paginate(10);
        }


        return view('sales.management.sys_user.UserList', compact('customers'));
    }

    public function RechargeHistory(Request $request)
    {
        $recharge_history = Recharge::where('sales_id',Auth::user()->id)
        ->join('users as users','recharges.user_id','=','users.id')
        ->where('type','recharge')->orderBy('recharges.id','DESC')->paginate(10);

        return view('sales.management.sys_user.recharge_history',compact('recharge_history'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function requestlist(Request $request)
    {

        $users = Auth::user();
        $userlists = User::where('sales_person', $users->id)->get();

        $cus_id = $request->input('cus_id');
        $admin_sts = $request->input('admin_sts');
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
            ->where('rr.sales_id',$users->id)
            ->where('rr.user_id', $cus_id)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($admin_sts)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('sales_id',$users->id)
            ->where('rr.admin_status', $admin_sts)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($from_date || $to_date)
        {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('sales_id',$users->id)
            ->whereBetween('rr.created_at', [$from_date, $to_date])
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        
        else {
            $recharge_requests = \DB::table('recharge_requests as rr')
            ->join('users', 'users.id', '=', 'rr.user_id')
            ->select('rr.*', 'users.name as username')
            ->where('rr.sales_id',$users->id)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }

        return view('sales.management.recharge_request.request_list', compact('userlists','recharge_requests'));
    }

    public function rechargeRequest(Request $request)
    {
        $cur_time = date('d-m-Y h:i:s');

        $str = $request->input('customer_id');
        $cus = explode(",", $str);

        if($request->input('sales_status') == 1)
        {
          $date = $cur_time;
        }
        else{
            $date = '';
        }

        $data = new RechargeRequest();
        $data->user_id = $cus[0];
        $data->user_mobile = $cus[1];
        $data->amount = $request->input('amount');
        $data->sales_id = Auth::user()->id;
        $data->sales_status = $request->input('sales_status');
        $data->admin_status = 2;
        $data->sales_rcv_date = $date;
        $data->created_at = $cur_time;
        $data->updated_at = $cur_time;
        $data->save();

        if ($data->save()) {
            $cus_name = User::whereId($cus[0])->pluck('name')->first();
            Log::addToLog("$cus_name has $data->amount BDT recharge request");
            $admin = 1;
            Notification::addToNotification("$cus_name has $data->amount BDT recharge request",$admin);
            Toastr::success("$cus_name has $data->amount BDT recharge request from You !!!",'Success');
            return redirect('sales/customer_credit');
        }
    }

    public function EditPayment($id) {
        $data = RechargeRequest::whereid($id)->get();

        $username = User::whereId($data[0]->user_id)->pluck('name')->first();
        return view('sales.management.recharge_request.edit_payment',compact('data','username'));
    }

    public function UpdatePayment(Request $request,$id) {

        $data = array(
            'sales_rcv_date' => $request->input('rcv_date'),
            'sales_status' => 1
        );

        $request= RechargeRequest::whereId($id)->update($data);
        Toastr::success('Payment Date Updated Successfully','Success');
       
        return redirect('sales/customer_credit');
    }

    public function CustomerCampaign(Request $request){

        $date = Carbon::now()->subDays(7);
        $campaigns = DB::table('recharges')
        ->join('users','users.id', '=', 'recharges.user_id')
        ->where('sales_id',Auth::user()->id)
        ->where('amount','<',0)
        ->where('recharges.created_at','>',$date)
        ->orderBy('recharges.id','DESC')
        ->paginate(5);


        
        return view('sales.management.customer.campaign_list',compact('campaigns'));
    }

}
