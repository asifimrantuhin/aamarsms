@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Cost </a>
            <span class="breadcrumb-item active">Cost Report</span>
        </nav>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker" placeholder="Date From" readonly>
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker" placeholder="Date To" readonly>
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button> &nbsp;&nbsp;
                                </div>
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
                                        <th>Total Number Count</th>
                                        <th>Total SMS Count</th>
                                        <th>Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total_number = 0 ; ?>
                                    <?php $total_sms = 0 ; ?>
                                    <?php $total_cost = 0 ; ?>
                                    @if(count($data) > 0)
                                    @foreach($data as $d)  
                                    <?php if( $d->total_number >=0) $total_number = ($total_number+$d->total_number) ; ?>
                                    <?php if( $d->total_sms >=0) $total_sms = ($total_sms+$d->total_sms) ; ?>
                                    <?php if( $d->total_cost >=0) $total_cost = ($total_cost+$d->total_cost) ; ?>
                                    <tr>
                                        <td>{{date('d-m-y',strtotime($d->date))}}</td>
                                        <td>{{$d->total_number}}</td>
                                        <td>{{$d->total_sms}}</td>
                                        <td>{{number_format($d->total_cost,4)}}</td>
                
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4">No Cost Estimated yet!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th colspan="1" class="text-right">Sub Total = </th>
                                        
                                         <th> {{ $total_number}} </th>
                                         <th> {{ $total_sms}} </th>
                                         <th> {{ number_format($total_cost,4)}} </th>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $data->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>

@endsection