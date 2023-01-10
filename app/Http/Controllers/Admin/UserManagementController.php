<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Exports\AttendenceExport;
use App\Exports\FieldExport;
use App\Exports\UserExport;
use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\AccessLog;
use App\Models\Attendence;
use App\Models\Comission;
use App\Models\FieldCustomer;
use App\Models\Mask;
use App\Models\NonMask;
use App\Models\RatePlan;
use App\Models\Recharge;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Excel;
use DB;
use Config;


class UserManagementController extends Controller
{
    
    public function index(Request $request)
    {
        $users= Auth::user();
        $masks = Mask::orderBy('id','DESC')->get();
        $nonmasks = NonMask::orderBy('id','DESC')->get();

        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $userrole = $request->get('userrole');
        $executive = $request->get('executive');
        $reseller = $request->get('reseller');

        if ($name) {
            $userlist = User::whereIn('role',[2,3])
            ->where('name', 'LIKE', "%{$name}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }elseif($email){
            $userlist = User::whereIn('role',[2,3])
            ->where('email', 'LIKE', "%{$email}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }
        elseif($mobile){
            $userlist = User::whereIn('role',[2,3])
            ->where('mobile', 'LIKE', "%{$mobile}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }elseif($executive){
            $userlist = User::whereIn('role',[2,3])
            ->where('sales_person', 'LIKE', "%{$executive}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }
        elseif($reseller){
            $userlist = User::whereIn('role',[2,3])
            ->where('parent_user', 'LIKE', "%{$reseller}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }
        elseif($userrole){
            $userlist = User::whereIn('role',[2,3])
            ->where('role', 'LIKE', "%{$userrole}%")
            ->orderBy('id','DESC')
            ->paginate(20);
        }else{
        $userlist = User::whereIn('role',[2,3])->orderBy('id','DESC')->paginate(20);
        }        
        $executive = User::where('role',4)->get();
        $reseller = User::where('role',2)->get();

        return view('admin.management.user.index',compact('userlist','users','masks','nonmasks','executive','reseller'));
    }

    public function Status($id, $status) {
        User::whereId($id)->update(['status' => $status]);
        $user = User::whereId($id)->first();

        Toastr::success("$user->name status has been Changed",'Success');
        Log::addToLog("$user->name status has been Changed");
       return back();
    }

    public function reset($id, $pass) {
        $users = User::find($id);
        $users->password = Hash::make($pass);
        $users->save();
        Toastr::success('User Password Reset :)','Success');
        Log::addToLog("$users->name password has been reset");
       return redirect('admin/userlist');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //dd($request->input());
      
    if ($request->mask) {
        $mask = implode(",", $request->input('mask'));
    } else {
        $mask = '';
    }

    if ($request->nonmask) {
        $nonmask = implode(",", $request->input('nonmask'));
    } else {
        $nonmask = '';
    }



    $users= Auth::user();
    $rules = array(
        'username' => 'required',
        'usertype' => 'required',
        'email' => 'required|string|max:255|unique:users',
        'password' => 'required|min:6|max:30',
        'mobile' => 'required',
        'domain' => 'required',
        'status' => 'required'
    );

    $error = Validator::make($request->all(), $rules);

    if($error->fails())
    {
        Toastr::error('Duplicate Entry','Error');
        return back();
    }

    //echo "pass";exit;

    $form_data = array(
        'parent_user'    =>  ($request->input('parent_user') != '' ? $request->input('parent_user') : $users->id),
        'sales_person'   =>  $request->input('sales_person'),
        'name'           =>  $request->input('username'),
        'representative' =>  $request->input('representative'),
        'domain'         =>  $request->input('domain'),
        'role'           =>  $request->input('usertype'),
        'mask'           =>  $mask,
        'nonmasking'     =>  $nonmask,
        'email'          =>  $request->input('email'),
        'mobile'         =>  $request->input('mobile'),
        'password'       =>  Hash::make($request->input('password')),
        'operator'       =>  $request->input('dedicated_operator'),
        'created_by'     =>  $users->id,
        'status'         =>  $request->input('status'),
        'api_enabled'    =>  $request->input('api_enabled'),
    );
    User::create($form_data);
    $last_user = User::where('email',$request->input('email'))->pluck('id')->first();

        $user_info = User::findorFail($last_user);

        foreach ($request->operator as $key => $value) {
            # code...
   
            $data[] = [
                'user_id' => $last_user,
                'reseller_id' => $user_info->parent_user,
                'operator' => $value,
                'nonmasking_price' => $request->nonmasking_price[$key],
                'masking_price' => $request->masking_price[$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        RatePlan::insert($data);
        Toastr::success('User Created Successfully','Success');
        $username = $request->input('username');
        $parent = User::where('id',$form_data['parent_user'])->pluck('name')->first();
        Log::addToLog("$username has been added to system by $parent");
    return back();

    }



    public function viewuser($id) {
        $user = User::where('id', $id)->get();
        return json_decode($user);
        
    }

    public function UserBalance(Request $request)
    {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $userid = $request->input('userid');
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
        $usersbalance = DB::table('recharges as r')
                ->select('r.user_id', 'users.name as username', 'users.email', 'users.role as usertype', DB::raw('ROUND(SUM(r.amount), 2) as currentBalance'), DB::raw("(SELECT ROUND(SUM(amount) , 2) FROM recharges WHERE created_at BETWEEN '$from_date' AND '$to_date' AND  (amount < 0 AND user_id = r.user_id)) AS total_expense"), DB::raw("(SELECT ROUND(SUM(amount) , 2) FROM recharges WHERE created_at BETWEEN '$from_date' AND '$to_date' AND  (amount > 0 AND user_id = r.user_id)) AS total_recharge")
                )
                ->join('users', 'users.id', '=', 'r.user_id')
                ->groupBy('r.user_id')
                ->orderBy('r.user_id','DESC')
                ->paginate(20);

        if (isset($userid)) {
            $usersbalance = DB::table('recharges as r')
                    ->select('r.user_id', 'users.name as username', 'users.email', 'users.role as usertype', DB::raw('ROUND(SUM(r.amount), 2) as currentBalance'), DB::raw("(SELECT ROUND(SUM(amount) , 2) FROM recharges WHERE created_at BETWEEN '$from_date' AND '$to_date' AND  (amount < 0 AND user_id = r.user_id)) AS total_expense"), DB::raw("(SELECT ROUND(SUM(amount) , 2) FROM recharges WHERE created_at BETWEEN '$from_date' AND '$to_date' AND  (amount > 0 AND user_id = r.user_id)) AS total_recharge")
                    )
                    ->join('users', 'users.id', '=', 'r.user_id')
                    ->where('r.user_id', $userid)
                    ->groupBy('r.user_id')
                    ->orderBy('r.user_id','DESC')
                    ->paginate(20);
        }
        $adminUsers = Common::getAdminUsersID();
        $customer_list = DB::table('users')
                ->whereNotIn('id', $adminUsers)
                ->orderBy('id', 'DESC')
                ->paginate(20);


        return view('admin.management.recharge.users_balance')->with(['usersbalance' => $usersbalance, 'userlist' => $customer_list]);
    }


    public function Document($id){
        $user = User::whereId($id)->first();
        return view('admin.management.user.document',compact('user'));
    }

    public function edit($id)
    {
        $users = Auth::user();
        $customers = User::whereId($id)->get();
        $rates = RatePlan::where('user_id',$id)->get();
        $maskslist = Mask::where('status', 1)->orderBy('id','DESC')->get();
        $usermask = explode(',', $customers[0]->mask);

        $nonmaskslist = NonMask::where('status', 1)->orderBy('id','DESC')->get();
        $senderIDs = explode(',', $customers[0]->nonmask);

        return view('admin/management/user/edit-user',compact('customers','users','maskslist','usermask','rates','nonmaskslist', 'senderIDs'));
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
        if ($request->mask) {
            $masking = implode(",", $request->input('mask'));
        }else{
            $masking = '';
        }
        if ($request->nonmask) {
            $nonmasking = implode(",", $request->input('nonmask'));
        }else{
            $nonmasking='';
        }

        $data = array(
            'role' => $request->input('usertype'),
            'sales_person' => $request->input('sales_person'),
            'name' => $request->input('username'),
            'representative' => $request->input('representative'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'domain' => $request->input('domain'),
            'status' => $request->input('status'),
            'api_enabled' => $request->input('api_enabled'),
            'operator' => $request->input('route'),
            'mask' => $masking,
            'nonmasking' => $nonmasking,
        );
        $user = new User();
        $user->where('id', $id)->update($data);


       $gp = array('nonmasking_price' => $request->nonmasking_price[0],'masking_price' => $request->masking_price[0]);
       $rb = array('nonmasking_price' => $request->nonmasking_price[1],'masking_price' => $request->masking_price[1]);
       $bl = array('nonmasking_price' => $request->nonmasking_price[2],'masking_price' => $request->masking_price[2]);
       $tl = array('nonmasking_price' => $request->nonmasking_price[3],'masking_price' => $request->masking_price[3]);
       // $al = array('nonmasking_price' => $request->nonmasking_price[4],'masking_price' => $request->masking_price[4]);


       RatePlan::where('user_id', $id)->where('operator','GP')->update($gp);
       RatePlan::where('user_id', $id)->where('operator','RB')->update($rb);
       RatePlan::where('user_id', $id)->where('operator','BL')->update($bl);
       RatePlan::where('user_id', $id)->where('operator','TL')->update($tl);
       // RatePlan::where('user_id', $id)->where('operator','AL')->update($al);


       $username = $request->input('username');
    Toastr::success("User Data Updated successfully :)",'Success');
    Log::addToLog("$username Rateplan or Info Updated");
    return redirect('admin/userlist')->with('success', 'User Updated Successfully');
    
    }


    public function FieldCustomerData(Request $request)
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
            $customers =FieldCustomer::where('priority', 'LIKE', "%{$priority}%")
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
        elseif($area) {
            $customers = FieldCustomer::where('area', 'LIKE', "%{$area}%")
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
        $sales = User::whereIn('role', [4,5])->get();
        $area = Config::get('area.show');
        return view('admin.management.field.customer_list', compact('area','customers', 'sales'));
    }

    public function FieldCustomerConveyance(Request $request)
    {

        $sale = $request->input('sales_id');
        $vdf = $request->input('vdf');
        $vdt = $request->input('vdt');
        $pdf = $request->input('pdf');
        $pdt = $request->input('pdt');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');

        $pay_status = $request->input('pay_status');
        $cc = $request->input('cc');
        $cname = $request->input('cname');
        $method = $request->input('method');


        if($sale && $vdf && $vdt)
        {
            $customers = FieldCustomer::where('cost','>',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->whereBetween('visiting_date', [$vdf, $vdt])
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sale && $pdf && $pdt)
        {
            $customers = FieldCustomer::where('cost','>',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->whereBetween('pay_date', [$pdf, $pdt])
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sale && $from_date && $to_date)
        {
            $customers = FieldCustomer::where('cost','>',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->whereBetween('created_at', [$from_date, $to_date])
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sale && $pay_status)
        {
            $customers = FieldCustomer::where('cost','>=',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->where('pay_status', 'LIKE', "%{$pay_status}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sale && $method)
        {
            $customers = FieldCustomer::where('cost','>=',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->where('method', 'LIKE', "%{$method}%")
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
        elseif($sale || $cc || $cname || $method ||$pay_status ||$from_date)
        {
            // If Cost null no data wiil show
            $customers = FieldCustomer::where('cost','>',0)
            ->where('sales_id', 'LIKE', "%{$sale}%")
            ->where('cc', 'LIKE', "%{$cc}%")
            ->where('cname', 'LIKE', "%{$cname}%")
            ->where('method', 'LIKE', "%{$method}%")
            ->where('pay_status', 'LIKE', "%{$pay_status}%")
            ->whereBetween('created_at', [$from_date, $to_date])
            ->orderBy('id', 'DESC')
            ->paginate(20);

        }
        else 
        {
            $customers = FieldCustomer::where('cost','>',0)
            ->orderBy('id', 'DESC')
            ->paginate(20);
        }
       


        $sales = User::whereIn('role', [4,5])->get();
        $data = FieldCustomer::where('cost','>',0)->get();

        return view('admin.management.field.convayance', compact('customers','sales','data'));
    }

    public function editCustomer($id)
    {
        $data = FieldCustomer::findOrFail($id);
        $requirement = explode(",", $data->requirement);


        return view('admin.management.field.edit-customer', compact('data', 'requirement'));
    }

    public function editConeyance($id)
    {
        $data = FieldCustomer::findOrFail($id);
        return view('admin.management.field.edit-conveyance', compact('data'));
    }


    public function updateCustomer(Request $request, $id)
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
            return redirect('admin/editCustomer/' . $id)->withErrors($validator)->with('error', 'Fillup mandatory field');
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
        $source = $request->input('source');
        $visiting_date = $request->input('visiting_date');
        $followup = $request->input('followup');
        $cost = $request->input('cost');
        $from = $request->input('from');
        $to = $request->input('to');
        $transaport = $request->input('transaport');
        $area = $request->get('area');

        $dateYmd = date('(d-m-Y)');
        $gate = FieldCustomer::where('id', $id)->pluck('cfeedback')->first();
        $cfeedback2 = FieldCustomer::where('id', $id)->pluck('cfeedback2')->first();
        if ($request->cfeedback != $gate) {
            $cfeedback2 = $gate . ' ' . $dateYmd;
        } else {
            $cfeedback2 = $cfeedback2;
        }


        $data = array(
            'cname' => $request->input('cname'),
            'caddress' => $request->input('caddress'),
            'area' => $area,
            'cperson' => $request->input('cperson'),
            'designation' => $request->input('designation'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'requirement' => $requirement,
            'proposal' => $request->input('proposal'),
            'priority' => $request->input('priority'),
            'cfeedback' => $request->input('cfeedback'),
            'cfeedback2' => $cfeedback2,
            'source' => $source,
            'visiting_date' => $request->input('visiting_date'),
            'followup' => $request->input('followup'),
            'cost' => $request->input('cost'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'transaport' => $request->input('transaport'),
        );
        $customer = new FieldCustomer();
        $customer->where(['id' => $id])->update($data);
        $update = FieldCustomer::where('id', $id)->pluck('cname')->first();
        Log::addToLog("$update Data Updated");
        Toastr::success("$update Updated Successfully",'success');

        return redirect('admin/managecus');
    }

    public function updateConveyance(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'cost' => 'required',
            'pay_date' => 'required',
            'method' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/editConeyance/' . $id)->withErrors($validator)->with('error', 'Fillup mandatory field');
        }

        $cost = $request->input('cost');
        $pay_date = $request->input('pay_date');
        $method = $request->input('method');

        $data = array(
            'cost' => $request->input('cost'),
            'pay_date' => $request->input('pay_date'),
            'method' => $request->input('method'),
            'trx_num' => $request->input('trx_num'),
            'pay_status' => 1,
        );
        $conveyance = new FieldCustomer();
        $conveyance->where(['id' => $id])->update($data);
        $update = FieldCustomer::where('id', $id)->pluck('cname')->first();
        Log::addToLog("$update Conveyance Data Updated");
        Toastr::success("$update Conveyance Updated Successfully",'success');

        return redirect('admin/conveyance');
    }


    public function destroy($id)
    {
        $username = User::whereId($id)->pluck('name')->first();
        User::find($id)->delete();
        RatePlan::where('user_id',$id)->delete();
        Recharge::where('user_id',$id)->delete();
        Template::where('user_id',$id)->delete();
        AccessLog::where('user_id',$id)->delete();
        Log::addToLog("$username Deleted from System");
        Toastr::success("$username Deleted from System",'Success');
        return back();
    }


    public function changeStatus($id, $status) {
        $db = Comission::where('id', $id)->update(['status' => $status]);
        return redirect('admin/comission')->with('success', 'Comission status updated Successfully');
    }
    

    public function ComissionList(Request $request) {
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
        
        if($from_date || $to_date)
        {
            $total_recharge =  Recharge::groupBy('sales_id')
            ->where('type', 'recharge')->where('sales_id','!=','NULL')
            ->selectRaw('sum(amount) as total_sale, sales_id')
            ->whereBetween('created_at', [$from_date, $to_date])
            ->get();
        }
        else{
            $total_recharge =  Recharge::groupBy('sales_id')
            ->where('type', 'recharge')->where('sales_id','!=','NULL')
            ->selectRaw('sum(amount) as total_sale, sales_id')
            ->whereMonth('created_at', Carbon::now()->month)
            ->get();
        }
                    
        return view('admin.management.comission.comission_list',compact('total_recharge'));
    }

    public function salesList(Request $request)
    {
        $email = $request->input('email');

        if($email)
        {
            $saleslists = User::where('email', 'LIKE', "%{$email}%")->whereIn('role',[4,5])->orderBy('id','DESC')->paginate(10);
        }
        else{
            $saleslists = User::whereIn('role',[4,5])->orderBy('id','DESC')->paginate(10);
        }

        return view('admin.management.sales.List',compact('saleslists'));
    }

    public function ExecutiveStore(Request $request)
    {

        $user_id = Auth::user()->id;
        $user = new User();
        $user->name = $request->input('username');
        $user->manager = $request->input('manager');
        $user->email = $request->input('email');
        $user->designation = $request->input('designation');
        $user->password = Hash::make($request->input('password'));
        $user->mobile = $request->input('mobile');
        $user->joining = $request->input('joining');
        $user->base_sales = $request->input('base_sales');
        $user->remark = $request->input('remark');
        $user->created_by = $user_id;
        $user->status = $request->input('status');
        $user->role = $request->input('usertype');
        $user->save();


        if($request->input('usertype') == 4){
        $five = array('sales'=>$user->id,'comission' =>$request->comission[0],'minimum' => $request->minimum[0],'maximum' => $request->maximum[0],'created_at'=> date('Y-m-d h:i:s'),'updated_at'=> date('Y-m-d h:i:s'));
        $six = array('sales'=>$user->id,'comission' =>$request->comission[1],'minimum' => $request->minimum[1],'maximum' => $request->maximum[1],'created_at'=> date('Y-m-d h:i:s'),'updated_at'=> date('Y-m-d h:i:s'));
        $seven = array('sales'=>$user->id,'comission' =>$request->comission[2],'minimum' => $request->minimum[2],'maximum' => $request->maximum[2],'created_at'=> date('Y-m-d h:i:s'),'updated_at'=> date('Y-m-d h:i:s'));
        $eight = array('sales'=>$user->id,'comission' =>$request->comission[3],'minimum' => $request->minimum[3],'maximum' => $request->maximum[3],'created_at'=> date('Y-m-d h:i:s'),'updated_at'=> date('Y-m-d h:i:s'));

        Comission::insert($five);
        Comission::insert($six);
        Comission::insert($seven);
        Comission::insert($eight);
        }

        Log::addToLog("$user->name added to Sales Team");
        Toastr::success("$user->name added to Sales Team",'Success');
        return back();
    }

    public function ChangeExecutiveStatus($id, $status) {
        User::where('id', $id)->update(['status' => $status]);
        Toastr::success('User status updated successfully','Success');
        return back();
    }

    public function editSales($id) {
        $user = User::where('id',$id)->get();
        $comissions = Comission::where('sales',$id)->get();
        return view('admin.management.sales.Editsales',compact('user','comissions'));
    }

    public function updateSales(Request $request, $id) {      
        $data = array(
            'name' => $request->input('username'),
            'manager' => $request->input('manager'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'status' => $request->input('status'),
            'designation' => $request->input('designation'),
            'joining' => $request->input('joining'),
            'remark' => $request->input('remark'),
            'base_sales' => $request->input('base_sales'),
        );
        $user = new User();
        $user->where('id', $id)->update($data);

        $user = User::whereId($id)->first();
        if($user->role == 4){
        $five = array('minimum' => $request->minimum[0],'maximum' => $request->maximum[0],'updated_at'=> date('Y-m-d h:i:s'));
        $six = array('minimum' => $request->minimum[1],'maximum' => $request->maximum[1],'updated_at'=> date('Y-m-d h:i:s'));
        $seven = array('minimum' => $request->minimum[2],'maximum' => $request->maximum[2],'updated_at'=> date('Y-m-d h:i:s'));
        $eight = array('minimum' => $request->minimum[3],'maximum' => $request->maximum[3],'updated_at'=> date('Y-m-d h:i:s'));
        $ten = array('minimum' => $request->minimum[4],'maximum' => $request->maximum[4],'updated_at'=> date('Y-m-d h:i:s'));

        Comission::where('sales',$id)->where('comission', $request->comission[0])->update($five);
        Comission::where('sales',$id)->where('comission', $request->comission[1])->update($six);
        Comission::where('sales',$id)->where('comission', $request->comission[2])->update($seven);
        Comission::where('sales',$id)->where('comission', $request->comission[3])->update($eight);
        Comission::where('sales',$id)->where('comission', $request->comission[4])->update($ten);

        }

        $name = $request->input('username');
        Log::addToLog("$name Data Updated Successfully");
        Toastr::success("$name DataUpdated Successfully",'Success');
        return redirect('admin/saleslist');
    }

    public function DownloadField(Request $request)
    {
        
        $data = FieldCustomer::select('visiting_date',
        'sales_id','sales_name','cc','cname','caddress','cperson','designation',
        'email','mobile','requirement','priority',
        'cfeedback','cfeedback2','source',
        'transaport','from','to','cost','pay_date',
        'method','trx_num')
        ->orderBy('id','DESC')->get()->toArray();
        $data= json_decode(json_encode($data), true);

        return Excel::download(new FieldExport($data), "FieldData.xlsx");  
    }

    public function DownloadUser(Request $request)
    {
        
        $data = User::select('parent_user','name',
        'representative','designation','email','mobile','operator','created_at','role','sales_person','status','api_enabled')
        ->orderBy('id','DESC')->get()->toArray();
        
        $data= json_decode(json_encode($data), true);

        return Excel::download(new UserExport($data), "UserData.xlsx");  
    }

    public function DownloadAttendence(Request $request)
    {
        $executive = $request->input('executive');
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
        
        $data = Attendence::select('created_at','user_name','check_in','check_out','flag','duration')
        ->where('user_id', 'LIKE', "%{$executive}%")
        ->whereBetween('created_at', [$from_date, $to_date])
        ->orderBy('id','DESC')->get()->toArray();
        
        $data= json_decode(json_encode($data), true);

        return Excel::download(new AttendenceExport($data), "AttendenceData.xlsx");  
    }

    public function AttendenceList(Request $request)
     {
        $executive = $request->input('executive');
        $flag = $request->input('flag');
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

        $attendence = Attendence::where('user_name', 'LIKE', "%{$executive}%")
                      ->where('flag','LIKE', "%{$flag}%")
                      ->whereBetween('created_at', [$from_date, $to_date])
                      ->orderBy('id','DESC')
                      ->paginate(10);

       
        $executive = User::whereIn('role',[4,5])->get();


        return view('admin.management.attendence.attendence_list',compact('attendence','executive'));
     }

     public function ApproveUser($id)
     {
        $name = User::whereId($id)->pluck('name')->first();
        User::whereId($id)->update(['approval' => 1]);
        Toastr::success("$name document verified !!!",'Success');
        Log::addToLog("$name document verified");
        return back();

     }

     public function ReworkDocument($id)
     {
        $data = ([
            'f_nid' => "f_nid.png",
            'b_nid' => "b_nid.png",
            'trade' => "trade.png",
            'approval' => 0,
        ]);
        User::whereId($id)->update($data);
        $name = User::whereId($id)->pluck('name')->first();
        Toastr::success("$name document sent for rework",'Success');
        Log::addToLog("$name document sent for rework");
        return back();

     }

     public function ReworkTrade($id)
     {
        $data = ([
            'trade' => "trade.png",
        ]);
        User::whereId($id)->update($data);
        $name = User::whereId($id)->pluck('name')->first();
        Toastr::success("$name trade lisence sent for rework",'Success');
        Log::addToLog("$name trade lisence sent for rework");
        return back();

     }

}


