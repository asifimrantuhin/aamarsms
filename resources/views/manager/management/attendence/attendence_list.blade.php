@extends('layouts.admin-master')
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Attendence</a>
            <span class="breadcrumb-item active">Attendence List</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
               

               <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                      
                    </div>
                </form>
            </div>
            <br/>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">Date</th>
                                        <th class="text-center align-middle text-nowrap">Check In</th>
                                        <th class="text-center align-middle text-nowrap">Check Out</th>
                                        <th class="text-center align-middle">Status</th>
                                        <th class="text-center align-middle">Duration</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($attendence) > 0)
                                    @foreach($attendence as $at)
                                    <tr>
                                        <td class="text-center align-middle text-nowrap">{{ date('d-m-y', strtotime($at->created_at)) }}</td>
                                        <td class="text-center align-middle text-nowrap">{{ date('g:i A', strtotime($at->check_in)) }}</td>
                                        <td class="text-center align-middle text-nowrap">
                                            @if($at->check_out == '')
                                            <strong class="tx-warning">Not Checked out</strong>
                                            @else
                                            {{ date('g:i A', strtotime($at->check_out)) }}
                                        @endif
                                    </td>
                                    <td class="text-center align-middle text-nowrap">@if($at->flag == 'On Time') <strong class="tx-dark">On Time</strong> @else <strong class="tx-danger">Late</strong> @endif</td>
                                    <td class="text-center align-middle text-nowrap">{{$at->duration}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="12">No Data Found !!!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $attendence->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>

       

        @endsection