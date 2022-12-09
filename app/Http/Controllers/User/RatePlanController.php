<?php

namespace App\Http\Controllers\User;

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
       //
    }

    public function myPlan() {
        $rates = RatePlan::where('user_id',Auth::user()->id)->get();

        return view('user.management.rate.myplan',compact('rates'));
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
       //
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
