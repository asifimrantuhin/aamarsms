@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Account</a>
            <span class="breadcrumb-item active">Account Summary</span>
        </nav>
    </div>
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Account Summary</h6>
                    <br/>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <select name="type" id="costReportSearch" class="form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose one (with searchbox)" tabindex="-1" aria-hidden="true">
                                        <option value="">Select Type</option>
                                        <option value="recharge" >Recharge</option>
                                        <option value="expense" >Expense</option>
                                    </select>

                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To">
                                </div>
                                <div class="input-group mg-b-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <div class="bd rounded table-responsive">

                        @if(isset($today_recharge))
                        <table class="table table-bordered  mg-b-0">
                            <thead>
                                <tr>
                                    <th class="wd-20p">#</th>
                                    <th class="wd-30p">Recharge</th>
                                    <th class="wd-30p">Expense</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">Today</th>
                                    <td>{{number_format($today_recharge,4)}}</td>
                                    <td>{{number_format($today_expense,4)}}</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">Last 7 Day</th>
                                    <td>{{number_format($week_recharge,4)}}</td>
                                    <td>{{number_format($week_expense,4)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Last 1 Month</th>
                                    <td>{{number_format($month_recharge,4)}}</td>
                                    <td>{{number_format($month_expense,4)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total </th>
                                    <td><strong>{{number_format($total_recharge,4)}}</strong></td>
                                    <td><strong>{{number_format($total_expense,4)}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        @elseif(count($account_data) > 0)
                        <table class="table table-bordered mg-b-0">
                            <thead>
                                <tr>
                                    <th class="wd-30p">Date</th>
                                    <th class="wd-35p">Amount</th>
                                    <th class="wd-35p">Transaction Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($account_data as $account_data)
                                <tr>
                                    <th scope="row">{{$account_data->created_date}}</th>
                                    <td>{{number_format($account_data->amount,4)}}</td>
                                    <td>{{$account_data->trx_id}}</td>
                                    
                                   
                                </tr>
                                @endforeach
                                <tr>
                                    <th scope="row">Total</th>
                                    <td><strong>{{$total[0]}}</strong></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        @endif


                    </div> 
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>

@endsection
