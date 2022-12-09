@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active">My Recharge</span>
        </nav>
    </div>
   
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">My Recharge</h6>
                    <br/>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                    {{ csrf_field() }}
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                      
                      <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" name="date_from" class="form-control datepicker" placeholder="Date From">
                      </div>
                     
                       <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" name="date_to" class="form-control datepicker" placeholder="Date To">
                      </div> 
                      <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                    </div>
                </form>
            </div>
            <br/>
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        <th>Comment</th>
                                        <th>Transaction_Id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($rechargeHistory)> 0)
                                    @foreach ($rechargeHistory as $r)
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                        <td>{{$r->comments}}</td>
                                        <td><strong>{{$r->trx_id}}</strong></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5">No records found!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th colspan="1" class="text-right">Sub Total </th>
                                        
                                         <th> {{ $total}} </th>
                                        <th colspan="2">                        
                                        </th>
                                    </tr>
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