<?php

namespace App\Http\Controllers\Reseller;

use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\Mask;
use App\Models\RatePlan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users= Auth::user();
        $userlist = User::where('parent_user',$users->id)->orderBy('id','DESC')->paginate(20);
        $masks = Mask::orderBy('id','DESC')->get();
  
        return view('reseller/management/user/index',compact('userlist','users','masks'));
    }

    public function Status($id, $status) {
        User::whereId($id)->update(['status' => $status]);
        Toastr::success('User Status Updated successfully :)','Success');
        return back();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
      
       if (!empty($request->input('mask'))) {
            $mask = implode(",", $request->input('mask'));
        } else {
            $mask = '';
        }

    $users= Auth::user();
    $rules = array(
        'username' => 'required',
        'usertype' => 'required',
        'email' => 'required|string|max:255|unique:users',
        'password' => 'required|min:6|max:30',
        'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11|unique:users',
        
        'status' => 'required'
    );

    $error = Validator::make($request->all(), $rules);

    if($error->fails())
    {
        Toastr::error('Duplicate Entry','Error');
        return back();
    }

    $form_data = array(
        'parent_user'        =>  ($request->input('parent_user') != '' ? $request->input('parent_user') : $users->id),
        
        'name'        =>  $request->input('username'),
        'domain'        =>  $request->input('domain'),
        'role'        =>  $request->input('usertype'),
        'mask'        =>  $mask,
        'email'        =>  $request->input('email'),
        'mobile'        =>  $request->input('mobile'),
        'password'        =>  Hash::make($request->input('password')),
        'operator'        =>  $request->input('dedicated_operator'),
        'created_by'        =>  $users->id,
        'status'        =>  $request->input('status'),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function viewuser($id) {
        $user = User::where('id', $id)->get();
        return json_decode($user);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Auth::user();
        $customers = User::whereId($id)->get();
        $rates = RatePlan::where('user_id',$id)->get();


        $maskslist = Mask::where('status', 1)->orderBy('id','DESC')->get();
        $usermask = explode(',', $customers[0]->mask);

        return view('reseller.management.user.edit-user',compact('customers','users','maskslist','usermask','rates'));
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

        if ($request->input('mask')) {
            $masking = implode(",", $request->input('mask'));
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
            'operator' => $request->input('route'),
            'mask' => (isset($masking) ? $masking : ''),
        );
        $user = new User();
        $user->where('id', $id)->update($data);

       $gp = array('nonmasking_price' => $request->nonmasking_price[0],'masking_price' => $request->masking_price[0]);
       $rb = array('nonmasking_price' => $request->nonmasking_price[1],'masking_price' => $request->masking_price[1]);
       $bl = array('nonmasking_price' => $request->nonmasking_price[2],'masking_price' => $request->masking_price[2]);
       $tl = array('nonmasking_price' => $request->nonmasking_price[3],'masking_price' => $request->masking_price[3]);
       $al = array('nonmasking_price' => $request->nonmasking_price[4],'masking_price' => $request->masking_price[4]);

       RatePlan::where('user_id', $id)->where('operator','GP')->update($gp);
       RatePlan::where('user_id', $id)->where('operator','RB')->update($rb);
       RatePlan::where('user_id', $id)->where('operator','BL')->update($bl);
       RatePlan::where('user_id', $id)->where('operator','TL')->update($tl);
       RatePlan::where('user_id', $id)->where('operator','AL')->update($al);

    Toastr::success("User Data Updated successfully :)",'Success');

    return redirect('reseller/userlist')->with('success', 'User Updated Successfully');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $username = User::whereId($id)->pluck('name')->first();
        $parent = Auth::user()->name;
        User::find($id)->delete();
        RatePlan::where('user_id',$id)->delete();
        Toastr::success('User deleted Successfully :)','Success');
        Log::addToLog("$username has been removed from the system by $parent");
        return redirect('reseller/userlist');
    }
}
