@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active">Userlist</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                <a href="{{url('/admin/download_user/xlsx')}}" class="btn btn-warning tx-uppercase tx-11 tx-spacing-2">Download Data <i class="fa fa-download"></i></a>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        
                    <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo3">Create User <i class="fa fa-plus"></i></a>

                              <input type="text" class="form-control mg-md-l-10" name="name" placeholder="Search with Name">
                              <input type="text" class="form-control mg-md-l-10" name="email" placeholder="Search with Username">
                              <input type="text" class="form-control mg-md-l-10" name="mobile" placeholder="Search with Phone">
                              <select name="userrole"  class="form-control mg-md-l-10">
                                  <option value="">Select Role</option>
                                  <option value="2">Reseller</option>
                                  <option value="3">User</option>
                              </select>
                              <select name="executive"  class="form-control mg-md-l-10">
                                <option value="">Select Executive</option>
                                @foreach($executive as $e)
                                <option value="{{$e->id}}">{{$e->name}}</option>
                                @endforeach
                              </select>
                              <select name="reseller"  class="form-control mg-md-l-10">
                                <option value="">Select Reseller</option>
                                @foreach($reseller as $r)
                                <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                              </select>
                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            
                            </div>
                        </form>
                    </div>
                    <br/>

                    <div class="table-wrapper bd" style="overflow-x:auto;">
                        <div class="table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Authorized Person</th>
                                        <th>Reseller</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Route</th>
                                        <th>Created</th>
                                        <th>Role</th>
                                        <th>Executive</th>
                                        <th>Balance</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($userlist) > 0)
                                    @foreach($userlist as $u)  
                                    <tr>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->representative}}</td>
                                         <td>{{($u->parent_user != NULL ) ? App\Models\User::findOrFail($u->parent_user)->name : 'None'}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->mobile}}</td>
                                        <td class="text-capitalize">{{$u->operator}}</td>
                                        <td>{{$u->created_at->format('d/m/Y')}}</td>
                                        <td>
                                            @if($u->role == 1 )
                                                Admin
                                            @elseif($u->role == 2 )
                                                Reseller 
                                            @elseif($u->role == 3 )
                                                User 
                                            @elseif($u->role == 4 )
                                                Sales Executive 
                                            @else
                                                Undefined 
                                            @endif  
                                        </td>
                                        <td>{{($u->sales_person != NULL ) ? App\Models\User::findOrFail($u->sales_person)->name : 'None'}}</td>
                                        <td>{{number_format(App\Models\Recharge::where('user_id',$u->id)->latest()->pluck('balance')->first(),2)}}</td>
                                        
                                        <td>
                                            @if($u->status == 1 )
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
                                                    @if($u->status == 0)
                                            <a href="{{url('/admin/status/'.$u->id.'/1')}}" class="dropdown-item">
                                                <div><i class="fa fa-check"></i>  Active</div>
                                            </a>
                                                    @else
                                            <a href="{{url('/admin/status/'.$u->id.'/0')}}" class="dropdown-item">
                                                <div><i class="fa fa-pause"></i>  Pause</div>
                                            </a>
                                                    @endif
                                                  </a>
                                                  <a class="dropdown-item" href="{{url('/admin/edit_user/'.$u->id)}}">
                                                        <div><i class="fa fa-pencil"></i>  Modify</div>
                                                    </a>
                                                  </a>
                                                  <a class="dropdown-item" href="{{url('/admin/user_doc/'.$u->id)}}"><div> <i class="fa fa-file"></i> Documents </div></a>
                                                  <a href="#" data-toggle="modal" data-target="#recharge" data-id="{{ $u->id }}" class="dropdown-item"><div><i class="fa fa-plus"> </i> Recharge</div></a>
                                                  <a href="#" data-toggle="modal" data-target="#deleteuser" data-id="{{ $u->id }}" class="dropdown-item" href="#"><div><i class="fa fa-trash"></i> Delete</div></a>
                                                  <a href="{{url('/admin/reset/'.$u->id.'/AamarSMS@123')}}" class="dropdown-item"><div><i class="fa fa-refresh"> </i> Reset Pass</div></a>
                                                </div>
                                              </div>
                                              </br></br>
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
                    <p>{{ $userlist->appends(array_filter(Request::all()))->links("pagination::bootstrap-4") }}</p>
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
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New User</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
            <form class="form-horizontal" method="POST" action="{{ url('/admin/new_user') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-3">
                        <label class="form-control-label">User Type: <span class="tx-danger">*</span></label>
                    </div>
                    <div class="col-3">
                        <select class="form-control" name="usertype"  onchange="selectReseller(this.value)" required>
                            <option value="">Select Type</option>
                            <option value="2">Reseller</option>
                            <option value="3">User</option>
                        </select>
                    </div>

                   

                    <div class="col-3"><label class="form-control-label">Assign Executive :</label></div>
                    <div class="col-3">
                        <select class="form-control" name="sales_person">
                            <option value="" >Select Executive</option>
                                    @php
                                    $sales = DB::table('users')->where('role', 4)->get();
                                    @endphp
                                    @foreach($sales as $s)  
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mg-t-20" id="resellerDiv" style="display: none;">
                    <label class="col-sm-4 form-control-label">Reseller: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select class="form-control" name="parent_user">
                            <option value="" >Select Reseller</option>
                            @php
                            $reseller = DB::table('users')->where('role', 2)->get();
                            @endphp
                            @foreach($reseller as $r)  
                                <option value="{{$r->id}}">{{$r->name}}</option>
                            @endforeach
                            
                        </select>
                    </div> 
                </div>

                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Company Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" name="username" class="form-control" placeholder="Enter Full Name" required />
                    </div>
                </div>

                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Representative Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input type="text" name="representative" class="form-control" placeholder="Enter Representative Name" required />
                    </div>
                </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="email" class="form-control" placeholder="Enter Username" required />
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
                            <label class="col-sm-4 form-control-label">Domain Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="domain" class="form-control" placeholder="Your  Domain Name" value="panel.aamarsms.com" required/>
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
                            <label class="col-sm-4 form-control-label">API Enabled: <span class="tx-danger">*</span></label>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="api_enabled" value="1" type="radio" checked>
                                  <span>Yes</span>
                                </label>
                            </div>
                            <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                <label class="rdiobox">
                                  <input name="api_enabled" value="0" type="radio">
                                  <span>No</span>
                                </label>
                            </div>
                        </div>


                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Operator:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select name="dedicated_operator" class="form-control">
                                    <option value="">GLOBAL</option>
                                    <option value="mirtel">MirTel</option>
                                    <option value="rankstel">RanksTel</option>
                                    <option value="adn">ADN</option>
                                    <option value="gp">GP</option>
                                    <option value="robi">Robi</option>
                                    <option value="teletalk">Teletalk</option>
                                    <option value="banglalink">Banglalink</option>
                               </select>
                           </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Assaign Mask: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="selectpicker" name="mask[]" multiple data-live-search="true">
                                    @foreach($masks as $mask)
                                    <option value="{{$mask->id}}">{{$mask->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Assaign SenderID: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="selectpicker" name="nonmask[]" multiple data-live-search="true">
                                    @foreach($nonmasks as $nonmask)
                                    <option value="{{$nonmask->id}}">{{$nonmask->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>



                        
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Rate Plan: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8">
                                <div class="bd bd-gray-300 rounded table-responsive">
                                    <table class="table table-bordered mg-b-0">
                                        <thead>
                                        <tr>
                                            <th>Operator</th>
                                            <th>Non-masking Price</th>
                                            <th>Masking price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="hidden" name="operator[]" value="GP">GrameenPhone</td>
                                                <td><input class="form-control" name="nonmasking_price[]" value="0.3000"></td>
                                                <td><input class="form-control" name="masking_price[]" value="0.5000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="operator[]" value="RB">Robi</td>
                                                <td><input class="form-control" name="nonmasking_price[]" value="0.3000"></td>
                                                <td><input class="form-control" name="masking_price[]" value="0.5000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="operator[]" value="BL">Banglalink</td>
                                                <td><input class="form-control" name="nonmasking_price[]" value="0.3000"></td>
                                                <td><input class="form-control" name="masking_price[]" value="0.5000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="operator[]" value="TL">Teletalk</td>
                                                <td><input class="form-control" name="nonmasking_price[]" value="0.3000"></td>
                                                <td><input class="form-control" name="masking_price[]" value="0.5000"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name="operator[]" value="AL">Airtel</td>
                                                <td><input class="form-control" name="nonmasking_price[]" value="0.3000"></td>
                                                <td><input class="form-control" name="masking_price[]" value="0.5000"></td>
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

<div id="recharge" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Recharge User</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body pd-25 wd-300">
            <form class="form-horizontal" method="POST" action="{{ url('admin/recharge/create') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">User name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="user_name"  value="" readonly="">
                      <input type="hidden" name="customer_id" id="user_id" value="">
                    </div>
                </div>
            </div>

            <div class="row mg-t-20">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Amount: <span class="tx-danger">*</span></label>
                      <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                    </div>
                </div>
            </div>
            <div class="row mg-t-20">
                <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Note: <span class="tx-danger">*</span></label>
                      <textarea type="text" rows="4" rows="3" name="note" class="form-control" placeholder="Enter a note" required ></textarea>
                    </div>
                </div>
            </div>


        </div>


        <div class="modal-footer">
          <button type="submit" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Recharge</button>
          <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
        </div>
    </form>
      </div>
    </div><!-- modal-dialog -->
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#recharge').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'get',
            url: '{{ url('/admin/viewuser/') }}/'+ id,
            success : function(user){
                $('#user_name').val(user[0].name);
                $('#user_id').val(user[0].id);
            }
        });
     });
    });
    
</script>

<script type="text/javascript">


function selectReseller(id){
        //var resellerDiv = getElementById("resellerDiv");
        if(id == '3'){
            $("#resellerDiv").show();
        }else{
            $("#resellerDiv").hide();
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