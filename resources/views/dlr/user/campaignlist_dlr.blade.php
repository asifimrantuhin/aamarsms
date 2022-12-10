@extends('layouts.admin-master')
@section("page-style")
<style type="text/css">
	#campaignViewModal .modal-dialog {
		width: 1000px;
	}
</style>
@endsection
@section('content')
<link href="{{ url('public/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<style type="text/css">
	.view{
		
		font-size: 12px;
		font-weight: bold;
		text-transform: uppercase;
	}
	.view:hover{
		color: #054974;
		cursor: pointer;
	}
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">DLR</a>
            <span class="breadcrumb-item active">Campaignwise DLR</span>
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
            
            <div class="row">
                <div class="col-sm-12">
	            <div class="table-wrapper">
	                <div class="bd rounded table-responsive">
	                    <table class="table table-bordered mg-b-0 table-small">
	                        <thead>
	                            <tr>
	                                <th>Submit Time</th>
	                                <th>SenderID</th>
	                                <th>Total Contact</th>
	                                <th>Sent</th>
	                                <th>Failed</th>
	                                <th>SMS length</th>
	                                <th>Total SMS Count</th>
	                                <th class="text-center">Charged</th>
	                                <th class="text-center">Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        @if(count($campaigns) > 0)
	                       
	                            @foreach($campaigns as $campaign)
	                            <tr>
	                            
	                            <td>{{$campaign->start_date}}</td>
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
	                            </th>

	                            <th>{{$campaign->sms_count}}</th>
	                            <td>{{$campaign->sms_count * $succ}}</td>
	                            <td>{{number_format($campaign->campaign_cost, 4)}}</td>
	                       		<td>
	                       			<span class="view" onclick="campaignPopupView({{ $campaign->id }})">View</span>|<span class="export">Export</span>
	                       		</td>
	                            </tr>
	                            @endforeach
	                            @else
	                            <tr>
	                                <td colspan="9">No Log!</td>
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


    <!-- View Modal -->
	<div class="modal fade" id="campaignViewModal" tabindex="-1" aria-labelledby="campaignViewModal" aria-hidden="true">
	  <div class="modal-dialog modal-lg" style="width: 1200px;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="campaignViewModal">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <table class="table table-striped table-bordered campaignDatatables" style="width:100%">
		        <thead>
		            <tr>
		                <th>Mobile Number</th>
		                <th>Sent Time</th>
		                <th>Operator</th>
		                <th>Charged</th>
		                <th>SMS Text</th>
		            </tr>
		        </thead>
		        <tbody>
	        	</tbody>
        	</table>
	      </div>
	      <!-- <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div> -->
	    </div>
	  </div>
	</div>

</div>




@endsection



@section("page-script")

<script type="text/javascript">

	function campaignPopupView(campaign_id) {
		$("#campaignViewModal").modal("show");
		$('.campaignDatatables').DataTable().destroy();

		if(campaign_id != '') {
			// $.ajax({
			// 	url: "/user/dlr/campaignwise/"+campaign_id,
			// 	type: "GET",
			// 	success: function(resp) {
			// 		// consol.log(resp);
			// 		//$("#campaignViewModal .modal-body").html(resp);
			// 	}
			// })

			var table = $('.campaignDatatables').DataTable({
		        processing: true,
		        serverSide: true,
		        lengthMenu: [[1, 10, 25, 50, 100, -1], [1, 10, 25, 50, 100, 'ALL']],
		        ajax: "/user/dlr/campaignwise/"+campaign_id,
		        columns: [
		            {data: 'mobile_number', name: 'mobile_number'},
		            {data: 'created_at', name: 'created_at'},
		            {data: 'operator', name: 'operator'},
		            {data: 'price', name: 'price'},
		            {data: 'text_body', name: 'text_body'},
		            // {data: 'action', name: 'action', orderable: false, searchable: false},
		        ]
		    });

		}


	}

</script>

@endsection