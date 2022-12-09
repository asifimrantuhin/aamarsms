@extends('layouts.admin-master')
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Customer</a>
            <span class="breadcrumb-item active">Customerlist</span>
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
            <div class="col-md-13">
                <div class="br-section-wrapper">
                    <form method="POST">
                        {{ csrf_field() }}
                        <div class="align-items-center bg-gray-100 ht-md-180 bd pd-x-20">
                            </br>
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Priority Type:</label>
                                </div>
                                <div class="col-3">
                                    <select name="priority" class="form-control">
                                        <option value="">All</option>
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-3"></div>
                                <div class="col-1"></div>
                                <div class="col-3">
                                    <a href="" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#modaldemo3">Insert Data <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Date Type:</label>
                                </div>
                                <div class="col-3">
                                    <select id="selector" onchange="DateCheck(this);" class="form-control mg-md-l-2">
                                        <option value="">All</option>
                                        <option value="visiting_date">Visiting Date</option>
                                        <option value="followup">Follow Up</option>
                                    </select>
                                </div>
                                <div class="col-1"><label class="pd-md-y-10 form-control-label">From Date:</label></div>
                                <div class="col-3">
                                <input type="text" name="from_date" id="from_date"  class="form-control datepicker "
                                        placeholder="Date From">
                                    
                                    <input type="text" name="vdf" id="vdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Visiting From">
                                    
                                    <input type="text" name="fdf" id="fdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Followup From">
                                </div>

                                <div class="col-1"><label class="pd-md-y-10 form-control-label">To Date:</label></div>
                                <div class="col-3">
                                <input type="text" name="to_date" id="to_date" class="form-control datepicker "
                                        placeholder="Date To">
                                    
                                    <input type="text" name="vdt" id="vdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Visiting To">
                                    
                                    <input type="text" name="fdt" id="fdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Followup To">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                <label class="pd-md-y-10 form-control-label">Search By:</label>
                                </div>
                                <div class="col-3">
                                <select id="selector" onchange="yesnoCheck(this);" class="form-control">
                                        <option value="">All</option>
                                        <option value="cc">Customer Code</option>
                                        <option value="cname">Company Name</option>
                                        <option value="email">Email</option>
                                        <option value="mobile">Phone</option>
                                    </select>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-3">
                                <div id="cc" style="display: none;">
                                        <input type="text" class="form-control" id="cc" name="cc"
                                            placeholder="Enter Customer Code" />
                                    </div>
                                    <div id="cname" style="display: none;">
                                        <input type="text" class="form-control" id="cname" name="cname"
                                            placeholder="Enter Company Name" />
                                    </div>
                                    <div id="email" style="display: none;">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter Person Email" />
                                    </div>
                                    <div id="mobile" style="display: none;">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Enter Person Phone" />
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-3">
                                <button type="submit"
                                        class="btn btn-info tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>

                            </div>
                            </br>
                        </div>
                        <!--Main Div  -->

                    </form>
                    <br />

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Customer Code</th>
                                        <th>Visiting Date</th>
                                        <th>Follow-Up Date</th>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Authorized Person</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Requirement</th>
                                        <th>Proposal</th>
                                        <th>Priority</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($customers) > 0)
                                    @foreach($customers as $c)
                                    <tr>
                                        <td>{{$c->cc}}</td>
                                        <td>{{$c->visiting_date}}</td>
                                        <th>
                                            @if($c->followup == NULL)
                                            No followup
                                            @else
                                            {{$c->followup}}
                                            @endif
                                        </th>
                                        <td class="text-capitalize font-weight-bold">{{$c->cname}}</td>
                                        <td>{{$c->caddress}}</td>
                                        <td class="text-capitalize">{{$c->cperson}}</td>
                                        <td class="text-capitalize">{{$c->designation}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->mobile}}</td>
                                        <td>{{$c->requirement}}</td>
                                        <td>
                                            @if($c->proposal == 1)
                                            Yes
                                            @else
                                            No
                                            @endif
                                        </td>
                                        <td>
                                            @if($c->priority == "high")
                                            <span class="badge badge-danger">High</span>
                                            @elseif($c->priority == "medium")
                                            <span class="badge badge-warning">Medium</span>
                                            @else
                                            <span class="badge badge-info">Low</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{url('/sales/editcustomer/'.$c->id)}}"
                                                class="btn btn-outline-primary btn-icon mg-r-5">
                                                <div><i class="fa fa-pencil"></i></div>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="12">No Data Found !</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $customers->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>



        <!-- MODAL GRID -->
        <form class="form-horizontal" method="POST" action="{{ url('/sales/create-data') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
                <div class="modal-body pd-0">
                  <div class="row no-gutters">
                      
                    <div class="col-lg-6 bg-white"> 
                        <button type="button" class="close mg-t-15 mg-r-20" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                      <div class="pd-40">
                        <input type="hidden" name="cc" class="form-control" id="cc">

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="cname" class="form-control" placeholder="Enter Company Name" required />
                               
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Company Address: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea name="caddress" class="form-control" placeholder="Enter Company address" required></textarea>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Person Name: <span class="tx-danger">*</span></label>
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
                            <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
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
                            <label class="col-sm-4 form-control-label">Requirement: </label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="checkbox" name="requirement[]" value="masking" /> Masking &nbsp;
                                <input type="checkbox" name="requirement[]" value="non-masking" /> Non-Masking
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
                            <label class="col-sm-4 form-control-label">Priority: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control" name="priority"  required>
                                    <option value="">Select Priority</option>
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


                        </div>
                      </div><!-- col-6 -->
                      <div class="col-lg-6 bg-white">
                        <div class="pd-30">
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

                          </div>
                        </div><!-- pd-20 -->
                      </div><!-- col-6 -->
                    </div><!-- row -->

                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
        </form>


        <script type="text/javascript">
        function yesnoCheck(that) {
            if (that.value == "cc") {
                document.getElementById("cc").style.display = "block";
            } else {
                document.getElementById("cc").style.display = "none";
            }
            if (that.value == "cname") {
                document.getElementById("cname").style.display = "block";
            } else {
                document.getElementById("cname").style.display = "none";
            }
            if (that.value == "email") {
                document.getElementById("email").style.display = "block";
            } else {
                document.getElementById("email").style.display = "none";
            }
            if (that.value == "mobile") {
                document.getElementById("mobile").style.display = "block";
            } else {
                document.getElementById("mobile").style.display = "none";
            }
        }

        function DateCheck(that) {
            if(that.value == "visiting_date"){
                document.getElementById("from_date").style.display = "none";
                document.getElementById("to_date").style.display = "none";
                document.getElementById("fdf").style.display = "none";
                document.getElementById("fdt").style.display = "none";
                document.getElementById("vdf").style.display = "block";
                document.getElementById("vdt").style.display = "block";
            
        }
            else if(that.value == "followup") {
                document.getElementById("from_date").style.display = "none";
                document.getElementById("to_date").style.display = "none";
                document.getElementById("vdf").style.display = "none";
                document.getElementById("vdt").style.display = "none";
                document.getElementById("fdf").style.display = "block";
                document.getElementById("fdt").style.display = "block";
            } 
        
         else if(that.value == ""){
            document.getElementById("vdf").style.display = "none";
            document.getElementById("vdt").style.display = "none";
            document.getElementById("fdf").style.display = "none";
            document.getElementById("fdt").style.display = "none";
            document.getElementById("from_date").style.display = "block";
            document.getElementById("to_date").style.display = "block";
        }
    

        }
        </script>

        @endsection