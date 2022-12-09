@extends('layouts.admin-master') @section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Campaign</a>
            <span class="breadcrumb-item active">Campaign Details</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                <div class="br-section-wrapper">
                    <a href="{{url('admin/new-campaign')}}" class="pull-right btn btn-primary btn-md">
                    <i class="fa fa-plus"></i> Add Campaign </a>
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Campaign History</h6>
                    <br/>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                              <input type="text" class="form-control mg-md-l-10" name="campaign_name" placeholder="Campaign name">
                              <select name="camp_user"  class="form-control mg-md-l-10">
                                  <option value="">Select User</option>
                                  @foreach($users as $user)
                                  <option value="{{$user->id}}">{{$user->name}}</option>
                                  @endforeach
                              </select>
                              <select name="campaign_status"  class="form-control mg-md-l-10">
                                  <option value="">Select Status</option>
                                  <option value="1">Success</option>
                                  <option value="4">Pending</option>
                                  <option value="2">Sending</option>
                                  <option value="3">Paused</option>
                              </select>
                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Campaign Name</th>
                                        <th>Campaign Message</th>
                                        <th>Schedule Time</th>
                                        <th>Cost</th>
                                        <th>Total Contacts</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($campaigns) > 0)
                                    @foreach($campaigns as $campaign)  
                                  
                                    <tr>
                                        <td>{{$campaign->user_name}}</td>
                                        <td>{{$campaign->campaign_name}}</td>
                                        <td>{{$campaign->text_body}}</td>
                                        <td>{{$campaign->start_date}}</td>
                                        <td>{{number_format($campaign->campaign_cost, 4)}}</td>
                                        <td>{{$campaign->contacts_count}}</td>
                                        <td>
                                            @if($campaign->status == 1 )
                                             <span class="badge badge-success">Success </span>
                                            @elseif($campaign->status == 2 )
                                            <span class="badge badge-warning">Sending </span>
                                            @elseif($campaign->status == 3 )
                                            <span class="badge badge-danger">Paused </span>
                                            @else
                                            <span class="badge badge-info">Pending </span>
                                            @endif  
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No campaign create yet!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $campaigns->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
    </div><!-- page body -->

</div>

@endsection