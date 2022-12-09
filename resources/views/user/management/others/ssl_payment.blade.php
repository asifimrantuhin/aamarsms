@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">
                Account Recharge
            </a> 
        </nav>
    </div>


<div class="d-flex justify-content-center">
      <div class="snip1214">
  <div class="plan">
  <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
    <h3 class="plan-title">
     Package # 1
    </h3>
    <div class="plan-cost"><span class="plan-price">Tk 0.30</span><span class="plan-type">/ SMS</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"></i>Non-Masking</li>
      <li><i class="ion-checkmark"></i>Web & API</li>
      <li><h6><strong><i class="ion-checkmark"></i>৳ 100 </strong></h6></li>
      <input type="checkbox" id="terms" required> <h7>I have read and agree to the website's <a href="http://www.AamarSMS.com/terms-and-conditions.html">Terms and Conditions</a>,<a href="http://www.AamarSMS.com/privacy-policy.html">Privacy Policy</a>, and <a href="http://www.AamarSMS.com/refund-policy.html">Refund Policy.</a>*</h7>
      <li><button class="btn btn-success" type="submit">SELECT PACKAGE</button></li>
</ul>
<input type="hidden" value="100" name="amount" id="total_amount" required/>
<input type="hidden" value="1" name="pack" id="pack" required/>
</form>          
  </div>
  <div class="plan">
  <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
    <h3 class="plan-title">
    Package # 2
    </h3>
    <div class="plan-cost"><span class="plan-price">Tk 0.29</span><span class="plan-type">/ SMS</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"> </i>Non Masking</li>
      <li><i class="ion-checkmark"> </i>Web & API</li>
      <li><h6><strong><i class="ion-checkmark"> </i> ৳ 500 </strong></h6></li>
      <input type="checkbox" id="terms" required> <h7>I have read and agree to the website's <a href="http://www.AamarSMS.com/terms-and-conditions.html">Terms and Conditions</a>,<a href="http://www.AamarSMS.com/privacy-policy.html">Privacy Policy</a>, and <a href="http://www.AamarSMS.com/refund-policy.html">Refund Policy.</a>*</h7>
      <li><button class="btn btn-success" type="submit">SELECT PACKAGE</button></li>
    </ul>
    <input type="hidden" value="500" name="amount" id="total_amount" required/>
    <input type="hidden" value="2" name="pack" id="pack" required/>
            </form>
  </div>
  
  <div class="plan">
  <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
    <h3 class="plan-title">
   Package # 3
    </h3>
    <div class="plan-cost"><span class="plan-price">Tk 0.28</span><span class="plan-type">/ SMS</span></div>
    <ul class="plan-features">
    <li><i class="ion-checkmark"> </i>Non Masking</li>
    <li><i class="ion-checkmark"> </i>Web & API</li>
    <li><h6><strong><i class="ion-checkmark"> </i> ৳ 1000 </strong></h6></li>
    <input type="checkbox" id="terms" required> <h7>I have read and agree to the website's <a href="http://www.AamarSMS.com/terms-and-conditions.html">Terms and Conditions</a>,<a href="http://www.AamarSMS.com/privacy-policy.html">Privacy Policy</a>, and <a href="http://www.AamarSMS.com/refund-policy.html">Refund Policy.</a>*</h7>
    <li><button class="btn btn-success" type="submit">SELECT PACKAGE</button></li>
    
    </ul>
   
    <input type="hidden" value="1000" name="amount" id="total_amount" required/>
    <input type="hidden" value="3" name="pack" id="pack" required/>
            </form>
  </div>
</div>
</div>
</div>

    
   
    @endsection
