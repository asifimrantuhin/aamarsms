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

      <div class="wow zoomIn login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-20 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
        <img src="{{url($image)}}" width="60%">
        </div>
        <div class="tx-center mg-b-40"> </div>

        <!-- Success && Error Message after action -->
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
        <!-- Success && Error Message after action -->
        <form   method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
          <input type="text" class="form-control" placeholder="Enter your Name" id="name" name="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
           <span class="help-block">
           <strong>{{ $errors->first('name') }}</strong>
           </span>
          @endif
        </div>

            <div class="form-group">
        <input id="email" type="email" class="form-control" placeholder="Enter your valid email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
        <span class="help-block">
        <span class="badge badge-danger">{{ $errors->first('email') }}</span>
        </span>
        @endif
        </div>


        <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
          <input type="number" class="form-control" placeholder="Enter mobile no e.g 0171XXXXXXX" id="mobile" name="mobile" value="{{ old('mobile') }}" required autofocus>
          @if ($errors->has('mobile'))
          <span class="help-block">
          <span class="badge badge-danger">{{ $errors->first('mobile') }}</span>
          </span>
          @endif
        </div>

     

        <div class="form-group">
        <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
        </div>
        
        <input type="hidden" value="29" name="parent_user" id="parent_user"/>
        
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our Company.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        </form>
        <div class="mg-t-10 tx-center">Already a member? <a href="{{ url('/login') }}" class="tx-info">Sign In  <i class="ion-heart"></i></a></div>
      </div>

    </div>

@endsection
