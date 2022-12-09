@extends('layouts.online-master')

@section('content')
<div class="ht-100v bg-gray-700">
  <div class="modal d-block pos-static">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bd-0 rounded-0 wd-xs-350 wd-xl-auto mg-xl-x-25">
        <div class="modal-body pd-0">
          <div class="row flex-row-reverse no-gutters">
            <div class="col-xl-6 bg-primary">
              <div class="pd-40">
                <h4 class="tx-white mg-b-20"><span>[</span> bracket + <span>]</span></h4>
                <p class="tx-white op-7 mg-b-60">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p class="tx-white tx-13">
                  <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                  <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                </p>
              </div>
            </div><!-- col-6 -->
            <div class="col-xl-6">
              <div class="pd-30">
                <div class="pd-xs-x-30 pd-y-10">
                  <h5 class="tx-xs-28 tx-inverse mg-b-5">Let's have a try!!!</h5>
                  <br>
                  <form method="POST" action="{{ route('register') }}">
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

                    <input type="hidden" value="29" name="parent_user" id="parent_user" />

                    <button type="submit" class="btn btn-info btn-block">Sign Up <i class="fa fa-plus-circle"></i></button>

                  </form>
                </div>
              </div><!-- pd-20 -->
            </div><!-- col-6 -->

          </div><!-- row -->
        </div><!-- modal-body -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</div><!-- pd-y-50 -->

@endsection