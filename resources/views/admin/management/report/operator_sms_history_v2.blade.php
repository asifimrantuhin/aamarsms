@extends('layouts.admin-master') 
@section('content')
<style>
    .br-section-wrapper {
        padding: 20px 30px;
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Vendor & Operator SMS Transactions  Report</a>
        </nav>
    </div>
    <div class="br-pagebody" style="margin-top:0 ;">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Vendor & Operator SMS Transactions Report</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">

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
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-bordered table-striped mg-b-0 ">
                            <thead>
                                <tr>
                                    <th>Vendor Name</th>
                                    <th class="text-center">Mask SMS</th>
                                    <th class="text-center">Nonmask SMS</th>
                                    <th class="text-center">Total SMS</th>
                                    <th class="text-center">Total Cost</th>
                                    <th class="text-center">Total Sell</th>
                                    <th class="text-center">Profit/Loss</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($vendorList) > 0)
                                @php
                                $mask = 0;
                                $nonmask = 0;
                                $totalsms = 0;
                                $totalcost = 0;
                                $totalsell = 0;
                                $totalprofitloss = 0;
                                @endphp
                                @foreach ($vendorList as $operator)
                                @php
                                $mask += $operator->masksms;
                                $nonmask += $operator->nonmasksms;
                                $totalsms += $operator->masksms + $operator->nonmasksms;
                                $totalcost += $operator->totalcost;
                                $totalsell += $operator->totalsell;
                                $totalprofitloss += $operator->totalsell - $operator->totalcost;
                                @endphp

                                <tr>
                                    <td>{{ strtoupper($operator->operator) }}</td>
                                    <td class="text-right">{{ ($operator->masksms ? $operator->masksms : 0) }}</td>
                                    <td class="text-right">{{ ($operator->nonmasksms ?$operator->nonmasksms : 0) }}</td>
                                    <td class="text-right">{{ (($operator->masksms + $operator->nonmasksms) ? ($operator->masksms + $operator->nonmasksms) : 0) }}</td>
                                    <td class="text-right">{{ ($operator->totalcost ? $operator->totalcost : 0) }}</td>
                                    <td class="text-right">{{ ($operator->totalsell? $operator->totalsell:0)  }}</td>
                                    <td class="text-right">{{ $operator->totalsell - $operator->totalcost }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th>Total</th>
                                    <th class="text-right">{{ $mask }}</th>
                                    <th class="text-right">{{ $nonmask }}</th>
                                    <th class="text-right">{{ $totalsms }}</th>
                                    <th class="text-right">{{ $totalcost }}</th>
                                    <th class="text-right">{{ $totalsell }}</th>
                                    <th class="text-right">{{ $totalprofitloss }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="7">No data found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 

            



        </div>
    </div>      
</div>


@endsection
