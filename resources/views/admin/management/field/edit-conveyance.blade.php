@extends('layouts.admin-master')
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Sales</a>
            <span class="breadcrumb-item active">Customer</span>
        </nav>
    </div>
    <div class="br-pagebody">
        
        <div class="row">

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Conveyance</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('/admin/updateConeyance/'.$data->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Customer Code: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="cc" value="{{$data->cc}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Visiting Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" name="visiting_date" class="form-control" value="{{$data->visiting_date}}" disabled />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Cost: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" name="cost" class="form-control" value="{{$data->cost}}" />
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Payment Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="date" name="pay_date" class="form-control" @if($data->pay_date != NULL) value="{{$data->pay_date}}" @else value="<?= date('Y-m-d') ?>" @endif/>
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Payment Method: </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control" id="selector" onchange="MethodCheck(this);" name="method">
                                        <option value="">Select Payment</option>
                                        <option value="Cash" <?php if ($data->method == "Cash") echo 'selected="selected"'; ?>>Cash</option>
                                        <option value="MFS" <?php if ($data->method == "MFS") echo 'selected="selected"'; ?>>MFS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label"></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    @if($data->trx_num == NULL)
                                    <input type="text" name="trx_num" id="trx_num" style="display: none;" class="form-control" value="{{$data->trx_num}}"  placeholder="Enter Transaction Number"/>
                                    @else
                                    <input type="text" name="trx_num"  class="form-control" value="{{$data->trx_num}}" />
                                    @endif
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
                                        <label class="col-sm-4 form-control-label">Company Name:</label>
                                        <label class="col-sm-8 form-control-label text-uppercase font-weight-bold">{{$data->cname}}</label>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Company Address: </label>
                                        <label class="col-sm-8 form-control-label text-capitalize font-weight-bold">{{$data->caddress}}</label>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Contact Person Name: </label>
                                        <label class="col-sm-8 form-control-label text-capitalize font-weight-bold">{{$data->cperson}}</label>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Designation: </label>
                                        <label class="col-sm-8 form-control-label text-capitalize font-weight-bold">{{$data->designation}}</label>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Email Address: </label>
                                        <label class="col-sm-8 form-control-label font-weight-bold">{{$data->email}}</label>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Mobile No: </label>
                                        <label class="col-sm-8 form-control-label font-weight-bold">{{$data->mobile}}</label>
                                    </div>


                    </div><!-- form-layout -->

                </div><!-- br-section-wrapper -->

            </div><!-- col-lg-6 -->

        </div><!-- row -->

    </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->



@endsection

<script type="text/javascript">
    function MethodCheck(that) {
        if (that.value == "MFS") {
            document.getElementById("trx_num").style.display = "block";
        } else {
            document.getElementById("trx_num").style.display = "none";
        }
    }

</script>