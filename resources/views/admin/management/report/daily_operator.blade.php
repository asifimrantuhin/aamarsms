@extends('layouts.admin-master') 
@section('content')


<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Daily Operator Balance</a>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User SMS Transactions Report</h6>
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
                                    <th class="text-center">Operator</th>
                                    <th class="text-center">Opening Balance</th>
                                    <th class="text-center">Closing Balance</th>
                                    <th class="text-center">Daily Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($balance) > 0)

                                @php
                                $open = 0;
                                $close = 0;
                                $daily = 0;
                                @endphp

                                @foreach ($balance as $b)
                                
                                @php
                                $open += (isset($b->open) ? $b->open : 0);
                                $close += (isset($b->close) ? $b->close : 0);
                                $daily += $b->open - $b->close;
                                @endphp

                                <tr>
                                    <td class="text-center">{{ date('d-m-y', strtotime($b->date)) }}</td>
                                    <td class="text-center">{{$b->operator}}</td>
                                    <td class="text-right">{{ $b->open }}</td>
                                    <td class="text-right">{{ $b->close }}</td>
                                    <td class="text-right">{{ $daily }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th class="text-center">Total</th>
                                    <th></th>
                                    <th class="text-right">{{ $open }}</th>
                                    <th class="text-right">{{ $close }}</th>
                                    <th class="text-right">{{ $daily }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="6">No Records Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <br/>
                    @if(count($balance) > 0)
                    {{ $balance->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}
                    @endif
                </div>
            </div>

        </div>
    </div>      
</div>


@endsection
