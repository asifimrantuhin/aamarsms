@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Report</a>
            <span class="breadcrumb-item active">Financial Report</span>
        </nav>
    </div>
   
    <div class="br-pagebody" style="margin-top:0 ;">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Financial Report History</h6>
                
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                    	<form method="GET" autocomplete="off">
		                    <!--{{ csrf_field() }}-->
		                    <div class="d-md-flex pd-y-20 pd-md-y-0">
		                      
		                      <div class="input-group mg-md-l-10">
		                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
		                        <input type="text" name="date_from" class="form-control datepicker" placeholder="Date From" value="<?php if(isset($_REQUEST['date_from'])) echo $_REQUEST['date_from']; ?>">
		                      </div>
		                     
		                       <div class="input-group mg-md-l-10">
		                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
		                        <input type="text" name="date_to" class="form-control datepicker" placeholder="Date To" value="<?php if(isset($_REQUEST['date_to'])) echo $_REQUEST['date_to']; ?>">
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
                                        <th class="text-center">Operator</th>
                                        <th class="text-center">M. Rate</th>
                                        <th class="text-center">NM. Rate</th>
                                        <th class="text-center">M. SMS Count</th>
                                        <th class="text-center">NM. SMS Count</th>
                                        <th class="text-center">Total Cost</th>
                                        <th class="text-center">Recharge Amount</th>

                                        <th class="text-center">Calc Balance</th>
                                        <th class="text-center">API Balance</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                	@php
	                                	$total_api_balance = 0;
	                                	$total_mask_sms = 0;
	                                	$total_nonmask_sms = 0;
	                                	$total_cost = 0;
	                                	$total_recharge = 0;
	                                	$total_calc_balance = 0;
	                                	$total_sell_amount = 0;
                                	@endphp
                                   
                                    @foreach ($vendorList as $operator)
                                    @php 
                                    $api_balance = 0;
                                    
                                    if($operator->unit == 'taka'){
                                        $api_balance = $operator->credits;
                                    }
                                	else{
                                		$api_balance = ($operator->masking_rate * (str_replace(',','',$operator->credits)));
                                	}


                                	$total_api_balance += $api_balance;
                                	$total_mask_sms += $operator->masksms;
                                	$total_nonmask_sms += $operator->nonmasksms;
                                	$total_cost += $operator->totalcost;
                                	$total_recharge += $operator->recharge_amount;
                                	$total_calc_balance += ($operator->recharge_amount -$operator->totalcost);
                                	$total_sell_amount += $operator->totalsell;
                                	@endphp

                                    <tr>
                                        <td>{{strtoupper($operator->operator)}}</td>
                                        <td class="text-center">{{number_format($operator->masking_rate, 2)}}</td>
                                        <td class="text-center">{{number_format($operator->nonmasking_rate, 2)}}</td>
                                        <td class="text-center">{{number_format($operator->masksms, 0)}}</td>
                                        <td class="text-center">{{number_format($operator->nonmasksms, 0)}}</td>
                                        <td class="text-right">{{number_format($operator->totalcost, 2)}}</td>
                                        <td class="text-right">{{number_format($operator->recharge_amount, 0)}}</td>
                                        <td class="text-right">{{number_format(($operator->recharge_amount -$operator->totalcost) , 0)}}</td>
                                        <td class="text-right">
                                        	{{number_format($api_balance)}}
                                        </td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <th colspan="3" class="text-right">Grand Total </th>
                                        <th class="text-center">{{number_format($total_mask_sms)}}</th>
                                        <th class="text-center">{{number_format($total_nonmask_sms)}}</th>
                                        <th class="text-right">{{number_format($total_cost,2)}}</th>
                                        <th class="text-right">{{number_format($total_recharge)}}</th>
                                        <th class="text-right">{{number_format($total_calc_balance)}}</th>
                                        <th class="text-right">{{number_format($total_api_balance)}}</th>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total Cost </th>
                                        <th class="text-right">{{number_format($total_cost,2)}}</th>
                                        <th colspan="3"></th>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total Sell/Revenue </th>
                                        <th class="text-right">{{number_format($total_sell_amount,2)}}</th>
                                        <th colspan="3"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5" class="text-right">Total Profit/Loss </th>
                                        <th class="text-right">{{number_format($total_sell_amount - $total_cost, 2)}}</th>
                                        <th colspan="3"></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                     
                    </div>
                    <p></p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>





  
</div>
@endsection