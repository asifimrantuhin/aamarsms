@extends('layouts.admin-master')
<style>
    .border-5 {
        border: 5px solid gray;
        padding: 20px;
        
    }
</style>
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Sales</a>
            <span class="breadcrumb-item active">Create New Data</span>
        </nav>
    </div>
    <div class="br-pagebody">


        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">New Customer Entry</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('sales/store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="row">
                                <!--End Left Div -->
                                <div class="col-sm-6">

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cname" class="form-control" placeholder="Enter Company Name" required />
                                           
                                        </div>
                                    </div>
                                    

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Company Address: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <textarea rows="4" cols="50" name="caddress" class="form-control" placeholder="Enter Company address" required></textarea>
                                        </div>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Area Name: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            
                                            <select class="selectpicker form-control" name="area" data-live-search="true" required>
                                            <option value="" >Select Area</option>
                                            @foreach ($area as $a)
                                            <option value="{{$a}}">{{ $a }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Representative: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cperson" class="form-control" placeholder="Enter Contact Person Name" required />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Designation: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="designation" class="form-control" placeholder="Enter Designation" required />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Email Address: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="email" name="email" class="form-control" placeholder="Enter email address" required />
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <span class="badge badge-danger">{{ $errors->first('email') }}</span>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Mobile No: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile No" required />
                                            @if ($errors->has('mobile'))
                                            <span class="help-block">
                                                <span class="badge badge-danger">{{ $errors->first('mobile') }}</span>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer Requirement: </label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="checkbox" name="requirement[]" value="masking" /> Masking &nbsp;
                                            <input type="checkbox" name="requirement[]" value="non-masking" /> Non-Masking &nbsp;
                                            <input type="checkbox" name="requirement[]" value="Location-based" /> Location-based &nbsp;
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Proposal Required?: </label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="radio" name="proposal" value="1" />  Yes &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="proposal" value="2" />  No
                                        </div>
                                    </div>

                                    
                                        

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer Priority: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control" name="priority"  required>
                                                <option value="">Select Priority</option>
                                                <option value="Succeed">Succeed</option>
                                                <option value="high">High</option>
                                                <option value="medium">Medium</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer FeedBack: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <textarea name="cfeedback" class="form-control" placeholder="Enter Customer Feedback" required></textarea>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Source: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control" name="source"  required>
                                                <option value="">Select Source</option>
                                                <option value="Direct Visit">Direct Visit</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Google Search">Google Search</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                                <option value="AamarSMS Form">AamarSMS Form</option>
                                                <option value="Web Directory">Web Directory</option>
                                                <option value="Email">Email</option>
                                                <option value="Referrals">Referrals</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Visiting Date: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" name="visiting_date" class="form-control" required value="<?php echo date("Y-m-d");?>">
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Next Follow-up: (if any)</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" id="txtDate" name="followup" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label"></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            
                                        </div>
                                    </div>


                                </div>
                                <!--End Left Div -->


                                <div class="col-sm-6">
                                    <!--Start Right Div -->
                                    <div class="border border-gray border-5">
                                        <h7 class="tx-gray-800 tx-bold tx-7 ">Conveyance Information</h7>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Conveyance: </label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select id="ddlPassport" onchange="ShowHideDiv()" class="form-control">
                                            <option value="N">No</option>
                                            <option value="Y">Yes</option>
                                        </select>
                                            </div>
                                        </div>

                                    
                                        <div id="dvPassport" style="display: none">
                                            

                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Cost: </label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="number" name="cost" class="form-control" placeholder="Enter Cost" />
                                            </div>
                                        </div>


                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Place (From): </label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="from" class="form-control" placeholder="From" />
                                            </div>
                                        </div>

                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Place (To): </label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="to" class="form-control" placeholder="To" />
                                            </div>
                                        </div>


                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Transport: </label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <select class="form-control" name="transaport">
                                                    <option value="">Select Transport</option>
                                                    <option value="bus">Bus</option>
                                                    <option value="rickshaw">Rickshaw</option>
                                                    <option value="private">Private</option>
                                                    <option value="walk">Walk</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Border Div -->
                                    </div> <!-- Convyance Div Hide/Show -->
                                    


                                    <div class="form-layout-footer mg-t-30">
                                        <button type="submit" class="btn btn-info">Save</button>
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

<script>
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;

        $('#txtDate').attr('min', maxDate);
    });
</script>
<!-- Previous Day Active -->
<script>
    $(function() {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '7' + day.toString();

        var maxDate = year + '-' + month + '-' + day;

        $('#minDate').attr('min', maxDate);
    });
</script>

<script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
    }
</script>
@endsection