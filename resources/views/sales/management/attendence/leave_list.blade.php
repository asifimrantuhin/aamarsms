@extends('layouts.admin-master')
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Application</a>
            <span class="breadcrumb-item active">Application List</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
               

               <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
               <form method="GET" autocomplete="off">
                {{ csrf_field() }}
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                    <div class="input-group  mg-b-10 mg-r-10">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="<?=date('Y-m-01')?>" 
                                   value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                        </div>
                        <div class="input-group  mg-b-10 ">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="<?= date('Y-m-d') ?>"  
                                   value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                        </div>
                        <div class="input-group  mg-b-10 mg-r-10">
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
</br>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Appication ID</th>
                                        <th>Appication Date</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Days</th>
                                        <th>Type</th>
                                        <th>Message</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($list) > 0)
                                    @foreach($list as $l)
                                    <tr>
                                        <td>{{$l->id}}</td>
                                        <td>{{ date('d-m-y', strtotime($l->created_at)) }}</td>
                                        <td>{{ date('d-m-y', strtotime($l->from)) }}</td>
                                        <td>{{ date('d-m-y', strtotime($l->to)) }}</td>
                                        <td>{{ $l->days }}</td>
                                        <td>{{ $l->type }}</td>
                                        <td>{{ $l->message }}</td>
                                        <td>{{ $l->status }}</td>
                                       
                                    
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
                    <p>{{ $list->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>

       
        @endsection