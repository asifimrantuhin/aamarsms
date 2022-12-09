@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Contact</a>
            <span class="breadcrumb-item active">Manage Group</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12 mg-t-20 mg-lg-t-0">

                <div class="br-section-wrapper">
                <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-flex pd-y-20 pd-md-y-0">

                              <input type="text" class="form-control mg-md-l-10" name="gname" placeholder="Group name">&nbsp;

                              <select name="user"  class="form-control mg-md-l-30" data-live-search="true">
                                <option value="">Select User</option>
                                @foreach($users as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                              </select>
                             

                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            </div>
                        </form>
                    </div>
                    <br/>
                    
                    <!-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Existing Groups</h6> -->
                    
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Group Name</th>
                                    <th>Total Contacts</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($groups) > 0)
                                @foreach ($groups as $group)
                                <tr>
                                    <td>{{DB::table('users')->where('id',$group->user_id)->pluck('name')->first()}}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>{{ $group->contacts_count }}</td>
                                    <td class="text-center">
                                        <div class="dropdown show">
                                        {{-- <a href="#" title="Add Contact" data-toggle="modal" data-target="#addContact" data-id="{{ $group->id }}" class="btn btn-outline-primary btn-icon mg-r-5">
                                            <div><i class="fa fa-plus"></i></div>
                                        </a> --}}
                                        <a href="#" title="Import Contact" data-toggle="modal" data-target="#importContact" data-id="{{ $group->id }}" class="btn btn-outline-primary btn-icon mg-r-5">
                                            <div><i class="fa fa-cloud-upload"></i></div>
                                        </a>
                                        <a href="#" title='Edit Group' data-toggle="modal" data-target="#editgroup" data-id="{{ $group->id }}" class="btn btn-outline-primary btn-icon mg-r-5">
                                            <div><i class="fa fa-pencil"></i></div>
                                        </a>
                                        <a href="#" title='Delete Group' data-toggle="modal" data-target="#deletegroup" data-id="{{ $group->id }}" class="btn btn-outline-danger btn-icon mg-r-5">
                                            <div><i class="fa fa-trash"></i></div>
                                        </a>

                                        
                                            <a class="btn btn-outline-info btn-icon mg-r-5" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div><i class="fa fa-download"></i></div>
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                             
                                              <a class="dropdown-item" href="{{url('/admin/download_contacts/csv/'.$group->id)}}">
                                                    <div><i class="fa fa-download">  CSV File</i></div></a>
                                              <a class="dropdown-item" href="{{url('/admin/download_contacts/xlsx/'.$group->id)}}">
                                                    <div><i class="fa fa-download">  XLS File</i></div></a>
                                    
                                             
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


    </div><!-- page body -->

</div>

<!-- BASIC MODAL -->
<div id="addContact" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="min-width: 500px">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><span id="addContactTitle"></span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- @if(isset($group)) -->



            <form id="add-number" action="" method="POST">
                {{csrf_field()}}
                <div class="modal-body pd-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Contact</h6>
                    <br/>
                    <div class="col-lg-12" id='contact_row'>

                        <div class="row" >
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="number[]" value="" placeholder="Enter 11 digit number" required />
                                </div>
                            </div>
                            <div  class="col-lg-2">
                                <button type="button" class="addmore btn btn-primary" onclick="addMore()">
                                    <i class="fa fa-plus">
                                    </i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="addmore_content"></div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
                </div>
            </form>
            <!-- @endif -->
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->



<div id="importContact" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="min-width: 650px">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"><span id="importContactTitle"></span></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- @if(isset($group)) -->

            <form id="import-number" action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body pd-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Contacts</h6>
                    <br/>
                        <!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">MSISDN Upload Type: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <div class="row mg-t-10">
                                    <div class="col-lg-6">
                                        <label class="rdiobox">
                                            <input name="upload_type" value="raw" type="radio" checked="">
                                            <span>Raw comma separated</span>
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
                            <label class="col-sm-4 form-control-label">Mobile Numbers : <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                
                                <textarea id="raw" rows="6" class="form-control" name="raw_msisdn" 
                                placeholder="Enter Mobile Numbers e.g 8801712345678, 8801912345678"></textarea>
                               
								  <input id="fileType" value="fileType" type="file" name="file_msisdn"/>
								
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
                </div>
            </form>
            <!-- @endif -->
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->



<div id="editgroup" class="modal fade ">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Group Name</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- @if(isset($group)) -->


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
            <!-- @endif -->
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
                <a id="deletegrp" href="" type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Yes</a>
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

    // Group Name Edit
    $(document).ready(function(){
        $('#editgroup').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            console.log(groupid);
            $.ajax({
                type : 'get',
                url: '{{ url('/admin/viewgroup/') }}/'+ groupid,
                success : function(group){
                    console.log(group[0].name);
                    $('#group_name').val(group[0].name);
                    $("#editgrp").attr('action', 'editgroup/'+group[0].id);
                }
            });
         });
    });

    $(document).ready(function () {
        $('#addContact').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'get',
                url: '{{ url('/admin/viewgroup/') }}/' + groupid,
                success: function (group) {
                    $('#group_name').val(group[0].name);
                    $('#addContactTitle').text(group[0].name);
                    $("#add-number").attr('action', 'addcontactingroup/' + group[0].id);
                }
            });
        });
    });
    $(document).ready(function () {
        $('#importContact').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'get',
                url: '{{ url('/admin/viewgroup/') }}/' + groupid,
                success: function (group) {
                    $('#group_name').val(group[0].name);
                    $('#importContactTitle').text(group[0].name);
                    $("#import-number").attr('action', 'addcontactingroup/' + group[0].id);
                }
            });
        });
    });

    // Delete Function
    $(document).ready(function(){
        $('#deletegroup').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'get',
                url: '{{ url('/admin/viewgroup/') }}/'+ groupid,
                success : function(group){
                    $('#del_group_name').val(group[0].name);
                    $("#deletegrp").attr('href', 'deletegroup/'+group[0].id);
                }
            });
         });
    });
</script>

<script type="text/javascript">
    function addMore() {
        var form_element = $('#contact_row');
        var form_html = form_element.html();
        $('#addmore_content').append(form_html);


        $('#addmore_content .addmore').removeAttr('onclick').removeClass('btn-primary addmore').addClass('btn-danger removeItem').attr('onclick', 'removeItem($(this))');
        $('#addmore_content .fa').removeClass('fa-plus').addClass('fa-times');

    }

    function removeItem(param) {
        param.parent().parent().remove();
    }
</script>

@endsection