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
            <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
               
                   
                      
                       <p>Last 7 Days Data</p>
                   
     
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-12">
            <div class="table-wrapper">
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered mg-b-0 table-small">
                        <thead>
                            <tr>
                                <th>Start Time</th>
                                <th>User Name</th>
                                <th>Campaign Name</th>
                                <th class="text-center">Campaign Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($campaigns) > 0)
                       
                            @foreach($campaigns as $campaign)
                            <tr>
                            <td>{{$campaign->created_at}}</td>
                            <td>{{$campaign->name}}</td>
                            <td>{{$campaign->comments}}</td>
                            <td>{{number_format($campaign->amount, 4)}}</td>
                       
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">No campaign create yet!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
            </div>
             <p>{{ $campaigns->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
           
        </div>
    </div>
</div>

@endsection
