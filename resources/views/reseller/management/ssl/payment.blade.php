@extends('layouts.admin-master') 
@section('content')
<style>
    .accordion .card-header a.collapsed:hover, .accordion .card-header a.collapsed:focus {
        background-color: #17a2b8;
    }

    .accordion .card-header a:hover {
        color: #ffffff;
        text-decoration: none;
    }
</style>
<div class="br-mainpanel">
     
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">
                Account Recharge
            </a>
            <span class="breadcrumb-item active">
                 Payment
            </span>
        </nav>
    </div>
   
    <div class="br-pagebody">
        <!-- Error Or Success Message -->
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
                            </div><!-- d-flex -->
                        </div>
                    @endif
                    <!-- Error Or Success Message -->
        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne" role="tab">
                                <h6 class="mg-b-0">
                                    <a aria-controls="collapseOne" aria-expanded="true" class="tx-white transition" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">
                                        Online  Payment
                                    </a>
                                </h6>
                            </div>
                            <!-- card-header -->
                            <div aria-labelledby="headingOne" class="collapse show" id="collapseOne" role="tabpanel" style="">
                                <div class="card-block pd-20 tx-dark">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="{{ url('/reseller_pay') }}" method="POST" class="needs-validation">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                    <h3><label for="balance">Enter Amount</label></h3>
                                                      <input type="number" value="" name="amount" class="form-control" placeholder="Enter Balance" max="50000">
                                                     </div>
                                                                                              
                                                    <button class="btn btn-danger btn-block">Make Payment </button>
                                                    </div>
                                                </div>
                                            </form>
                                           
                                        </div>
                                        <div class="col-md-6">
                                            <h2>
                                                Your Information
                                            </h2>
                                            <p class="tx-dark">
                                                Name: <strong>{{Auth::user()->name}}</strong><br>
                                                Email: <strong>{{Auth::user()->email}}</strong><br>
                                                Mobile Number: <strong>{{Auth::user()->mobile}}</strong>
                                            </p>
                                            <p>Please recharge atleast 3000 and atmost 50000 BDT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <img src='{{url('images/SSLCommerz-footer.png')}}' width="100%" height="100px"/>
        </div>
        
    </div>
    @endsection
</div>