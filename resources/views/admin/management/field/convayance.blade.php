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
                    <form method="GET" autocomplete="off">
                        <div class="align-items-center bg-gray-100 ht-md-180 bd pd-md-y-10  pd-x-20">
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Officer:</label>
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
                                    <label class="pd-md-y-10 form-control-label">Method:</label>
                                </div>
                                <div class="col-3">
                                    <select name="method" class="form-control">
                                        <option value="">All</option>
                                        <option value="MFS">MFS</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Payment:</label>
                                </div>
                                <div class="col-3">
                                    <select name="pay_status" class="form-control">
                                        <option value="">All</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Unpaid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">Type:</label>
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
                                        placeholder="Date From" value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>" readonly>
                                    
                                    <input type="text" name="vdf" id="vdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Visiting From" value="<?php if (isset($_REQUEST['vdf'])) echo $_REQUEST['vdf']; ?>" readonly>
                                    
                                    <input type="text" name="pdf" id="pdf" style="display: none;"  class="form-control datepicker"
                                        placeholder="Paying From" value="<?php if (isset($_REQUEST['pdf'])) echo $_REQUEST['pdf']; ?>" readonly>

                                </div>
                                <div class="col-1">
                                    <label class="pd-md-y-10 form-control-label">To:</label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="to_date" id="to_date" class="form-control datepicker "
                                        placeholder="Date To" value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>" readonly>
                                    
                                    <input type="text" name="vdt" id="vdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Visiting To" value="<?php if (isset($_REQUEST['vdt'])) echo $_REQUEST['vdt']; ?>" readonly>
                                    
                                    <input type="text" name="pdt" id="pdt" style="display: none;" class="form-control datepicker "
                                        placeholder="Paying To" value="<?php if (isset($_REQUEST['pdt'])) echo $_REQUEST['pdt']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label class=" form-control-label">Search:</label>
                                </div>
                                <div class="col-3">
                                    <select id="selector" onchange="yesnoCheck(this);" class="form-control">
                                        <option value="">All</option>
                                        <option value="cc">Customer Code</option>
                                        <option value="cname">Company Name</option>
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
                                    <div id="cname" style="display: none;">
                                        <select class="selectpicker form-control" id="cname" name="cname" data-live-search="true">
                                            <option value="">All</option>
                                            @foreach($data as $c)
                                            <option value="{{$c->cname}}">{{$c->cname}}</option>
                                            @endforeach
                                        </select>
                                        
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
                                        <th class="fixed-header">Visiting Date</th>
                                        <th>Customer Code</th>
                                        <th>Sales Officer</th>
                                        <th>Company Name</th>
                                        <th>Amount</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                        <th>Payment Method</th>
                                        <th>Transaction Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0 ; ?>
                                    @if(count($customers) > 0)
                                    @foreach($customers as $c)  
                                    <?php if( $c->cost >=0) $total = ($total+$c->cost) ; ?>
                                    <tr>
                                        <td>{{date('d-m-y', strtotime($c->visiting_date))}}</td>
                                        <td>{{$c->cc}}</td>
                                        <td>
                                            @php
                                            $sales =
                                            DB::table('users')->where('id',$c->sales_id)->pluck('name')->first();
                                            @endphp
                                            {{$sales}}
                                        </td>
                                        <td class="text-capitalize font-weight-bold">{{$c->cname}}</td>
                                        <td class="font-weight-bold">{{$c->cost}}</td>
                                        <td>
                                        @if($c->pay_status == 2)
                                        <span class="badge badge-danger">Unpaid</span>
                                        @else
                                        <span class="badge badge-success">Paid</span>
                                        @endif
                                    </td>
                                        
                                        <td>{{ $c->pay_date ? date('d-m-y', strtotime($c->pay_date)) : 'Not Paid'}}</td>
                                        <td>{{$c->method}}</td>
                                        <td>{{$c->trx_num}}</td>
                                        <td>
                                        <a href="{{url('/admin/editConeyance/'.$c->id)}}" class="btn btn-outline-primary btn-icon mg-r-5">
                                        <div><i class="fa fa-pencil"></i></div>
                                        </a>
                                        </td>
                                       
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No reseller/user created yet!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                    <th colspan="4" class="text-right"> Total </th>
                                    
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
            if (that.value == "cname") {
                document.getElementById("cname").style.display = "block";
            } else {
                document.getElementById("cname").style.display = "none";
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