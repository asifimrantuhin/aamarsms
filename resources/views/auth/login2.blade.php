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
<form class="form-horizontal wow zoomIn" method="POST" action="{{ route('login') }}">
  @csrf
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse" style="margin-bottom: 20px;">
        <img src="{{url($image)}}" width="80%">
        </div>
        <!-- <div class="tx-center mg-b-60">&nbsp;</div> -->
        
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

        <div class="form-group">
          <input id="email" type="email" class="form-control" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
                                    <span class="help-block">
                                    <span class="badge badge-danger"> <strong>{{ $errors->first('email')}}</strong></span>
                                    </span>
         @endif
        
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" id="password" type="password" name="password" required>
          
          
          @if ($errors->has('password'))
             <span class="help-block">
             <span class="badge badge-danger"><strong>{{ $errors->first('password') }}</strong></span></span>
          @endif
          
          
          <!-- <a href="{{url('sms/reset')}}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Log In</button>
               

              </div>
      </form>
</div>

@endsection
