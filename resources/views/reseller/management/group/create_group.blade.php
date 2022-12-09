@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Contact</a>
            <span class="breadcrumb-item active">Create Group</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Create Group</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('/reseller/savegroup') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <label class="col-sm-4 form-control-label">Group Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="group_name" class="form-control" placeholder="Enter Group Name" />
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Type: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <div class="row mg-t-10">
                                    <div class="col-lg-6">
                                        <label class="rdiobox">
                                            <input name="upload_type" value="raw" type="radio" checked="">
                                            <span>Comma separated</span>
                                        </label>
                                    </div>

                                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                        <label class="rdiobox">
                                            <input name="upload_type" value="fileType" type="radio" >
                                            <span>File upload(xls, xlsx, csv, txt)</span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        


                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Numbers : <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea id="raw" rows="6" class="form-control" name="raw_msisdn" 
                                placeholder="Enter Mobile Numbers e.g 8801712345678, 8801912345678"></textarea>
                                <label class="custom-file" id="fileType">
								  <input type="file"  name="file_msisdn"  accept=".txt, .xls, .xlsx, .csv">
								</label>
                            </div>
                        </div>

                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                        <!-- form-layout-footer -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                	<a href={{url('reseller/contact_group')}} <h6 class="tx-uppercase tx-bold tx-14 mg-b-10">Existing Groups</h6></a>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Total MSISDN</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($groups) > 0)
                                @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->contacts_count }}</td>

                                <td><div class="dropdown show ">
                                    <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"></a>
                                          </a>
                                          <a href="#" data-toggle="modal" data-target="#editgroup" data-id="{{ $group->id }}" class="dropdown-item" href="#"><div><i class="fa fa-pencil"> Modify</i></div></a>
                                          <a href="#" data-toggle="modal" data-target="#deletegroup" data-id="{{ $group->id }}" class="dropdown-item" href="#"><div><i class="fa fa-trash"> Delete</i></div></a>
                                        </div>
                                      </div>
                                </td>
                                </tr>
                                @endforeach
                                
                                @else
                                <tr>
                                    <td colspan="3">No Groups yet</td>
                                </tr>
                                @endif                                
                            </tbody>
                        </table>
                    </div>
                    <br/>
                    @if(count($groups) > 0)
                    {{ $groups->links( "pagination::bootstrap-4") }}
                    @endif
                </div>
            </div>
        </div>
    </div>      
</div>

<!-- BASIC MODAL -->
        <div id="editgroup" class="modal fade ">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Group Name</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>               
                <div class="fetched-data"></div>
                <form id="editgrp" action="" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body pd-25 wd-300">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="form-control-label">Group name: <span class="tx-danger">*</span></label>
                                  <input class="form-control" type="text" id="group_name" name="group_name" value="" placeholder="Enter group name" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                      <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
                    </div>
                </form>

              </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->


        <div id="deletegroup" class="modal fade ">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
                      Delete Group?
                  </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               
                <div class="modal-body pd-25 wd-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label">Group name: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" id="del_group_name"  value="" readonly="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                  <a id="deletegrp" href="" type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Yes</a>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">No</button>
                </div>
               
              </div>
            </div><!-- modal-dialog -->
        </div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#fileType").hide();
        $('input:radio[name="upload_type"]').change(function() {
            if ($(this).val() == 'raw') {
                $("#raw").show();
                $("#fileType").hide();
            } else {
                $("#raw").hide();
                $("#fileType").show();
            }
        });
    });

    $(document).ready(function(){
        $('#editgroup').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            console.log(groupid);
            $.ajax({
                type : 'get',
                url: '{{ url('/reseller/viewgroup/') }}/'+ groupid,
                success : function(group){
                    console.log(group[0].name);
                    $('#group_name').val(group[0].name);
                    $("#editgrp").attr('action', 'editgroup/'+group[0].id);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#deletegroup').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'get',
                url: '{{ url('/reseller/viewgroup/') }}/'+ groupid,
                success : function(group){
                    $('#del_group_name').val(group[0].name);
                    $("#deletegrp").attr('href', 'deletegroup/'+group[0].id);
                }
            });
         });
    });
</script>


@endsection
