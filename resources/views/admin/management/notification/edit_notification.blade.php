@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">SMS</a>
            <span class="breadcrumb-item active">Notification Modify</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">

            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Notification</h6>
                        <form class="form-horizontal" method="POST" action="{{url('admin/notify/update/'.$notice->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Notification Text: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="8" cols="50" type="text" name="text" class="form-control">{{$notice->text}}</textarea>  
                                </div>
                            </div>
                           </br>

                           <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Showing Status: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select name="status" class="form-control">
                                    <option value="1" <?php if($notice->status == 1) echo 'selected="selected"'; ?>>Showing</option>
                                    <option value="0" <?php if($notice->status == 0) echo 'selected="selected"';?>>Not Showing</option>
                                   </select>
                            </div>
                        </div>

                            <br>
                            <label class="form-control-label">Showing For: <span class="tx-danger">*</span></label>
                            <div class="grid">
                                <div class="row">
                                  <div class="col-4">
                                    <input type="checkbox" name="reseller" value="1" @if($notice->reseller == 1) checked @endif><span> Reseller</span>
                                  </div>
                                  <div class="col-4">
                                    <input type="checkbox" name="user" value="1" @if($notice->user == 1) checked @endif><span> User</span>
                                  </div>
                                  <div class="col-4">
                                    <input type="checkbox" name="executive" value="1" @if($notice->executive == 1) checked @endif><span> Executive</span>
                                  </div>
                                </div>

                         


                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back</a>
                            </div>

                        </form>

                    </div><!-- form-layout -->

                </div><!-- br-section-wrapper -->

            </div><!-- col-lg-6 -->


        </div><!-- row -->

    </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->

<script>
    // Sms Counter
    $('textarea').keyup(function() {    
        var characterCount = $(this).val().length,
            current_count = $('#current_count'),
            maximum_count = $('#maximum_count'),
            count = $('#count');    
            current_count.text(characterCount);        
    });
    // Sms Counter
    </script>


@endsection
