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
                            <input type="text" class="form-control mg-md-l-10" name="campaign_name" placeholder="Campaign name">
                        </div>
                        <div class="input-group  mg-b-10 mg-r-10">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" readonly>
                        </div>
                        <div class="input-group  mg-b-10 ">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To" readonly>
                        </div>
                        <div class="input-group  mg-b-10 mg-r-10">
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-13">
            <div class="table-wrapper">
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered mg-b-0 table-small">
                        <thead>
                            <tr>
                                <th>Start Time</th>
                                <th>Campaign ID</th>
                                <th>Message</th>
                                <th>SenderID</th>
                                <th>Total Contact</th>
                                <th>Sent</th>
                                <th>ON PROCESS / FAIL</th>
                                <th>SMS length</th>
                                <th>Total SMS Count</th>
                                <th class="text-center">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($campaigns) > 0)
                       
                            @foreach($campaigns as $campaign)
                            <tr>
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
                            <th>
                            @php 
                            $suc =  App\Models\sms_transactions::where('campaign_id',$campaign->id)->count('mobile_number');
                            $fail = App\Models\sms_senders::where('campaign_id',$campaign->id)->count('number');
                            $succ = $suc + $fail;
                            @endphp
                            {{$succ}}
                            </th><th><span class="text-success">
                            @php 
                            $s = App\Models\sms_transactions::where('campaign_id',$campaign->id)->where('status',1)->count();
                            @endphp
                            {{$s}}
                            </span></th>
                            <th>
                                <span class="text-danger">{{ $fail = $succ-$s }}</span>
                            @if($fail>0)
                            <a href="{{ url('/user/resend_campaign/'.$campaign->id) }}"
                            <i class="fa fa-refresh"></i>
                            </a>
                            @endif
                            </th>

                            <th>{{$campaign->sms_count}}</th>
                            <td>{{$campaign->sms_count * $succ}}</td>
                            <td>{{number_format($campaign->campaign_cost, 4)}}</td>
                       
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
