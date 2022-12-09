@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Customer</a>
            <span class="breadcrumb-item active"> Recharge Request List</span>
        </nav>
    </div>
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <button href="" class="btn btn-info" data-toggle="modal" data-target="#modaldemo3">New Request <i class="fa fa-plus"></i></button>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                            <div class="input-group  mg-b-10 mg-r-10">
                            <select class="form-control" name="cus_id">
                                <option value=""> Select User</option>
                                @if(count($userlists) > 0)
                                @foreach($userlists as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            </div>    
                            <div class="input-group  mg-b-10 mg-r-10">
                                <select class="form-control" name="admin_sts">
                                    <option value=""> Admin Status</option>
                                    <option value="1"> Approved</option>
                                    <option value="2"> Pending</option>
                                </select>
                                </div>    
                            <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                           value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>" readonly>
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                           value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>" readonly>
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
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
                                        <th>Requested Date</th>
                                        <th>Recharge Date</th>
                                        <th>Username</th>
                                        <th>Mobile</th>
                                        <th>Recharge Requested</th>
                                        <th>Executive Received</th>
                                        <th>Received Date</th>
                                        <th>Admin Received</th>
                                        <th>Received Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($recharge_requests) > 0)
                                    @foreach($recharge_requests as $r)  
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>
                                        @if($r->approved_at == NULL)
                                        <span class="tx-danger"> Not Rechared Yet</span>
                                        @else
                                            {{ date('Y-m-d h:i:s', strtotime($r->approved_at))}}
                                        @endif
                                        </td>
                                        <td>{{$r->username}}</td>
                                        <td>{{$r->user_mobile}}</td>
                                        <td>{{$r->amount}}</td>
                                        <td>
                                            @if($r->sales_status == 1)
                                            <span class="badge badge-pill badge-success"> Received </span>
                                            @else
                                            <span class="badge badge-pill badge-warning"> Pending  </span>
                                            @endif
                                        </td>
                                        <td>{{ $r->sales_rcv_date ? date('d-m-y',strtotime($r->sales_rcv_date)) : ''}}</td>
                                        <td>
                                            @if($r->admin_status == 1)
                                            <span class="badge badge-pill badge-success"> Received </span>
                                            @else
                                            <span class="badge badge-pill badge-warning"> Pending  </span>
                                            @endif
                                        </td>
                                        <td>{{$r->admin_rcv_date ? date('d-m-y',strtotime($r->admin_rcv_date)) : ''}}</td>
                                        <td>

                                            <div class="dropdown show ">
                                                <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    @if($r->status == 1)
                                                        <span class="dropdown-item"> Recharged </span>
                                                    @else
                                                    <span class="dropdown-item"> Waiting for Approval </span>
                                                    @endif

                                                    @if ($r->sales_status == 2)
                                                    <a href="{{url('sales/edit_payment/'.$r->id)}}" class="dropdown-item">
                                                        <div><i class="fa fa-pencil">  Payment</i></div>
                                                    </a>
                                                  </a>
                                                    @endif

                                                        </div>
                                            </div>

                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No Request created yet!</td>
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
                    
                            </table>
                        </div>
                    </div>
                    <p>{{ $recharge_requests->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>


<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form-horizontal" method="POST" action="{{ url('sales/recharge_request') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Request To Admin</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          
            <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <select class="form-control" name="customer_id">
                    <option value=""> Select User</option>
                    @if(count($userlists) > 0)
                    @foreach($userlists as $c)
                    <option value="{{$c->id}},{{$c->mobile}}">{{$c->name}}, {{$c->mobile}}</option>
                    @endforeach
                    @endif
                </select>
            </div></br>


            <label class="form-control-label">Recharge Amount: <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <input type="number" class="form-control" name="amount" >
            </div></br>

            <label class="form-control-label">Received Amount? <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <select class="form-control" name="sales_status">
                    <option value="1"> Yes</option>
                    <option value="2"> No</option> 
                </select>
            </div>
        </div><!-- modal-body -->

        
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary tx-size-xs">Save</button>
          <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>
      </div>
        </form>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

@endsection