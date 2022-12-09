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
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                        <span>{{ $message }}</span>
                    </div>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-bordered alert-danger" role="alert">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-close alert-icon tx-24"></i>
                        <span>{{ $message }}</span>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="br-section-wrapper">
                        <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                            <form method="GET" autocomplete="off">
                                <div class="d-md-flex pd-y-20 pd-md-y-0">
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <select class="form-control" name="cus_id">
                                            <option value=""> Select User</option>
                                            @if (count($userlists) > 0)
                                                @foreach ($userlists as $c)
                                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <select class="form-control" name="status">
                                            <option value=""> Select Status</option>
                                            <option value="1"> Recharged</option>
                                            <option value="2"> Pending</option>
                                        </select>
                                    </div>

                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <select class="form-control" name="admin_sts">
                                            <option value=""> Admin Status</option>
                                            <option value="1"> Received</option>
                                            <option value="2"> Pending</option>
                                        </select>
                                    </div>
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <select class="form-control" name="sales_sts">
                                            <option value=""> Executive Status</option>
                                            <option value="1"> Received</option>
                                            <option value="2"> Pending</option>
                                        </select>
                                    </div>
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <span class="input-group-addon"><i
                                                class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="from_date"
                                            class="form-control datepicker camp_datepicker" placeholder="Date From"
                                            value="<?php if (isset($_REQUEST['from_date'])) {
                                                echo $_REQUEST['from_date'];
                                            } ?>" readonly>
                                    </div>
                                    <div class="input-group  mg-b-10 ">
                                        <span class="input-group-addon"><i
                                                class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="to_date" class="form-control datepicker camp_datepicker"
                                            placeholder="Date To" value="<?php if (isset($_REQUEST['to_date'])) {
                                                echo $_REQUEST['to_date'];
                                            } ?>" readonly>
                                    </div>
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <button type="submit"
                                            class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br />
                        <div class="table-wrapper">
                            <div class="bd rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                        <tr>
                                            <th>Requested Date</th>
                                            <th>Recharged Date</th>
                                            <th>Username</th>
                                            <th>Executive</th>
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
                                        @if (count($recharge_requests) > 0)
                                            @foreach ($recharge_requests as $r)
                                            <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                                <tr>
                                                    <td>{{ date('d-m-y h:i:s', strtotime($r->created_at))}}</td>
                                                    <td>
                                                        @if($r->approved_at != NULL)
                                                        {{ date('d-m-y h:i:s', strtotime($r->approved_at))}}
                                                    @else
                                                    <span class="tx-danger">Not yet Recharged</span>
                                                    @endif
                                                    </td>
                                                    <td>{{ $r->username }}</td>
                                                    <td>
                                                        @php
                                                            $salesname = DB::table('users')
                                                                ->where('id', $r->sales_id)
                                                                ->pluck('name')
                                                                ->first();
                                                        @endphp
                                                        {{ $salesname }}
                                                    </td>
                                                    <td>{{ $r->amount }}</td>
                                                    <td>
                                                        @if ($r->sales_status == 1)
                                                            <span class="badge badge-pill badge-success"> Received </span>
                                                        @else
                                                            <span class="badge badge-pill badge-warning"> Pending </span>
                                                        @endif
                                                    </td>
                                                    <td>{{$r->sales_rcv_date ? date('d-m-y',strtotime($r->sales_rcv_date)) : ''}}</td>
                                                    <td>
                                                        @if ($r->admin_status == 1)
                                                            <span class="badge badge-pill badge-success"> Received </span>
                                                        @else
                                                            <span class="badge badge-pill badge-warning"> Pending </span>
                                                        @endif
                                                    </td>
                                                    <td>{{$r->admin_rcv_date ? date('d-m-y',strtotime($r->admin_rcv_date)) : ''}}</td>
                                                    <td>
                                                    <div class="dropdown show ">
                                                    <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        @if ($r->status == 1)
                                                            <span class="dropdown-item"> Recharged </span>
                                                        @else
                                                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#deleteuser" data-id="{{ $r->id }}">
                                                                <div><i class="fa fa-check"></i> Recharge</div></a>
                                                        @endif

                                                        @if ($r->admin_status == 2)
                                                        <a href="{{url('admin/edit_payment/'.$r->id)}}" class="dropdown-item">
                                                            <div><i class="fa fa-pencil"></i>  Payment</div>
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
                                                <td colspan="7">No Data Found !!!</td>
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
                        <p>{{ $recharge_requests->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                    </div>
                </div>
            </div>


        </div><!-- page body -->

    </div>


    <div id="deleteuser" class="modal fade ">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
                        <h4 class="modal-title">Are you sure?</h4>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body pd-20 wd-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="approve_recharge" method="POST">
                                {{ csrf_field() }}

                                <input type="hidden" id="user_id" name="customer_id">
                                <input type="hidden" id="request_id" name="request_id">
                                <div class="form-group">
                                    <label class="form-control-label">Recharge Amount: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" id="amount" name="amount"
                                        value="" readonly="">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">Admin Received: <span
                                            class="tx-danger">*</span></label>
                                    <select class="form-control" name="admin_status" id="admin_status">
                                        <option value="2"> No</option>
                                        <option value="1"> Yes</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">Note: <span class="tx-danger">*</span></label>
                                    <textarea type="text" name="note" class="form-control" placeholder="Enter a note" row="2" required></textarea>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">
                        Recharge</button>
                    <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"
                        data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div><!-- modal-dialog -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#deleteuser').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'get',
                    url: '{{ url('/admin/viewrecharge/') }}/' + id,
                    success: function(recharge) {
                        $('#request_id').val(recharge[0].id);
                        $('#user_id').val(recharge[0].user_id);
                        $('#admin_status').val(recharge[0].admin_status);
                        $('#amount').val(recharge[0].amount);
                    }
                });
            });
        });
    </script>
@endsection
