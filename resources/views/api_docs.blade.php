@extends('layouts.admin-master')
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Rate Plan</a>
            <span class="breadcrumb-item active">My Plan</span>
        </nav>
    </div>
  
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="row">
                <h3 class="tx-gray-800 tx-bold tx-17 mg-b-10">SERVER URL: {{url('/')}}</h3></br>
                </br>

                <div class="col-lg-12">
                    </br>
                    <form action="{{ url('/downloadapi') }}">
                        <button type="submit" class="btn btn-info">Download API Documentation for Integration <i
                                class="fa fa-download" aria-hidden="true"></i></button>
                    </form>
                    </br>
                </div>
            </div>

            <h4 class="tx-gray-800 tx-bold tx-17 mg-b-10">Standard API: </h4>
            <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-success">Masking</span>
                {{url('api')}}?user={{Auth::user()->email}}&password=XXXX&from=AamarSMS&to=88013XXXXXXXX&text=Masking
                Test</h3>
                <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-info">Non Masking</span>
                    {{url('api')}}?user={{Auth::user()->email}}&password=XXXX&to=88013XXXXXXXX&text=Non Masking
                    Test</h3>
                    </br>
                    <h4 class="tx-gray-800 tx-bold tx-17 mg-b-10">OTP API: </h4>
                    <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-success">Masking</span>
                        {{url('otp')}}?user={{Auth::user()->email}}&password=XXXX&from=AamarSMS&to=88013XXXXXXXX&text=Your
                        OTP is XXXX</h3>
                        <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-info">Non Masking</span>
                            {{url('otp')}}?user={{Auth::user()->email}}&password=XXXX&to=88013XXXXXXXX&text=Your
                            OTP is XXXX</h3>
                            </br>
                            <h4 class="tx-gray-800 tx-bold tx-17 mg-b-10">SMS Status API: </h4>
                            <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-success">SMS Status</span>
                                {{url('smsstatus')}}?user={{Auth::user()->email}}&password=XXXX&smsid=910-17XXXXXXXX
                                </h3>
                                </br>
                                <h4 class="tx-gray-800 tx-bold tx-17 mg-b-10">BALANCE API: </h4>
                                <h4 class="tx-gray-800 tx-14 mg-b-10"><span class="badge badge-warning">Balance</span>
                                    {{url('balance')}}?user={{Auth::user()->email}}&password=XXXX</h3>


        </div>
    </div>
</div>
</div><!-- page body -->

</div>

@endsection