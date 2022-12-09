@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active"> Balance History</span>
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
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Balance History</h6>
                    
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Comments</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($rechargeHistory) > 0)
                                    @foreach ($rechargeHistory as $r)
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{$r->comments}}</td>
                                        <td>{{$r->amount}}</td>
                                        <td>{{$r->balance}}</td>
                                        
                                        <td>
                                            @if($r->status == 0)
                                                Pending
                                            @else
                                                Success
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td class="text-center" colspan="6">No transection yet!</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $rechargeHistory->links( "pagination::bootstrap-4")}}
                    </div>
                    <p></p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>

@endsection