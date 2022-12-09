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
                    
          
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Total Recharges</th>
                                        <th>Total Expense</th>
                                        <th>Current Balance</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($usersbalance as $u)
                                    <tr>
                                        <td><a href='#' class="btn">{{$u->username}}</a>({{$u->email}})</td>
                                        <td>{{$u->total_recharge}}</td>
                                        <td>{{($u->total_recharge - $u->currentBalance)}}</td>
                                        <td>{{$u->currentBalance}}</td>
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $usersbalance->links( "pagination::bootstrap-4")}}
                    </div>
                    <p></p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>

@endsection