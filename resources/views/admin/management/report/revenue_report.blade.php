@extends('layouts.admin-master') 
@section('content')


<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Revenue Report</a>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Revenue Report</h6>
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
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Income</th>
                                    <th class="text-center">Expense</th>
                                    <th class="text-center">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if(count($revenue_report) > 0)

                                @php
                                $totalincome = 0;
                                $totalexpense = 0;
                                $totalrevenue = 0
                                @endphp

                                @foreach ($revenue_report as $rr)

                                @php
                                $totalincome += $rr->income;
                                $totalexpense += $rr->expense;
                                $totalrevenue += ($rr->income - $rr->expense)
                                @endphp

                                <tr>
                                    <td class="text-center">{{ $rr->date }}</td>
                                    <td class="text-right">{{(isset($rr->income) ? $rr->income : 0)}}</td>
                                    <td class="text-right">{{ (isset($rr->expense) ? $rr->expense : 0) }}</td>
                                    <td class="text-right">{{ ($rr->income - $rr->expense) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th class="text-center">Total</th>
                                    <th class="text-right">{{ $totalincome }}</th>
                                    <th class="text-right">{{ $totalexpense }}</th>
                                    <th class="text-right">{{ $totalrevenue }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="4">No Records Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <br/>
                    @if(count($revenue_report) > 0)
                    {{ $revenue_report->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Current Month Revenue</h6>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($currentmonth as $tr)
                                 <tr>
                                    <td class="text-center tx-success">Total Income</td>
                                    <td class="text-right">{{ number_format($tr->income,2)}}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-danger">Total Expense</td>
                                    <td class="text-right">{{ number_format($tr->expense,2)}}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-warning">Total Revenue</td>
                                    <td class="text-right">{{number_format(($tr->income - $tr->expense),2)}}</td>
                                 </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="br-section-wrapper mg-t-30">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Current Year Revenue</h6>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($currentyear as $tr)
                                 <tr>
                                    <td class="text-center tx-success">Total Income</td>
                                    <td class="text-right">{{ number_format($tr->income,2)}}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-danger">Total Expense</td>
                                    <td class="text-right">{{ number_format($tr->expense,2)}}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-warning">Total Revenue</td>
                                    <td class="text-right">{{number_format(($tr->income - $tr->expense),2)}}</td>
                                 </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="br-section-wrapper mg-t-30">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Total Revenue</h6>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($total_revenue as $tr)
                                 <tr>
                                    <td class="text-center tx-success">Total Income</td>
                                    <td class="text-right">{{ number_format($tr->income,2) }}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-danger">Total Expense</td>
                                    <td class="text-right">{{ number_format($tr->expense,2) }}</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center tx-warning">Total Revenue</td>
                                    <td class="text-right">{{ number_format(($tr->income - $tr->expense),2)}}</td>
                                 </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>      
</div>


@endsection
