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
        <p><strong>{{App\Models\User::whereId($user)->pluck('name')->first();}} </strong> Please confirm Password</p>

        <form method="POST" action="{{ url('password/update') }}">
            @csrf

            <input type="hidden"  name="id" value="{{$user}}"> 
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-8">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div> --}}

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
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
