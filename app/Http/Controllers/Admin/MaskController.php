<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\Mask;
use App\Models\NonMask;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
class MaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mask_name = $request->get('mask_name');
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

            
        $masks = Mask::join('users', 'users.id', '=', 'masks.reseller_id')
            ->select('masks.*', 'users.name as user_name')
            ->where('masks.name', 'LIKE', "%{$mask_name}%")
            ->whereBetween('masks.created_at', [$from_date, $to_date])
            ->orderBy('masks.id','DESC')
            ->paginate(20);

        $mask = Mask::latest()->get();
        return view('admin.management.mask.index',compact('masks','mask'));
    }


    public function manage_nonmask(Request $request)
    {
        $mask_name = $request->get('mask_name');
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

            
        $masks = DB::table('nonmasking')
            ->join('users', 'users.id', '=', 'nonmasking.reseller_id')
            ->select('nonmasking.*', 'users.name as user_name')
            ->where('nonmasking.name', 'LIKE', "%{$mask_name}%")
            ->whereBetween('nonmasking.created_at', [$from_date, $to_date])
            ->orderBy('nonmasking.id','DESC')
            ->paginate(20);

        $mask =DB::table('nonmasking')->latest()->get();
        $operator =DB::table('api_status')->get();
        return view('admin/management/mask/manage_nonmask',compact('masks','mask', 'operator'));
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
        $auth_user = Auth::user()->id;
        $rules = array(
            'name'    =>  'required|unique:masks,name',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            Toastr::error('Mask is already Exists','Error');
            return back();
        }
        $form_data = array(
            'name'        =>  $request->name,
            'reseller_id'        =>  $auth_user,
            'status' => 1
        );
        Mask::create($form_data);
        Log::addToLog("$request->name added in system");
        Toastr::success("$request->name added successfully :)",'Success');
        return back();
    }

    public function nonmask_store(Request $request)
    {
        $auth_user = Auth::user()->id;
        $rules = array(
            'name'    =>  'required|unique:nonmasking,name',
            'operator_name' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            Toastr::error('SenderID is already Exists','Error');
            return back();
        }
        $form_data = array(
            'name'        =>  $request->name,
            'operator_name'        =>  $request->operator_name,
            'reseller_id'        =>  $auth_user,
            'status' => 1
        );
        NonMask::create($form_data);
        Log::addToLog("$request->name added in system");
        Toastr::success("$request->name added successfully :)",'Success');
        return back();
    }


    public function Status($id,$status)
    {
        Mask::whereId($id)->update(['status' => $status]);
        $mask_name = Mask::whereId($id)->pluck('name')->first();
        Log::addToLog("$mask_name status changed");
        Toastr::success("$mask_name status changed :)",'Success');
       return back();
    }

    public function nonmask_status($id,$status)
    {
        NonMask::whereId($id)->update(['status' => $status]);
        $mask_name = NonMask::whereId($id)->pluck('name')->first();
        Log::addToLog("$mask_name status changed");
        Toastr::success("$mask_name status changed :)",'Success');
       return back();
    }


    

    public function view($id)
    {
        $user = Mask::whereId($id)->get();
        return json_decode($user);
    }

    public function nonmask_view($id)
    {
        $user = NonMask::whereId($id)->get();
        return json_decode($user);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mask  $mask
     * @return \Illuminate\Http\Response
     */
    public function show(Mask $mask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mask  $mask
     * @return \Illuminate\Http\Response
     */
    public function edit(Mask $mask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mask  $mask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mask $mask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mask  $mask
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mask = Mask::whereId($id)->first();
        $mask->delete();

        Toastr::success("$mask->name Deleted from System",'Success');
        Log::addToLog("$mask->name Deleted from System");
        return back();
    }
    public function nonmask_destroy($id)
    {
        $mask = NonMask::whereId($id)->first();
        $mask->delete();

        Toastr::success("$mask->name Deleted from System",'Success');
        Log::addToLog("$mask->name Deleted from System");
        return back();
    }

}
