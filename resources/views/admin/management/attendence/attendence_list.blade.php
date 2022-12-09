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
               <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">Download Data <i class="fa fa-download"></i></a>
 
               <form method="POST" autocomplete="off">
                    @csrf
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                    <div class="input-group  mg-r-10">
                    <select name="executive"  class="form-control mg-md-l-10">
                    <option value="">Select Executive</option>
                        @foreach($executive as $e)
                    <option value="{{$e->name}}">{{$e->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="input-group  mg-r-10">
                    <select name="flag" class="form-control mg-md-l-10">
                        <option value="">Status</option>
                        <option value="On Time">On Time</option>
                        <option value="Late">Late</option>
                    </select>
                    </div>

                    <div class="input-group  mg-r-10">
                            <span class="input-group-addon"><i class="fa fa-calendar-days tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                   value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-days tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                   value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                        </div>
                        <div class="input-group mg-r-10">
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search <i class="fa fa-search"></i></button>
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
                                        <th class="text-center align-middle">Date</th>
                                        <th class="text-center align-middle">Staff</th>
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
                                        <td class="text-center align-middle text-nowrap">{{ date('d-m-y', strtotime($at->check_in)) }}</td>
                                        <td class="text-center align-middle text-nowrap">{{ $at->user_name }}</td>
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
                                    <tr><td colspan="12">No Data Found !!!</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $attendence->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>


        <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Time Selection</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            <form class="form-horizontal" method="GET" action="{{ url('/admin/download_attendence/xlsx') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <label class="col-sm-4 form-control-label">Staff</label>
                    <select class="col-sm-8 form-control" name="executive">
                        <option value="">Select Staff</option>
                        @foreach($executive as $e)
                    <option value="{{$e->id}}">{{$e->name}}</option>
                        @endforeach
                    </select>
                   
                </div>
                       
                        
                <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">From:</label>
                  <input type="date" name="from_date" class="col-sm-8" />
                </div>

                <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">From:</label>
                  <input type="date" name="to_date" class="col-sm-8" />
                </div>


                <div class="form-layout-footer mg-t-30">
                <button type="submit" class="btn btn-info">Download <i class="fa fa-download"></i></button>
                
                </div>
                    </form>



        </div><!-- modal-body -->
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

       

        @endsection