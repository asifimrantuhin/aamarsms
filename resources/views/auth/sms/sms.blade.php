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
        <p>Please check your mobile message</p>
                    <form class="form-horizontal" method="POST" action="{{url('/verifyotp')}}">
                        {{ csrf_field() }}

                        <input type="hidden"  name="last_insert_id" value="{{$last_insert_id}}"> 
                        <div class="form-group">
                         <input id="otp" type="number" class="form-control" placeholder="Enter 6 digit OTP Code" name="otp" required>
                        </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Verify Code <i class="ion-code-working"></i>
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
