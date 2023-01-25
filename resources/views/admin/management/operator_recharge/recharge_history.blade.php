@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active">Operator Recharge</span>
        </nav>
    </div>
   
    <div class="br-pagebody">

        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <a href="" class="float-md-right btn btn-primary btn-md" data-toggle="modal" data-target="#modaldemo3">Add Recharge <i class="fa fa-plus"></i></a>
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Operator Recharge History</h6>
                    <br/>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                      <select name="operator"  class="form-control mg-md-l-10">
                          <option value="">Select Operator</option>
                          @foreach($vendorList as $op)
                          <option value="{{$op->name}}">{{strtoupper($op->name)}}</option>
                          @endforeach
                      </select>

                      
                      
                      <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" name="date_from" class="form-control datepicker" placeholder="Date From" value="<?php if(isset($_REQUEST['date_from'])) echo $_REQUEST['date_from']; ?>">
                      </div>
                     
                       <div class="input-group mg-md-l-10">
                        <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                        <input type="text" name="date_to" class="form-control datepicker" placeholder="Date To" value="<?php if(isset($_REQUEST['date_to'])) echo $_REQUEST['date_to']; ?>">
                      </div> 
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
                                        <th>Vendor</th>
                                        <th>Recharge Date</th>
                                        <th>Entry Date</th>
                                        <th>Amount</th>
                                        <th>Comments</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($rechargeHistory)> 0)
                                    @foreach ($rechargeHistory as $r)
                                    <?php $total += $r->amount ; ?>
                                    <tr>
                                        <td>{{strtoupper($r->vendor)}}</td>
                                        <td>{{ date('Y-m-d', strtotime($r->recharge_date))}}</td>
                                        <td>{{ date('d-m-y H:i:s', strtotime($r->created_at))}}</td>
                                        <td class="text-right">{{number_format($r->amount, 0)}}</td>
                                        <td>{{$r->note}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5">No records found!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th colspan="3" class="text-right">Sub Total </th>
                                        <th class="text-right"> {{ number_format($total)}} </th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $rechargeHistory->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}
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
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Operator Recharge</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            <form class="form-horizontal" method="POST" action="{{ url('admin/save_operator_recharge') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">User: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="operator"  class="form-control mg-md-l-10">
                          <option value="">Select Operator</option>
                          @foreach($vendorList as $op)
                          <option value="{{$op->name}}">{{strtoupper($op->name)}}</option>
                          @endforeach
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
                    <label class="col-sm-4 form-control-label">Recharge Date: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="date" name="recharge_date" class="form-control" placeholder="Select Date" required>
                    </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Note: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <textarea type="text" name="note" class="form-control" placeholder="Enter a note" row="2" ></textarea>
                    </div>
                </div>


                        


                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>



        </div><!-- modal-body -->
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


  
</div>
@endsection