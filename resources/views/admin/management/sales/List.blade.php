@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Executive</a>
            <span class="breadcrumb-item active">ExecutiveList</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">Add New Executive <i class="fa fa-plus"></i></a>
                              <input type="text" class="form-control mg-md-l-10" name="email" placeholder="Search with Email">
                              
                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            </div>
                        </form>
                    </div>
                    <br/>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Manager</th>
                                        <th>UserType</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>mobile</th>
                                        <th>Joined</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($saleslists) > 0)
                                    @foreach($saleslists as $c)  
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->name}}</td>
                                        <td><img class="rounded-circle" width="50px" src="{!! asset('images/user/'.$c->image) !!}"></td>
                                        <td>{{App\Models\User::whereId($c->manager)->pluck('name')->first()}}</td>
                                        <td>{{$c->role == 5 ? 'Manager' : 'Executive'}}</td>
                                        <td>{{$c->designation}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->mobile}}</td>
                                        <td class="text-nowrap">{{date('d-m-y', strtotime($c->joining))}}</td>
                                        <td>
                                            @if($c->status == 1 )
                                            <span class="badge badge-success"> Active </span>
                                            @else
                                            <span class="badge badge-danger"> Inactive  </span>
                                            @endif  
                                        </td>

                                        <td>
                                            
                                            <div class="dropdown show">
                                                <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </a>
                                              
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a  href="#">
                                                    @if($c->status == 0)
                                                  <a href="{{url('admin/ces/'.$c->id.'/1')}}" class="dropdown-item"><div><i class="fa fa-check"></i>  Active</div></a>
                                                    @else
                                                  <a href="{{url('/admin/ces/'.$c->id.'/0')}}" class="dropdown-item"><div><i class="fa fa-pause"></i>  Pause</div></a>
                                                    @endif
                                                  </a>
                                                  <a class="dropdown-item" href="{{url('/admin/editsales/'.$c->id)}}"><div><i class="fa fa-pencil"></i>  Modify</div></a>
                                                  </a>
                                                  <a href="#" data-toggle="modal" data-target="#deleteuser" data-id="{{ $c->id }}" class="dropdown-item" href="#"><div><i class="fa fa-trash"></i> Delete</div></a>
                                                  <a href="{{url('/admin/reset/'.$c->id.'/AamarSMS@123')}}" class="dropdown-item"><div><i class="fa fa-refresh"></i> Reset Pass</div></a>
                                                </div>
                                              </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No reseller/user created yet!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $saleslists->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>

<!-- CREATE USER MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Sales</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            <form class="form-horizontal" method="POST" action="{{ url('admin/executive_store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">User Type<span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select class="form-control" name="usertype" onchange="userType(this.value)" required>
                            <option value="5">Sales Manager</option>
                            <option value="4">Sales Executive</option>
                        </select>
                    </div>
                </div>

                <div class="row mg-t-20" id="executive" style="display: none;">
                    <label class="col-sm-4 form-control-label">Manager: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select class="form-control" name="manager">
                            <option value="">Select Manager</option>
                            @php $manager = DB::table('users')->where('role', 5)->orderBy('id','DESC')->get(); @endphp
                            @foreach($manager as $m)  
                                <option value="{{$m->id}}">{{$m->name}}</option>
                            @endforeach
                            
                        </select>
                    </div> 
                </div>






                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="username" class="form-control" placeholder="Enter Full Name" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Designation: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control" name="designation" required>
                            <option value="Junior">Junior</option>
                            <option value="Senior">Senior</option>
                        </select>
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
                                <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No" required />
                                @if ($errors->has('mobile'))
                                <span class="help-block">
                                <span class="badge badge-danger">{{ $errors->first('mobile') }}</span>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Status: <span class="tx-danger">*</span></label>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="status" value="1" type="radio" checked>
                                  <span>Active</span>
                                </label>
                            </div>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="status" value="0" type="radio">
                                  <span>Inactive</span>
                                </label>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Joining Date: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="date" name="joining" class="form-control" placeholder="Enter Joining date" required />
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Base Sales: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="number" name="base_sales" class="form-control" placeholder="Enter Base Sales" min="0" required />
                            </div>
                        </div>


                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Remark:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea name="remark" class="form-control" placeholder="Remark"> </textarea>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Password: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required />
                            </div>
                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" name="conf_password" class="form-control" placeholder="Confirm password" required />
                            </div>
                        </div>

                        

                        
                        <div class="row mg-t-20" id="commission" style="display: none;">
                            <label class="col-sm-4 form-control-label">Comission Plan: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8">
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
                                            <tr>
                                                <td><input type="hidden" name="comission[]" value="5">5%</td>
                                                <td><input class="form-control" name="minimum[]" value="1"></td>
                                                <td><input class="form-control" name="maximum[]" value="15000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="comission[]" value="6">6%</td>
                                                <td><input class="form-control" name="minimum[]" value="15001"></td>
                                                <td><input class="form-control" name="maximum[]" value="30000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="comission[]" value="7">7%</td>
                                                <td><input class="form-control" name="minimum[]" value="30001"></td>
                                                <td><input class="form-control" name="maximum[]" value="50000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="comission[]" value="8">8%</td>
                                                <td><input class="form-control" name="minimum[]" value="50001"></td>
                                                <td><input class="form-control" name="maximum[]" value="100000"></td>
                                            </tr>
                                            
                                    </tbody>
                                    </table>
                                </div> 
                                </div>
                            
                        </div>


                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>



        </div><!-- modal-body -->
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->





  <div id="deleteuser" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
          <h4 class="modal-title">Are you sure?</h4>	
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="d-flex justify-content-center">
        <p>Do you really want to delete these records?</p>
        </div>
        
        <div class="modal-body pd-25 wd-300">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">User name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="del_user_name"  value="" readonly="">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
          <a id="deleteusr" href="" type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Delete  <i class="ion-trash-a"></i></a>
          <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
        </div>
       
      </div>
    </div><!-- modal-dialog -->
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

$(document).ready(function(){
$('#deleteuser').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).data('id');
    $.ajax({
        type : 'get',
        url: '{{ url('/admin/viewuser/') }}/'+ id,
        success : function(user){
            $('#del_user_name').val(user[0].name);
            $("#deleteusr").attr('href', '/admin/delete_user/'+user[0].id);
        }
    });
 });
});


</script>

@endsection