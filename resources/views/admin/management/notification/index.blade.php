@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Notification</span>
        </nav>
    </div>
    
    <div class="br-pagebody">
       
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <button href="" class="btn btn-info" data-toggle="modal" data-target="#modaldemo3">Add New<i class="fa fa-plus"></i></button>
                    <div class="table-wrapper">
                <table id="table_id" class="table table-bordered mg-b-0">
                    <thead>
                        <tr>
                            <th>Text</th>
                            <th>Status</th>
                            <th>User</th>
                            <th>Reseller</th>
                            <th>Executive</th>
                            <th width="17%">Posted On</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($notifications) > 0)
                        @foreach ($notifications as $n)
                        <tr>
                            <td>{{$n->text}}</td>
                            <td>@if($n->status == 1)<span class="tx-success tx-bold">Showing</span> @else <span class="tx-danger">Not Showing</span> @endif</td>
                            <td>@if($n->user == 1) <span class="tx-success tx-bold">Showing</span> @else <span class="tx-danger">Not Showing</span> @endif</td>
                            <td>@if($n->reseller == 1) <span class="tx-success tx-bold">Showing</span> @else <span class="tx-danger">Not Showing </span> @endif</td>
                            <td>@if($n->executive == 1) <span class="tx-success tx-bold">Showing</span> @else <span class="tx-danger">Not Showing </span> @endif</td>
                            <td>{{date('d-m-y',strtotime($n->created_at))}}</td>
                            <td>
                                <div class="dropdown show">
                                    <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      
                                      
                                      <a class="dropdown-item" href="{{url('/admin/notify/edit/'.$n->id)}}">
                                            <div><i class="fa fa-pencil">  Modify</i></div></a>
                                     
                                      <a class="dropdown-item"  href="#" data-toggle="modal" data-target="#delete" data-id="{{ $n->id }}">
                                        <div><i class="fa fa-trash"> Delete</i></div></a>
                                     
                                    </div>
                                  </div>

                                
                               
                            </td>
                           
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                 
                </div>
                
            
               
                


    </div><!-- page body -->

</div>

<div id="delete" class="modal fade ">
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
                      <label class="form-control-label">Notification Text: <span class="tx-danger">*</span></label>
                      <textarea rows="8" cols="50" class="form-control" type="text" id="del_notify_name"  value="" readonly=""></textarea>
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

<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form-horizontal" method="POST" action="{{ url('admin/notify/store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Notification</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          
            <label class="form-control-label">Notification Text: <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <textarea rows="8" cols="50" type="text" name="text" class="form-control" value="" placeholder="Enter Notification Text" required></textarea>
            </div>
            <br>
            <label class="form-control-label">Showing For: <span class="tx-danger">*</span></label>
            <div class="grid">
                <div class="row">
                  <div class="col-4"><input type="checkbox" name="reseller" value="1">
                    <label for="check-1">Reseller</label></div>
                  <div class="col-4"><input type="checkbox" name="user" value="1">
                    <label for="check-2">User</label></div>
                  <div><input type="checkbox" name="sales" value="1">
                    <label for="check-3">Sales Executive</label></div>
                </div>
        </div><!-- modal-body -->

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary tx-size-xs">Post</button>
          <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>
      </div>
        </form>
    </div><!-- modal-dialog -->
  </div><!-- modal -->







  <script type="text/javascript">
// Datatable Script
    $(document).ready( function () {
    $('#table_id').DataTable();
    });
// Datatable Script

$(document).ready(function(){
$('#delete').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).data('id');
    $.ajax({
        type : 'get',
        url: '{{ url('/admin/viewnotify/') }}/'+ id,
        success : function(notify){
            $('#del_notify_name').val(notify.text);
            $("#deleteusr").attr('href', '/admin/delete_notify/'+notify.id);
        }
    });
 });
});

    </script>

@endsection