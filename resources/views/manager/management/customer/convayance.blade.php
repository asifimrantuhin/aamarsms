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
            <div class="col-md-12">
                <div class="br-section-wrapper">
                <form method="POST">
                        {{ csrf_field() }}
                        <div class="align-items-center bg-gray-100 ht-md-180 bd pd-md-y-10  pd-x-20">
                            <div class="row">
                                <div class="col-1"><label class="pd-md-y-10 form-control-label">Method:</label></div>
                                <div class="col-3">
                                <select name="method" class="form-control">
                                        <option value="">All</option>
                                        <option value="MFS">MFS</option>
                                        <option value="Cash">Cash</option>
                                </select>
                                </div>
                                <div class="col-1"><label class="pd-md-y-10 form-control-label">Payment:</label></div>
                                <div class="col-3">
                                <select name="pay_status" class="form-control">
                                        <option value="">All</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Unpaid</option>
                                </select>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Date Type:</label>
                                </div>
                                <div class="col-3">
                                    <select id="selector" onchange="DateCheck(this);" class="form-control mg-md-l-2">
                                        <option value="">All</option>
                                        <option value="visiting_date">Visiting Date</option>
                                        <option value="pay_date">Payment Date</option>
                                    </select>
                                </div>



                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">From:</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="from_date" id="from_date"  class="form-control datepicker "
                                        placeholder="Date From">
                                    
                                    <input type="text" name="vdf" id="vdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Visiting From">
                                    
                                    <input type="text" name="pdf" id="pdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Paying From">

                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">To:</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="to_date" id="to_date" class="form-control datepicker "
                                        placeholder="Date To">
                                    
                                    <input type="text" name="vdt" id="vdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Visiting To">
                                    
                                    <input type="text" name="pdt" id="pdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Paying To">
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
                                        <option value="cperson">Authorized Person Name</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <label class="form-control-label"></label>
                                </div>
                                <div class="col-3">
                                    <div id="cc" style="display: none;">
                                        <input type="text" class="form-control" id="cc" name="cc"
                                            placeholder="Enter Customer Code" />
                                    </div>
                                    <div id="cperson" style="display: none;">
                                        <input type="text" class="form-control" id="cperson" name="cperson"
                                            placeholder="Enter Authorized Person Name" />
                                    </div>    

                                    <div id="visiting_date" style="display: none;">
                                        <input type="date" class="form-control" id="visiting_date" name="visiting_date"
                                            placeholder="Enter Visiting Date" />
                                    </div>
                                    <div id="pay_date" style="display: none;">
                                        <input type="date" class="form-control" id="pay_date" name="pay_date"
                                            placeholder="Enter Pay Date" />
                                    </div>

                                </div>
                                <div class="col-1">
                                    <label class="form-control-label"></label>
                                </div>
                                <div class="col-3">
                                    <button type="submit"
                                        class="btn btn-info tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>
                        </div>
                        <!--Main Div  -->

                    </form>
                    <br/>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Visiting Date</th>
                                        <th>Customer Code</th>
                                        <th>Company</th>
                                        <th>Amount</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                        <th>Payment Method</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0 ; ?>
                                    @if(count($customers) > 0)
                                    @foreach($customers as $c)
                                    <?php if( $c->cost >=0) $total = ($total+$c->cost) ; ?>
                                    <tr>
                                        <td>{{$c->visiting_date}}</td>
                                        <td>{{$c->cc}}</td>
                                        <td class="text-capitalize font-weight-bold">{{$c->cname}}</td>
                                        <td>{{$c->cost}}</td>
                                        <td>
                                            @if($c->pay_status == 2)
                                            <span class="badge badge-danger">Unpaid</span>
                                            @else
                                            <span class="badge badge-success">Paid</span>
                                            @endif
                                        </td>

                                        <td>{{$c->pay_date}}</td>
                                        <td>{{$c->method}}</td>
                                        <!-- <td>
                                        <a href="{{url('/sales/editcustomer/'.$c->id)}}" class="btn btn-outline-primary btn-icon mg-r-5">
                                        <div><i class="fa fa-pencil"></i></div>
                                        </a>
                                        </td> -->

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No Data Found!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                    <th colspan="3" class="text-right"> Total </th>
                                    
                                     <th> {{ $total}} </th>
                                    <th colspan="2">                        
                                    </th>
                                </tr>
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
            if (that.value == "cperson") {
                document.getElementById("cperson").style.display = "block";
            } else {
                document.getElementById("cperson").style.display = "none";
            }
        }

        function DateCheck(that) {
            if(that.value == "visiting_date"){
                document.getElementById("from_date").style.display = "none";
                document.getElementById("to_date").style.display = "none";
                document.getElementById("pdf").style.display = "none";
                document.getElementById("pdt").style.display = "none";
                document.getElementById("vdf").style.display = "block";
                document.getElementById("vdt").style.display = "block";   
        }
        
        else if(that.value == "pay_date") {
                document.getElementById("from_date").style.display = "none";
                document.getElementById("to_date").style.display = "none";
                document.getElementById("vdf").style.display = "none";
                document.getElementById("vdt").style.display = "none";
                document.getElementById("pdf").style.display = "block";
                document.getElementById("pdt").style.display = "block";
            } 
        
         else if(that.value == ""){
            document.getElementById("from_date").style.display = "block";
            document.getElementById("to_date").style.display = "block";
            document.getElementById("vdf").style.display = "none";
            document.getElementById("vdt").style.display = "none";
            document.getElementById("pdf").style.display = "none";
            document.getElementById("pdt").style.display = "none";

        }
    

        }
        </script>


        @endsection