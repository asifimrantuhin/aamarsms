@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">SMS Transactions Report</a>
            <span class="breadcrumb-item active">SMS Report</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">SMS Transactions Report</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                               
                                
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" id="from_date"  name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                           value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" id="to_date"  name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                           value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                    <button type="button" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2" onclick="exportReport()">Export</button>
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
                                    <th class="text-center">GP SMS COUNT</th>
                                    <th class="text-center">BL SMS COUNT</th>
                                    <th class="text-center">Robi SMS COUNT</th>
                                    <th class="text-center">Teletalk SMS COUNT</th>
                                    <th class="text-center">Total SMS COUNT</th>
                                    <th class="text-center">Total PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($sms_report) > 0)

                                @php
                                $gp = 0;
                                $bl = 0;
                                $robi = 0;
                                $teletalk = 0;
                                $total = 0;
                                $total_price = 0;
                                @endphp

                                @foreach ($sms_report as $sm)
                                @php
                                $gp += $sm->gp;
                                $bl += $sm->bl;
                                $robi += $sm->robi + $sm->airtel;
                                $teletalk += $sm->teletalk;
                                $total += $sm->total_sms;
                                $total_price += $sm->total_price;
                                @endphp

                                <tr>
                                    <td class="text-center">{{ date('d-m-y', strtotime($sm->date)) }}</td>
                                    <td class="text-right">{{ ($sm->gp ? $sm->gp : 0) }}</td>
                                    <td class="text-right">{{ ($sm->bl ? $sm->bl : 0) }}</td>
                                    <td class="text-right">{{ (($sm->robi + $sm->airtel) ? ($sm->robi + $sm->airtel) : 0) }}</td>
                                    <td class="text-right">{{ ($sm->teletalk ? $sm->teletalk : 0)}}</td>
                                    <td class="text-right">{{ $sm->total_sms }}</td>
                                    <td class="text-right">{{ number_format($sm->total_price,2) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th class="text-center">Total</th>
                                    <th class="text-right">{{ $gp }}</th>
                                    <th class="text-right">{{ $bl }}</th>
                                    <th class="text-right">{{ $robi}}</th>
                                    <th class="text-right">{{ $teletalk }}</th>
                                    <th class="text-right">{{ $total }}</th>
                                    <th class="text-right">{{ number_format($total_price,2) }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="8">No Records Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <br/>
                    @if(count($sms_report) > 0)
                    {{ $sms_report->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}
                    @endif
                </div>
            </div>

        </div>
    </div>      
</div>

<script type="text/javascript">

    function exportReport(){

        var from_date = document.getElementById("from_date").value;
        var to_date = document.getElementById("to_date").value;

        window.location.href='/admin/sms_transactions_export?from_date='+from_date+'&to_date='+to_date;

    }


</script>
@endsection
