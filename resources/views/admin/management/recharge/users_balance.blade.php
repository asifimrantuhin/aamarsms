@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active"> Users Balance</span>
        </nav>
    </div>
    <!-- <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Create Group</h4>
        <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
    </div> -->
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                   <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Balance Report</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10"> 
                                    <select name="userid" class="form-control mg-md-l-10">
                                        <option value="">All</option>
                                        @foreach($userlist as $user)
                                        <option value="{{$user->id}}"
                                        <?php
                                        if (isset($_REQUEST['userid'])) {
                                            if ($_REQUEST['userid'] == $user->id)
                                                echo "selected";
                                        }
                                        ?>
                                                >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                           value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                           value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                   <br/>
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>User Type</th>
                                        <th class="text-right">Total Recharges</th>
                                        <th class="text-right">Total Expense</th>
                                       
                                        <th class="text-right">Current Balance</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($usersbalance as $u)
                                    <tr>
                                       <td><a href="{{url('admin/userbalancehistory/'. $u->user_id)}}" class="text-dark">{{$u->username}}</a> ({{$u->email}}) </td>
                                        <td>
                                            @if($u->usertype == 2)
                                            Reseller
                                            @elseif ($u->usertype == 3)
                                            User
                                            @else
                                            Admin
                                            @endif
                                        </td>
                                        <td class="text-right">{{(isset($u->total_recharge) ? $u->total_recharge : '0')}}</td>
                                        <td class="text-right">{{(isset($u->total_expense) ? $u->total_expense : '0')}}</td>
                                        
                                        <td class="text-right">{{$u->currentBalance}}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $usersbalance->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}
                    </div>
                    <p></p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>

@endsection