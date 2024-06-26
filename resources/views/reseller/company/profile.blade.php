@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">Reseller Profile</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <form class="form-horizontal" method="POST" action="{{ url('/reseller/updatecompany') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="row">
                        <div class="col-sm-4"><img
                            class="rounded-circle" width="100px"
                            src="{!! asset('images/company/'.$users->company_image) !!}"></div>
                        <div class="col-sm-8">
                            <div class="row">
                                <label class="col-sm-3 form-control-label">Domain: </label>
                                <label class="col-sm-5 form-control-label"><strong>{{Auth::user()->domain}}</strong></label>
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
                            <label class="col-sm-4 form-control-label">Domain: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="domain" value="{{$users->domain}}" class="form-control" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Company Logo:(<2MB)</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" name="company_image">
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Old Password:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="old_pass" class="form-control"  placeholder="old password to change anything"/>
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