@extends('layouts.admin-master')
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Sales</a>
            <span class="breadcrumb-item active">Recharge request</span>
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
            </div><!-- d-flex -->
        </div>
        @endif
        <div class="row">

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Request</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('admin/update_payment/'.$data[0]->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">User Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="user" value="{{$username}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Amount: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="amount" value="{{$data[0]->amount}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Requested Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="requested_at" value="{{$data[0]->created_at}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Recharged Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="recharged-at" value="{{$data[0]->approved_at}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Payment Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" id="selector" onchange="PaymentCheck(this);" name="method">
                                        <option value="1" <?php if ($data[0]->admin_status == 1) echo 'selected="selected"'; ?>>Received</option>
                                        <option value="2" <?php if ($data[0]->admin_status == 2) echo 'selected="selected"'; ?>>Pending</option>
                                    </select>
                                </div>
                            </div>

                            

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" id="rcv_date" name="rcv_date" style="display: none;" class="form-control" required/>
                                </div>
                            </div>

                            

                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back</a>
                            </div>

                        </form>

                    </div><!-- form-layout -->

                </div><!-- br-section-wrapper -->

            </div><!-- col-lg-6 -->

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Relevant Information</h6>
                           
                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">User Name:</label>
                                        <label class="col-sm-8 form-control-label text-uppercase font-weight-bold">{{$username}}</label>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">User Mobile: </label>
                                        <label class="col-sm-8 form-control-label text-capitalize font-weight-bold">{{$data[0]->user_mobile}}</label>
                                    </div>

                                    


                    </div><!-- form-layout -->

                </div><!-- br-section-wrapper -->

            </div><!-- col-lg-6 -->


        </div><!-- row -->

    </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->


<script type="text/javascript">
    function PaymentCheck(that) {
        if (that.value == 1) {
            document.getElementById("rcv_date").style.display = "block";
        } else {
            document.getElementById("rcv_date").style.display = "none";
        }
    }
</script>

@endsection
