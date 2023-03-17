@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active"> Transaction History</span>
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
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">
                    Reseller/User Transaction History 
                    <button type="button" class="btn btn-info pd-y-6 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2 float-right" style="float:right" onclick="exportReport()">Export</button>
                </h6>
                    
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Comments</th>
                                        <th>Amount</th>
                                        <th>Current Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($rechargeHistory) > 0)
                                    @foreach ($rechargeHistory as $r)
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{$r->name}} ({{$r->email}})</td>
                                        <td>{{$r->comments}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td class="text-center" colspan="5">No transection yet!</td></tr>
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


<script type="text/javascript">
    function exportReport(){

    window.location.href='/reseller/balance_history_export';

}


    
</script>

@endsection