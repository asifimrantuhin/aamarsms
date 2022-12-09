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
        <div class="row">
            <div class="col-md-13">
                <div class="br-section-wrapper">
                    <form method="POST">
                        {{ csrf_field() }}
                        <div class="align-items-center bg-gray-100 ht-md-180 bd pd-x-20">
                            </br>
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Sales Officer:</label>
                                </div>
                                <div class="col-3">
                                    <select name="sales_id" class="form-control">
                                        <option value="">All</option>
                                        @foreach($sales as $sale)
                                        <option value="{{$sale->id}}">{{$sale->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Source Type:</label>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" name="source">
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

                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">From Date:</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="from_date" id="from_date"  class="form-control datepicker "
                                        placeholder="Date From" readonly>
                                    
                                    <input type="text" name="vdf" id="vdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Visiting From" readonly>
                                    
                                    <input type="text" name="fdf" id="fdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Followup From" readonly>

                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">To Date:</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="to_date" id="to_date" class="form-control datepicker "
                                        placeholder="Date To" readonly>
                                    
                                    <input type="text" name="vdt" id="vdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Visiting To" readonly>
                                    
                                    <input type="text" name="fdt" id="fdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Followup To" readonly>
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
                                        <option value="area">Area</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label"></label>
                                </div>
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
                                    <div id="area" style="display: none;">
                                    <select class="selectpicker form-control" name="area" id="area" data-live-search="true">
                                            <option value="" >Select Area</option>
                                            @foreach ($area as $a)
                                            <option value="{{$a}}">{{ $a }}</option>
                                            @endforeach
                                            </select>
                                    </div>
                               
                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label"></label>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-info tx-uppercase tx-11 tx-spacing-2">Search <i class="fa fa-search"></i></button>
                                    <a href="{{url('/admin/download_field/xlsx')}}" class="btn btn-warning tx-uppercase tx-11 tx-spacing-2">Download Data <i class="fa fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Main Div  -->

                    </form>

                    <br />

                    <div style="overflow-x:auto;">
                        <div class="table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Customer Code</th>
                                        <th>Visited</th>
                                        <th>Officer</th>
                                        <th>Follow-Up</th>
                                        <th>Company</th>
                                        <th>Address</th>
                                        <th>Area</th>
                                        <th>Representative</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Requirement</th>
                                        <th>Proposal</th>
                                        <th>Source</th>
                                        <th>Followup(New)</th>
                                        <th>Followup(Old)</th>
                                        <th>Priority</th>

                                        <th class="wd-40p-force">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($customers) > 0)
                                    @foreach($customers as $c)
                                    <tr>
                                        <td>{{$c->cc}}</td>
                                        <td class="text-nowrap">{{date('d-m-y', strtotime($c->visiting_date))}}</td>
                                        <td>
                                            @php
                                            $sales =
                                            DB::table('users')->where('id',$c->sales_id)->pluck('name')->first();
                                            @endphp

                                            {{$sales}}</td>
                                        <th class="text-nowrap">{{$c->followup == NULL ? 'No followup' : date('d-m-y', strtotime($c->followup))}}</th>
                                        <td class="text-capitalize font-weight-bold">{{$c->cname}}</td>
                                        <td>{{$c->caddress}}</td>
                                        <td>{{$c->area}}</td>
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
                                        <td>{{$c->source}}</td>
                                        <td>{{$c->cfeedback}}</td>
                                        <td>{{$c->cfeedback2}}</td>
                                        <td>
                                        @if($c->priority == "high")
                                        <span class="badge badge-danger">High</span> 
                                        @elseif($c->priority == "medium")
                                        <span class="badge badge-warning">Medium</span>
                                        @elseif($c->priority == "Succeed")
                                        <span class="badge badge-success">Succeed</span>
                                        @else
                                        <span class="badge badge-info">Low</span>
                                        @endif
                                        </td>

                                        <td>
                                            <a href="{{url('/admin/editCustomer/'.$c->id)}}"
                                                class="btn btn-outline-primary btn-icon mg-r-5">
                                                <div><i class="fa fa-pencil"></i></div>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="13">No Data Found !</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $customers->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>

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
            if (that.value == "area") {
                document.getElementById("area").style.display = "block";
            } else {
                document.getElementById("area").style.display = "none";
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