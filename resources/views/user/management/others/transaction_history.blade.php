@extends('layouts.admin-master')

@section('content')

<link href="{{ url('public/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Campaign</a>
            <span class="breadcrumb-item active">Campaign List</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->
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
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-12">
            <div class="table-wrapper">
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered mg-b-0 table-small">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Details</th>
                                <th>Amount</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($cost) > 0)
                       
                            @foreach($cost as $c)
                            <tr>
                            <td>{{$c->created_at}}</td>
                            <td>{{$c->comments}}</td>
                            <td>{{number_format($c->amount,4)}}</td>
                            <td>{{number_format($c->balance,4)}}</td>
                       
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">No Cost Eastimated yet!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
            </div>
             <p>{{ $cost->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
           
        </div>
    </div>
</div>

@endsection
