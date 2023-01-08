@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Masks</a>
            <span class="breadcrumb-item active">Manage Non-Masking SenderID</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <!--{{ csrf_field() }}-->
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10">
                                <a href="" class="btn btn-info  pd-y-12 pd-x-25" data-toggle="modal" data-target="#modaldemo1">New SenderID <i class="fa fa-plus"></i></a>
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                        <select  class="selectpicker form-control" name="mask_name"  data-live-search="true">
                                            <option value="">All</option>
                                            @foreach($mask as $m)
                                            <option value="{{$m->name}}">{{$m->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                {{-- <div class="input-group  mg-b-10 mg-r-10">
                                <select name="user"  class="form-control mg-md-l-10">
                                    <option value="">All</option>
                                    @foreach($reseller as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                </select>
                                </div> --}}
                               
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                   value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                   value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br/>
                   
                    <div class="bd-gray-300">
                        <table  class="table table-hover">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>SenderID</th>
                                        <th>Operator</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($masks) > 0)
                                @php $i=1; @endphp
                                @foreach ($masks as $mask)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $mask->name }}</td>
                                    <td>{{ ucfirst($mask->operator_name) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($mask->created_at)) }}</td>
                                    <td>
                                        @if($mask->status)
                                        <span class="badge badge-pill badge-success"> Active </span>
                                        @else
                                        <span class="badge badge-pill badge-warning"> Inactive  </span>
                                        @endif
                                    </td>
                                    <td>
                                            
                                        <div class="dropdown show">
                                            <a class="dropdown-toggle btn btn-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                          
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <a  href="#">
                                                @if($mask->status)
                                                <a href="{{url('/admin/nonmask_status/'.$mask->id.'/0')}}" class="dropdown-item"><i class="ion-pause"> Inactive</i></a>
                                                @else
                                                 <a href="{{url('/admin/nonmask_status/'.$mask->id.'/1')}}"  class="dropdown-item"><i class="ion-checkmark"> Active</i></a>
                                                 @endif
                                                 @if($mask->status == 0)
                                                <a href="#" data-toggle="modal" data-target="#deletemask" data-id="{{ $mask->id }}" class="dropdown-item">
                                                <div><i class="fa fa-trash"> Destroy</i></div>
                                               </a>                                        
                                               @endif

                                            </div>
                                          </div>
                                    </td>
                                   
                                </tr>
                                @endforeach
                                
                                @else
                                <tr>
                                    <td colspan="6">No Mask Found !!!</td>
                                </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                    <p>{{ $masks->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div> 
        </div>
    </div>      
</div>



<!-- BASIC MODAL -->
<div id="modaldemo1" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
      <div class="modal-content bd-0 tx-14">
        <form class="form-horizontal" method="POST" action="{{ url('admin/nonmask/store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Insert SenderID</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-25">
            <div class="row">
                <label class="col-sm-5 form-control-label">Operator: <span class="tx-danger">*</span></label>
                <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                    <select  class="selectpicker form-control" name="operator_name"  data-live-search="true">
                        <option value="">Select Operator</option>
                        @foreach($operator as $m)
                        <option value="{{$m->name}}">{{ucfirst($m->name)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

<br/>
            <div class="row">
                <label class="col-sm-5 form-control-label">SenderID: <span class="tx-danger">*</span></label>
                <div class="col-sm-7 mg-t-10 mg-sm-t-0">
                    <input type="text" name="name" class="form-control" placeholder="Write SenderID" required="" />
                </div>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save</button>
          <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</form>



<div id="deletemask" class="modal fade ">
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
                      <label class="form-control-label">Mask name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="mask_name"  value="" readonly="">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
          <a id="deletemsk" href="" type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Delete  <i class="ion-trash-a"></i></a>
          <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
        </div>
       
      </div>
    </div><!-- modal-dialog -->
</div>

<script type="text/javascript">
$(document).ready(function(){
$('#deletemask').on('show.bs.modal', function (e) {
    var id = $(e.relatedTarget).data('id');
    $.ajax({
        type : 'get',
        url: '{{ url('/admin/viewnonmask/') }}/'+ id,
        success : function(mask){
            $('#mask_name').val(mask[0].name);
            $("#deletemsk").attr('href', '/admin/delete_nonmask/'+mask[0].id);
        }
    });
 });
});
</script>

@endsection
