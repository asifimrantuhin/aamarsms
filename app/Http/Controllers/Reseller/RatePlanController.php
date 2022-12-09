<?php

namespace App\Http\Controllers\Reseller;

use App\Helpers\Log;
use App\Http\Controllers\Controller;
use App\Models\RatePlan;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        $rates = RatePlan::where('reseller_id',$users->id)->get();
        $reseller = User::where('parent_user',$users->id)->whereNotIn('id', [$users->id])->get();
        return view('reseller.management.rate.rateplan',compact('rates','reseller'));
    }

    public function myPlan() {
        $users= Auth::user();
        $rates = RatePlan::where('user_id',$users->id)->get();
        
        return view('reseller.management.rate.myplan',compact('rates'));
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
        $data = [];
        $exists = RatePlan::where('user_id',$request->user_id)->exists();

        if($exists == true){
            Toastr::warning("User Rate already Exists :)",'Warning');
        }
        else{
            if (isset($request->operator) && is_array($request->operator)) {
                $user_info = User::findorFail($request->user_id);
    
                foreach ($request->operator as $key => $value) {
                    # code...
                    $data[] = [
                        'user_id' => $request->user_id,
                        'reseller_id' => $user_info->parent_user,
                        'operator' => $value,
                        'non_mask' => $request->non_mask[$key],
                        'masking' => $request->masking[$key],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ];
                }
            }
           RatePlan::insert($data);
           $username = User::whereId($request->user_id)->pluck('name')->first();
           Toastr::success("User Rate added Successfully :)",'Success');
           Log::addToLog("$username rates added in system");
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RatePlan  $ratePlan
     * @return \Illuminate\Http\Response
     */
    public function show(RatePlan $ratePlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RatePlan  $ratePlan
     * @return \Illuminate\Http\Response
     */
    public function edit(RatePlan $ratePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RatePlan  $ratePlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RatePlan $ratePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RatePlan  $ratePlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RatePlan $ratePlan)
    {
        //
    }
}
