@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active">User Recharge</span>
        </nav>
    </div>
   
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <a href="" class="pull-right btn btn-primary btn-md" data-toggle="modal" data-target="#modaldemo3">Add Balance <i class="fa fa-plus"></i></a>
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Recharge</h6>
                    <br/>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                    {{ csrf_field() }}
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                      <select id="user" name="user"  class="form-control mg-md-l-10">
                          <option value="">Select User</option>
                          @foreach($customers as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                      </select>

                      <select id="sales_id"  name="sales_id"  class="form-control mg-md-l-10">
                        <option value="">Select Executive</option>
                        @foreach($executives as $executive)
                        <option value="{{$executive->id}}">{{$executive->name}}</option>
                        @endforeach
                    </select>
                      
                      <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" id="date_from" name="date_from" class="form-control datepicker" placeholder="Date From" value="<?php if(isset($_REQUEST['date_from'])) echo $_REQUEST['date_from']; ?>">
                      </div>
                     
                       <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" id="date_to" name="date_to" class="form-control datepicker" placeholder="Date To" value="<?php if(isset($_REQUEST['date_to'])) echo $_REQUEST['date_to']; ?>">
                      </div> 
                      <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                      <button type="button" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2" onclick="exportReport()">Export</button>
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
                                        <th>Reseller</th>
                                        <th>Executive</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        <th>Comments</th>
                                        <th>Transaction ID</th>
                                        <th>Status</th>
                                        <th>Add Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($rechargeHistory)> 0)
                                    @foreach ($rechargeHistory as $r)
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->user->name}}</td>
                                        <td>
                                        @php
                                        $reseller = DB::table('users')->where('id',$r->user->parent_user)->pluck('name')->first();  
                                        @endphp
                                        {{$reseller}}
                                        </td>
                                        <td>  @php
                                            $sales = DB::table('users')->where('id',$r->sales_id)->pluck('name')->first();  
                                          @endphp
                                          {{$sales}}
                                        </td>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                        <td>{{$r->comments}}</td>
                                        <td><strong>{{$r->trx_id}}</strong></td>
                                        <td>
                                            @if($r->status == 0)
                                            <span class="badge badge-warning"> Pending  </span>
                                            @else
                                            <span class="badge badge-success"> Success </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#recharge" data-id="{{ $r->user->id }}" class="btn btn-outline-info btn-icon mg-r-5">
                                                <div><i class="fa fa-plus"></i></div>
                                                </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No records found!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th colspan="4" class="text-right">Sub Total </th>
                                        
                                         <th> {{ $total}} </th>
                                        <th colspan="2">                        
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $rechargeHistory->links( "pagination::bootstrap-4")}}
                    </div>
                    <p></p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>



<!-- MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Recharge User</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            <form class="form-horizontal" method="POST" action="{{ url('reseller/recharge/create') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">User: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select class="form-control select2" name="customer_id" required>
                            <option value=""> Select User</option>
                            @if(count($customers) > 0)
                            @foreach($customers as $c)
                            <option value="{{$c->id}}">{{$c->name}} ({{$c->email}})</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>    
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Amount: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Note: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea type="text" name="note" class="form-control" placeholder="Enter a note" row="2" required ></textarea>
                    </div>
                </div>


                        


                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-success">Recharge</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>



        </div><!-- modal-body -->
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


  <div id="recharge" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Recharge User</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body pd-25 wd-300">
            <form class="form-horizontal" method="POST" action="{{ url('reseller/recharge/create') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">User name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="user_name"  value="" readonly="">
                      <input type="hidden" name="customer_id" id="user_id" value="">
                    </div>
                </div>
            </div>

            <div class="row mg-t-20">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                      <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                    </div>
                </div>
            </div>
            <div class="row mg-t-20">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Note: <span class="tx-danger">*</span></label>
                      <textarea type="text" rows="4" rows="3" name="note" class="form-control" placeholder="Enter a note" required ></textarea>
                    </div>
                </div>
            </div>


        </div>


        <div class="modal-footer">
          <button type="submit" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Recharge</button>
          <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
        </div>
    </form>
      </div>
    </div><!-- modal-dialog -->
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#recharge').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'get',
            url: '{{ url('/reseller/viewuser/') }}/'+ id,
            success : function(user){
                $('#user_name').val(user[0].name);
                $('#user_id').val(user[0].id);
            }
        });
     });
    });


function exportReport(){

    var user = document.getElementById("user").value;
    var sales_id = document.getElementById("sales_id").value;
    var date_from = document.getElementById("date_from").value;
    var date_to = document.getElementById("date_to").value;

    window.location.href='/reseller/user_recharge_history_export?user='+user+'&sales_id='+sales_id+'&date_from='+date_from+'&date_to='+date_to;

}
    
</script>
@endsection