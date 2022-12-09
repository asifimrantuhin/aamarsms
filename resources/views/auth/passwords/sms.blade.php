@extends('layouts.home-master')

@section('content')

<?php 
$image  ='images/logo.png'; 
$logo = isset($siteConfig->logo)?$siteConfig->logo:'' ; 
// print_r($siteConfig) ; exit ; 
if($logo){
    $image  ='resellerlogouploads/'.$logo; 
}

?>
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
        <img src="{{url($image)}}" width="80%">
        </div>
        <div class="tx-center mg-b-60">&nbsp;</div>
                <div class="panel-body">
                            <!-- Success && Error Message Start -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span>{{ $message }}</span>
            </div>
      </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-bordered alert-danger" role="alert">
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-close alert-icon tx-24"></i>
              <span>{{ $message }}</span>
            </div>
        </div>
    @endif
    <!-- Success && Error Message Start -->
    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ url('sms/sendsms') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <input id="mobile" type="text" class="form-control" placeholder="Enter registered number" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <span class="badge badge-danger"><strong>{{ $errors->first('mobile') }}</strong></span>
                                    </span>
                                @endif
                            </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send OTP<i class="ion-forward"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
