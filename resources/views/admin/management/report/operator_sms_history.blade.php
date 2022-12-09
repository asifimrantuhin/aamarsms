@extends('layouts.admin-master') 
@section('content')
<style>
    .br-section-wrapper {
        padding: 50px 30px;
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Vendor & Operator SMS Transactions  Report</a>
        </nav>
    </div>
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Vendor API SMS Count Report</h6>
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
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Vendor Name</th>
                                    <th>SMS Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($sms_transactions) > 0)
                                @php
                                $total = 0;
                                @endphp
                                @foreach ($sms_transactions as $sm)
                                @php
                                $total += $sm->vendor_sms_count;
                                @endphp
                                <tr>
                                    <td>{{ $sm->vendor }}</td>
                                    <td>{{ $sm->vendor_sms_count }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th>Total</th>
                                    <th>{{ $total }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="2">No data found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Operator SMS Count Report</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-10 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <!--{{ csrf_field() }}-->
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <select name="vendor_api"  class="form-control mg-md-l-10 mg-r-10">
                                    <option value="">Select Vendor</option>
                                    @foreach ($sms_transactions as $sm)
                                    <option value="{{ $sm->vendor }}" 
                                            @if(isset($_REQUEST['vendor_api']))
                                            @if($_REQUEST['vendor_api'] == $sm->vendor)
                                            selected
                                            @endif
                                            @endif
                                            >{{ $sm->vendor }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input style="min-width: 100px" type="text" name="date_from" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                           value="<?php if (isset($_REQUEST['date_from'])) echo $_REQUEST['date_from']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input style="min-width: 100px" type="text" name="date_to" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                           value="<?php if (isset($_REQUEST['date_to'])) echo $_REQUEST['date_to']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Operator Name</th>
                                    <th>SMS Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $config = config('operator.operator'); ?>
                                @if(count($operator_sms_count) > 0)
                                @php
                                $total_count = 0;
                                @endphp
                                @foreach ($operator_sms_count as $op)
                                @php
                                $total_count += $op->operator_sms_count;
                                @endphp
                                <tr>
                                    <td>{{$op->operator}}</td>
                                    <td>{{ $op->operator_sms_count }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th>Total</th>
                                    <th>{{ $total_count }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="2">No data found</td>
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
