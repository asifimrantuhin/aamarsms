@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active">Edit User</span>
        </nav>
    </div>


    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit User/Customer</h6>
                        @if(isset($customers))
                        @foreach($customers as $customer)
                        <form class="form-horizontal" method="POST" action="{{ url('/admin/update_user/'.$customer->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-3">
                                <label class="form-control-label">User Type: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <select class="form-control" name="usertype">
                                    <option value="2" <?php if($customer->role == 2) echo "selected";?>>Reseller</option>
                                    <option value="3"  <?php if($customer->role == 3) echo "selected";?>>User</option>
                                    <option value="4"  <?php if($customer->role == 4) echo "selected";?>>Sales Executive</option>
                                </select>
                            </div>
                            <div class="col-3"><label class="form-control-label">Assign Executive :</label></div>
                            <div class="col-3">
                                <select class="form-control" name="sales_person">
                                    <option value="" >Select Executive</option>
                                    @php
                                    $sales = DB::table('users')->where('role', 4)->get();
                                    @endphp
                                    @foreach($sales as $sale)
                                    <option value="{{ $sale->id }}" {{$customer->sales_person == $sale->id  ? 'selected' : ''}}>{{ $sale->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <div class="col-3">
                                <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <input type="text" name="username" value="{{$customer->name}}" class="form-control" placeholder="Enter Full Name" required />
                            </div>
                            <div class="col-3">
                                <label class="form-control-label">Representative:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" name="representative" class="form-control" value="{{$customer->representative}}" placeholder="Enter Representative Name"/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <div class="col-3">
                                <label class="form-control-label">Mobile No: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <input type="text" name="mobile" value="{{$customer->mobile}}" class="form-control" placeholder="Enter Mobile No" required />
                            </div>
                            <div class="col-3">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <input type="email" name="email" class="form-control" value="{{$customer->email}}" placeholder="Enter email address" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <div class="col-3">
                                <label class="form-control-label">Domain Name: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <input type="text" name="domain" class="form-control" placeholder="Your  Domain Name" value="{{$customer->domain}}" required />
                            </div>
                            <div class="col-3">
                                <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <select name="status" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1" <?php if($customer->status == 1) echo 'selected="selected"'; ?>>Active</option>
                                    <option value="0" <?php if($customer->status == 0) echo 'selected="selected"';?>>Inactive</option>
                               </select>
                            </div>
                           
                        </div>


                        <div class="row mg-t-20">
                            <div class="col-3">
                                <label class="form-control-label">API Enabled:</label>
                            </div>
                            <div class="col-3">
                            <select name="api_enabled" class="form-control">
                                    <option value="1" <?php if($customer->api_enabled == 1) echo 'selected="selected"'; ?>>Yes</option>
                                    <option value="0" <?php if($customer->api_enabled == 0) echo 'selected="selected"';?>>No</option>
                               </select>
                            </div>

                            <label class="col-sm-3">SenderID: <span class="tx-danger">*</span></label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="selectpicker form-control" name="nonmask[]" multiple data-live-search="true">
                                        @foreach($nonmaskslist as $mask)
                                        <option value="{{$mask->id}}" @foreach($senderIDs as $umask) <?php if($umask == $mask->id) echo 'selected="selected"'; ?> @endforeach>{{$mask->name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                         </div>

                        <div class="row mg-t-20">
                            <div class="col-3">
                                <label class="form-control-label">Dedicated Operator:</label>
                            </div>
                            <div class="col-3">
                                <select name="route" class="form-control">
                                    <option value="">GLOBAL</option>
                                    <option value="mirtel" <?php if($customer->operator =="mirtel") echo 'selected="selected"'; ?>>MirTel</option>
                                    <option value="rankstel" <?php if($customer->operator =="rankstel") echo 'selected="selected"'; ?>>RanksTel</option>
                                    <option value="adn" <?php if($customer->operator =="adn") echo 'selected="selected"'; ?>>ADN</option>
                                    <option value="gp" <?php if($customer->operator =="gp") echo 'selected="selected"'; ?>>GP</option>
                                    <option value="robi" <?php if($customer->operator =="robi") echo 'selected="selected"'; ?>>Robi</option>
                                    <option value="teletalk" <?php if($customer->operator =="teletalk") echo 'selected="selected"'; ?>>Teletalk</option>
                                    <option value="banglalink" <?php if($customer->operator =="banglalink") echo 'selected="selected"'; ?>>Banglalink</option>
                               </select>
                            </div>

                            <label class="col-sm-3">Mask List: <span class="tx-danger">*</span></label>
                            <div class="col-sm-3">
                                <div class="row">
                                    <select class="selectpicker form-control" name="mask[]" multiple data-live-search="true">
                                        @foreach($maskslist as $mask)
                                        <option value="{{$mask->id}}" @foreach($usermask as $umask) <?php if($umask == $mask->id) echo 'selected="selected"'; ?> @endforeach>{{$mask->name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="row mg-t-20">
                            <label class="col-sm-4">Rateplan:</label>
                            <div class="bd bd-gray-300 rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>Operator</th>
                                        <th>Normal Price</th>
                                        <th>Masking price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rates as $r)
                                   <tr>
                                   <td class="tx-uppercase"><input type="hidden" name="operator[]" value="{{$r->operator}}">{{$r->operator}}</td>
                                   <td><input class="form-control" name="nonmasking_price[]" value="{{number_format($r->nonmasking_price,4)}}"/></td>
                                   <td><input class="form-control" name="masking_price[]" value="{{number_format($r->masking_price,4)}}"/></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div> 
                            
                        </div>

                       
                       
                       
                            
                        </div>


                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back</a>
                        </div>
                    </form>
                     @endif
                        <!-- form-layout-footer -->
                    </div>
                </div>
            </div>

            
        </div>
    </div>      
</div>



@endsection
