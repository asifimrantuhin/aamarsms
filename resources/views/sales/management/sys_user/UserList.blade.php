@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Assigned Customer</a>
            <span class="breadcrumb-item active">Customer list</span>
        </nav>
    </div>

    <div class="br-pagebody">

        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Assigned Customer List</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                              <input type="text" class="form-control mg-md-l-10" name="name" placeholder="Search with Name">
                              <input type="text" class="form-control mg-md-l-10" name="email" placeholder="Search with Email">
                              <input type="text" class="form-control mg-md-l-10" name="mobile" placeholder="Search with Phone">
                              <select name="userrole"  class="form-control mg-md-l-10">
                                  <option value="">Select Role</option>
                                  <option value="2">Reseller</option>
                                  <option value="3">User</option>
                              </select>
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
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Role</th>
                                        <th>Current Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($customers) > 0)
                                    @foreach($customers as $c)  
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{$c->name}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->mobile}}</td>
                                        <td>
                                            @if($c->role == 1 )
                                                Admin
                                            @elseif($c->role == 2 )
                                                Reseller 
                                            @elseif($c->role == 3 )
                                                User 
                                            @elseif($c->role == 4 )
                                                Sales Executive 
                                            @else
                                                Undefined 
                                            @endif  
                                        </td>
                                        <td>{{number_format(App\Models\Recharge::where('user_id',$c->id)->latest()->pluck('balance')->first(),2)}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td colspan="7">No Customer created yet!</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $customers->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>
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
    $(document).ready(function(){
        $('#deleteuser').on('show.bs.modal', function (e) {
            var id = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'get',
                url: '{{ url('/admin/user/viewuser/') }}/'+ id,
                success : function(user){
                    $('#del_user_name').val(user[0].name);
                    $("#deleteusr").attr('href', '/admin/deleteuser/'+user[0].id);
                }
            });
         });
    });
</script>
@endsection

