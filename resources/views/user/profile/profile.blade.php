@extends('layouts.admin-master') 
<style>
* {
  box-sizing: border-box;
}

.zoom {
  transition: transform .2s;
  width: 100px;
  height: 100px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(3.5); /* IE 9 */
  -webkit-transform: scale(3.5); /* Safari 3-8 */
  transform: scale(3.5); 
}
</style>
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">User Profile</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <form class="form-horizontal" method="POST" action="{{ url('/user/updateprofile') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="row">
                        <div class="col-sm-4"><img
                            class="rounded-circle" width="100px"
                            src="{!! asset('images/user/'.$users->image) !!}"></br>
                                <a href="{{ url('/user/document') }}" class="btn btn-primary">Documents <i class="fa fa-file"></i></a>
                            </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Name: </label>
                                <label class="col-sm-5 form-control-label">{{Auth::user()->name}}</label>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-3 form-control-label">Email: </label>
                                <label class="col-sm-5 form-control-label"><strong>{{Auth::user()->email}}</strong></label>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-3 form-control-label">Mobile: </label>
                                <label class="col-sm-5 form-control-label"><strong>{{Auth::user()->mobile}}</strong></label>
                            </div>

                             <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Old Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="old_pass" class="form-control"  placeholder="old password to change anything"/>
                            </div>
                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">New Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="new_pass" class="form-control" />
                            </div>
                        </div>

                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Update</button>
                                <button type="Cancel" class="btn btn-secondary">Cancel</button>
                            </div>

                        </div>

                        </div>
                       
                    </div>
                    <!-- form-layout -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <div class="form-layout ">
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Name:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="name" value="{{$users->name}}" class="form-control" required/>
                            </div>
                        </div>
                       
                        
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Profile Photo:(<2MB)</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" name="image">
                            </div>
                        </div>

                        <div class="row mg-t-20">
                        <div class="col-4">NID Front: <span class="text-success"><i class="fa fa-check"></i></span></div>
                        <div class="col-8">
                        @if("{{$users->f_nid}}" == "f_nid.png")
                        <input type="file" name="f_nid">
                        @else
                        <p readonly>{{$users->f_nid}}</p>
                        @endif
                        </div>
                        </div>
                        
                        <div class="row mg-t-20">
                        <div class="col-4">NID Back:<span class="text-success"><i class="fa fa-check"></i></span></div>
                        <div class="col-8">
                        @if("{{$users->b_nid}}" == "b_nid.png")
                        <input type="file" name="b_nid">
                        @else
                        <p readonly>{{$users->b_nid}}</p>
                        @endif
                        </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Trade License:(max 2mb)</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                @if($users->trade == "trade.png")
                                <input type="file" name="trade">
                                @else
                                <p readonly>{{$users->trade}}</p>
                                @endif
                            </div>
                        </div>
                        

                       


                        
                       
                       
                       
                    </div>
                    <!-- form-layout -->
                </div>
            </div>
        </div>       

    </div>
    <!-- br-pagebody -->
</div>





@endsection