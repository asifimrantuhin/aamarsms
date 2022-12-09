@extends('layouts.admin-master')

@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Executive</a>
            <span class="breadcrumb-item active">Leave Application</span>
        </nav>
    </div>
    <div class="br-pagebody">


        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">New Leave Application</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('sales/store_application') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="row">
                                <!--End Left Div -->
                                <div class="col-sm-6">

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Leave Type: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <select class="form-control" name="type" required>
                                                    <option value="">Select Leave</option>
                                                    <option value="Sick Leave">Sick Leave</option>
                                                    <option value="Medical Leave">Medical Leave</option>
                                                    <option value="Marrital Leave">Marrital Leave</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                           
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">From: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" name="from" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">To: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" name="to" class="form-control" required />
                                        </div>
                                    </div>
                                    

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Message: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <textarea rows="14" cols="50" name="message" class="form-control" placeholder="Message to Admin" required></textarea>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Document: (if any)</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="file" name="document" class="form-control" />
                                        </div>
                                    </div>


                                    

                                  


                                </div>
                                <!--End Left Div -->


                                <div class="col-sm-6">
                                <h7 class="tx-gray-800 tx-bold tx-7 ">Leave Balance</h7>
                    
                                <table class="table  border mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Total</th>
                                        <th>Balance</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Sick Leave</td>
                                    <td>5</td>
                                    <td>{{5-$sick}}</td>
                                    </tr>
                                    <tr>
                                    <td>Medical Leave</td>
                                    <td>10</td>
                                    <td>10</td>
                                    </tr>
                                    <tr>
                                    <td>Leave without Pay</td>
                                    <td>6</td>
                                    <td>6</td>
                                    </tr>
                                    
                                    </tbody>
                            </table>

                                        



                                       
                                    </div><!-- Border Div -->

                                    


                                    <div class="form-layout-footer mg-t-30">
                                        <button type="submit" class="btn btn-info">Request <i class="fa fa-paper-plane"></i></button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>


                                </div>
                                <!--End Right Div -->


                            </div>
                            <!--End Row -->



                        </form>
                    </div>
                </div>
            </div>
        </div>
        </br>
        </br>
        </br>

    </div>

</div>
</div>

@endsection