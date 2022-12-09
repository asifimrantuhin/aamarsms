@extends('layouts.admin-master')

@section('content')
<link href="{{ url('public/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Campaign</a>
            <span class="breadcrumb-item active">User Campaign List</span>
        </nav>
    </div>

    <div class="br-pagebody">
        @include('inc.alert')
        <div class="br-section-wrapper">
            <a href="{{url('admin/new-campaign')}}" class="pull-right btn btn-primary btn-md">
                <i class="fa fa-plus"></i> Add Campaign </a>
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Campaign List</h6>
            <br/>
            <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                        <div class="input-group  mg-b-10 mg-r-10">
                            <input type="text" class="form-control mg-md-l-10" name="campaign_name" placeholder="Campaign name" value="<?php if (isset($_REQUEST['campaign_name'])) echo $_REQUEST['campaign_name']; ?>">
                        </div>
                        <div class="input-group  mg-b-10 mg-r-10">  
                            <select name="camp_user"  class="form-control mg-md-l-10">
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}"
                                <?php
                                if (isset($_REQUEST['camp_user'])) {
                                    if ($_REQUEST['camp_user'] == $user->id)
                                        echo "selected";
                                }
                                ?>
                                >
                                {{$user->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
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
            <div class="row">
                <div class="col-sm-12">
            <div class="table-wrapper">
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered mg-b-0 table-small">
                        <thead>
                            <tr>
                                <th>User</th>
                                <!--<th>Created Time</th>-->
                                <th>Start Time</th>
                                <th>Campaign Name</th>
                                <th>Campaign Message</th>
                                <th>SenderID</th>
                                <th>Route</th>
                                <th>Total Contact</th>
                                <th>Sent</th>
                                <th>Fail</th>
                                <th>SMS length</th>
                                <th>Total SMS Count</th>
                                <th class="text-center">Campaign Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($campaigns) > 0)
                            @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{$campaign->username}}</td>
                                <!--<td>{{$campaign->created_at}}</td>-->
                                <td>{{$campaign->start_date}}</td>
                                <td>{{$campaign->campaign_name}}</td>
                                <td>{{$campaign->text_body}}</td>
                                <td>@if(empty($campaign->sender))
                                    Non-masking
                                    @else
                                    <strong class="tx-dark">{{$campaign->sender}}</strong>
                                    @endif
                                    @if($campaign->dynamic_sms == 1)
                                    <br/><span style="font-size: 7px; color:#000">(Dynamic SMS)</span>
                                    @endif
                                </td>
				<td>
                                    @php 
                                    $vendor = DB::table('sms_transactions')->where('campaign_id',$campaign->id)->pluck('vendor_api')->first();
                                    @endphp
                                    {{$vendor}}
                                </td>

                                <!--                                        @if($campaign->dynamic_sms == 1)
                                                                        <th>Yes</th>
                                                                        @else
                                                                        <th>No</th>
                                                                        @endif-->

                                <th>{{$campaign->total_sms}}</th>

                                <th><span class="text-success">{{$campaign->success}}</span></th>

                                <th><span class="text-danger">{{ ($campaign->total_sms - $campaign->success)}}</span></th>

                                <!-- SMS Length -->
                                @if($campaign->dynamic_sms == 1)
                                <td>{{$campaign->sms_count}}</td>
                                @else
                                <th>{{$campaign->sms_count}}</th>
                                @endif


                                <!-- Total SMS Count -->
                                @if($campaign->dynamic_sms == 1)
                                <th>
                                    @if($campaign->total_sms_count > 0)
                                    {{$campaign->total_sms_count}}
                                    @else
                                    {{$campaign->sms_count}}
                                    @endif

                                </th>
                                @else
                                <th>{{($campaign->sms_count * $campaign->success)}}</th>
                                @endif

                                        <!-- <th>{{$campaign->campaign_cost}}</th> -->
                                <!-- Campaign Cost -->
                                <th>{{number_format($campaign->price, 4)}}</th>
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
             <p>{{ $campaigns->appends(array_filter(Input::all()))->links( "pagination::bootstrap-4")}}</p>
            <!-- table-wrapper -->
        </div>
    </div>

    <!-- br-pagebody -->
    @include('inc.admin-footer')
    @include('admin.large-modal')
</div>

<!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
