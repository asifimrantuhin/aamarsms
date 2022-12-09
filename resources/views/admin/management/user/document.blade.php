@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active">User Data</span>
        </nav>
    </div>


    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">User Document</h6>
                        <a class="btn btn-info" href="{{ url('/admin/approval/'.$user->id)}}">Approve <i class="fa fa-check"></i></a>
                        <a class="btn btn-warning" href="{{ url('/admin/rework/'.$user->id)}}">Rework <i class="fa fa-refresh"></i></a>
                       

                        
 <div class="row mg-t-20">
        <div class="col-2"><label class="form-control-label">NID Front:</label></div>
        <div class="col-4">
        <a href="#" class="pop">
        <img src="{!! asset('images/user/nid/'.$user->f_nid) !!}" style="width: 300px; height: 200px;"></a>
        </div>
        <div class="col-2"><label class="form-control-label">NID Back:</label></div>
        <div class="col-4">
        <a href="#" class="pop">
        <img src="{!! asset('images/user/nid/'.$user->b_nid) !!}" style="width: 300px; height: 200px;"></a>
        </div>
        </div>

        <div class="row mg-t-20">
        <div class="col-4"><label class="form-control-label">Trade License: <a class="btn btn-warning" href="{{ url('/admin/trade_rework/'.$user->id)}}">Rework <i class="fa fa-refresh"></i></a></label></div>
        <div class="col-8">
        <a href="#" class="pop">
        <img src="{!! asset('images/user/trade/'.$user->trade) !!}" style="width: 300px; height: 200px;"></a>
        </div>
        </div>
        </br>


<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content"  >              
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div> 
      <div class="modal-footer">
          <div class="col-xs-12">
               <p class="text-left"><b>Company: {{$user->name}} <br> Presentative: {{$user->representative}}</b></p>

          </div>

      </div>


    </div>
  </div>
</div>
                       


                       
                       
                       
                            
                        


                    </div>
                </div>
            </div>

            
        </div>
    </div>      
</div>

<script>
 $(function() {
            $('.pop').on('click', function() {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');   
            });     
    });
    </script>

@endsection
