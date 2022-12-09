@extends('layouts.admin-master')

<style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    </style>

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
            {{-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14">User Campaign List</h6> --}}
            <br/>
            
            <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-5">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->

                    
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                        <div class="input-group  mg-r-10">
                            <input type="text" class="form-control mg-md-l-10" name="campaign_name" placeholder="Campaign name">
                        </div>
                        <div class="input-group mg-r-10">  
                            <select name="camp_user" class="selectpicker" data-live-search="true">
                                <option value="">Select User</option>
                                @foreach($customers as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="input-group  mg-r-10">
                            <span class="input-group-addon"><i class="fa fa-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="<?=Date('j-n-Y')?>" 
                                   value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="<?=Date('j-n-Y')?>"  
                                   value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                        </div>
                        <div class="input-group mg-r-10">
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <br/>

            <div style="overflow-x:auto;">
                <table>
                  <tr>
                    <th>User</th>
                    <th class="text-nowrap">Start Time</th>
                    <th>Campaign ID</th>
                    <th>Message</th>
                    <th>SenderID</th>
                    <th>Route</th>
                    <th>Contacts</th>
                    <th>Sent</th>
                    <th>FAILED</th>
                    <th>Length</th>
                    <th>SMS Count</th>
                    <th>Cost</th>
                    <th class="tx-danger">Failed</th>
                    <th class="tx-success">Success</th>
                  </tr>
                
                  <tr>
                    @if(count($campaigns) > 0)
                    @foreach($campaigns as $campaign)
                            <tr>
                                <td>
                                    @php
                                    $check = DB::table('campaigns')->where('id',$campaign->id)->pluck('user_id')->first();
                                    $user = DB::table('users')->where('id',$check)->pluck('name')->first();
                                    @endphp
                                    {{$user}}
                                </td>
                            <td>{{date('d-m-y h:i a', strtotime($campaign->start_date))}}</td>
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
                            $vendor = App\Models\sms_transactions::where('campaign_id',$campaign->id)->pluck('vendor_api')->first();
                            @endphp
                            {{$vendor}}
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
                            @if($fail != 0)
                            <a href="{{ url('/admin/resend_campaign/'.$campaign->id) }}"
                            <i class="fa fa-refresh"></i>
                            </a>
                            @endif
                            </th>

                            <th>{{$campaign->sms_count}}</th>
                            <td>{{$campaign->sms_count * $succ}}</td>
                        
                        <td>
                        @php 
                        $price = App\Models\Campaign::where('id',$campaign->id)->pluck('campaign_cost')->first();
                        @endphp
                        {{number_format($price, 4)}}
                        </td>
                        <td>
                            <div class="dropdown show ">
                                <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  
                                <a class="dropdown-item" href="{{ url('/admin/download/xls/'.$campaign->id) }}">
                                        <div><i class="fa fa-download"> </i>XLS Download</div></a>
                                <a class="dropdown-item" href="{{ url('/admin/download/csv/'.$campaign->id) }}">
                                        <div><i class="fa fa-download"></i> CSV Download</div></a>
                                       
                                </div>
                              </div> 
                        </td>

                        <td>
                            <div class="dropdown show ">
                                <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  
                                <a class="dropdown-item" href="{{ url('/admin/successdownload/xls/'.$campaign->id) }}">
                                        <div><i class="fa fa-download"></i> XLS Download</div></a>
                                <a class="dropdown-item" href="{{ url('/admin/successdownload/csv/'.$campaign->id) }}">
                                        <div><i class="fa fa-download"></i> CSV Download</div></a>
                                </div>
                              </div> 
                        </td>
                             

                               
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">No campaign create yet!</td>
                            </tr>
                            @endif

                          

                  </tr>
                </table>

                <p>{{ $campaigns->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
              </div>



           
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
