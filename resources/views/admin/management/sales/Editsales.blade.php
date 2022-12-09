@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Edit Sales</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit User/Customer</h6>
                        @if(isset($user))
                        @foreach($user as $user)
                        <form class="form-horizontal" method="POST" action="{{ url('admin/update_sales/'.$user->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="username" value="{{$user->name}}" class="form-control" placeholder="Enter Full Name" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Manager:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="manager">
                                    <option value="" >Select Manager</option>
                                    @php
                                    $manager = DB::table('users')->where('role', 5)->get();
                                    @endphp
                                    {{$manager}}
                                    @foreach($manager as $man)
                                    <option value="{{ $man->id }}" {{$user->manager == $man->id  ? 'selected' : ''}}>{{ $man->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Enter email address" required />
                            </div>
                        </div>
                        
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mobile No: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Enter Mobile No" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Designation: <span class="tx-danger">*</span></label>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="designation" value="Junior" type="radio" 
                                  @if($user->designation == 'Junior')
                                  checked
                                  @endif
                                  >
                                  <span>Junior</span>
                                </label>
                            </div>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="designation" value="Senior" type="radio"
                                  @if($user->designation == 'Senior')
                                  checked
                                  @endif
                                  >
                                  <span>Senior</span>
                                </label>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Status: <span class="tx-danger">*</span></label>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="status" value="1" type="radio" 
                                  @if($user->status == 1)
                                  checked
                                  @endif
                                  >
                                  <span>Active</span>
                                </label>
                            </div>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="status" value="0" type="radio"
                                  @if($user->status == 0)
                                  checked
                                  @endif
                                  >
                                  <span>Inactive</span>
                                </label>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Joining Date: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="date" name="joining" value="{{$user->joining}}" class="form-control" placeholder="Enter Joining Date" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Base Sales:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="number" name="base_sales" value="{{$user->base_sales}}" class="form-control" placeholder="Enter Base Sales" min="0" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Remark:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea name="remark" class="form-control" placeholder="Enter Remark">{{$user->remark}}</textarea>
                            </div>
                        </div>
                        @endforeach



                        @if($user->role != 5)
                        <div class="row mg-t-20">
                            <label class="col-sm-4">Comission:</label>
                            <div class="bd bd-gray-300 rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>Comission</th>
                                        <th>Minimum Sale</th>
                                        <th>Maximum Sale</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comissions as $c)
                                   <tr>
                                   <td class="tx-uppercase"><input type="hidden" name="comission[]" value="{{$c->comission}}">{{$c->comission}}</td>
                                   <td><input class="form-control" name="minimum[]" value="{{$c->minimum}}"/></td>
                                   <td><input class="form-control" name="maximum[]" value="{{$c->maximum}}"/></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div> 
                            
                        </div>
                        @endif



                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info">Update</button>
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

<script type="text/javascript">


function userType(id){
        //var resellerDiv = getElementById("resellerDiv");
        if(id == '4'){
            $("#executive").show();
            $("#commission").show();
        }else{
            $("#executive").hide();
            $("#commission").hide();
        }
    }
    </script>


@endsection
