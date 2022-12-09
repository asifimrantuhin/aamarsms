@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">SMS</a>
            <span class="breadcrumb-item active">SMS Template</span>
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
                            <th>Name</th>
                            <th>Text</th>
                            <th>Creator</th>
                            <th width="17%">Created On</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($templates) > 0)
                        @foreach ($templates as $t)
                        <tr>
                            <td>{{$t->name}}</td>
                            <td>{{$t->text}}</td>
                            <td>{{$t->user_name}}</td>
                            <td>{{$t->created_at}}</td>
                            <td>
                                <a href="{{url('/admin/edit_template/'.$t->id)}}" class="btn btn-outline-primary btn-icon mg-r-5">
                                    <div><i class="fa fa-pencil"></i></div>
                                </a>
                                <a href="#" title='Delete Template' data-toggle="modal" data-target="#delete" data-id="{{ $t->id }}" class="btn btn-outline-danger btn-icon mg-r-5">
                                    <div><i class="fa fa-trash"></i></div>
                                </a>
                            </td>
                           
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                 
                </div>
                
            
               
                


    </div><!-- page body -->

</div>


<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form-horizontal" method="POST" action="{{ url('admin/template/store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insert Template</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          
            <label class="form-control-label">Template Name: <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <input type="text" name="name" class="form-control" placeholder="Enter Template Name" required="" />
            </div>
             </br>
            <label class="form-control-label">Template Text: <span class="tx-danger">*</span></label>
            <div class="mg-t-10 mg-sm-t-0">
                <textarea rows="8" cols="50" id="campaign_message"  type="text" name="text" class="form-control" value="" id="message" placeholder="Enter Template Text" required></textarea>
                <p>
                    Character Count: <span class="tx-warning"  id="charectercount">0</span>&nbsp; | &nbsp;
                    SMS Length: <span class="tx-warning"  id="smscount">0</span>&nbsp; | &nbsp;
                    SMS Type: <span class="tx-warning"  id="sms-type">Text</span> &nbsp;
                </p>
            </div>

        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary tx-size-xs">Save</button>
          <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>
      </div>
        </form>
    </div><!-- modal-dialog -->
  </div><!-- modal -->

  {{-- Delete Modal --}}
  <div id="delete" class="modal fade ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Template</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-20">

                <label class="form-control-label">Template Name: <span class="tx-danger">*</span></label>
                <div class="mg-t-10 mg-sm-t-0">
                    <input type="text" id="name"  value="" readonly="" class="form-control" />
                </div>

                <label class="form-control-label">Template Text: <span class="tx-danger">*</span></label>
                <div class="mg-t-10 mg-sm-t-0">
                <textarea rows="8" cols="50"  type="text"  id="text"  value="" readonly="" class="form-control"></textarea>
               </div>


            <div class="modal-footer">
                <a id="deletetemp" href="" type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Delete</a>
                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">No</button>
            </div>

        </div>
    </div><!-- modal-dialog -->
</div>


  <script type="text/javascript">
// Datatable Script
    $(document).ready( function () {
    $('#table_id').DataTable();
    });
// Datatable Script

// Sms Counter
var $remaining = $('#remaining'),
    $messages = $remaining.next();

$('#message').keyup(function(){
    var chars = this.value.length,
        messages = Math.ceil(chars / 160),
        remaining = messages * 160 - (chars % (messages * 160) || messages * 160);

    $remaining.text(remaining + ' characters remaining');
    $messages.text(messages + ' message(s)');
});
    // Sms Counter

    // Delete Function
        $('#delete').on('show.bs.modal', function (e) {
            var groupid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'get',
                url: '{{ url('/admin/viewtemplate/') }}/' + groupid,
                success: function (template) {
                    $('#name').val(template[0].name);
                    $('#text').val(template[0].text);
                    $("#deletetemp").attr('href', '/admin/delete_template/' + template[0].id);
                }
            });
        });

    </script>

@endsection