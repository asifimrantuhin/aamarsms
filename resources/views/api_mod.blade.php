@extends('layouts.admin-master')
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">API</a>
            <span class="breadcrumb-item active">System API Modification</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">

                <div class="col-lg-6">
                    <h5>Present API Documentaion</h5></br>
                    <form action="{{ url('/downloadapi') }}">
                        <button type="submit" class="btn btn-info">Download Documentation <i
                                class="fa fa-download" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/uploadapi') }}" enctype="multipart/form-data">
                        @csrf
                    <h5>Upload New API Documentaion</h5></br>
                    <input type="file" name="file"  required>


                    <div class="form-layout-footer mg-t-30">
                        <button type="submit" class="btn btn-success">UPLOAD <i class="fa fa-upload"></i></button>
                    </div>
                    </form>
                </div>




            </div>

            
             


        </div>
    </div>
</div>
</div><!-- page body -->

</div>

@endsection