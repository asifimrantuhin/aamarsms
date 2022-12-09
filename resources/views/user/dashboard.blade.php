@extends('layouts.admin-master')

@section('content')

@php
$currentBalance = DB::table('recharges')->where('user_id',Auth::user()->id)->latest()->pluck('balance')->first();
$approval = DB::table('users')->whereId(Auth::user()->id)->pluck('approval')->first();
@endphp

     <!-- ########## START: MAIN PANEL ########## -->
     <div class="br-mainpanel">
      <div class="pd-20">
        <h4 class="tx-24"> নোটিশঃ- বিটিআরসি'র নির্দেশনা অনুযায়ী সকল ধরনের SMS বাংলায় প্রেরণ করুন, ধন্যবাদ</h4>
        {{-- <h4 class="tx-gray-800 mg-b-5">User Dashboard</h4> --}}
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-20 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-envelope  tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Campaigns</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_camp}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-balance-scale tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Recharge</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ {{number_format($total_rerg)}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-address-book tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Contacts</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_contacts}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-shield tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Assigned Masks</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$mask}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

      


        <div class="row row-sm mg-t-20">
          <div class="col-sm-6">
          <div class="card pd-0 bd-0 shadow-base">
            <div class="pd-x-30 pd-t-30 pd-b-15">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">SMS Performance</h6>
                </div>
                <div class="tx-13">
                  <p class="mg-b-0"><span class="square-8 rounded-circle bg-success mg-r-10"></span>Success SMS</p>
                  {{-- <p class="mg-b-0"><span class="square-8 rounded-circle bg-danger mg-r-10"></span>Failed SMS</p> --}}
                </div>
              </div>
            </div>
            <div class="pd-x-15 pd-b-15">
              <div id="ch123456" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
            </div>
              </div><!-- card -->
          </div>
          <div class="col-sm-6"> 
              <div class="card pd-0 bd-0 shadow-base">
                  <div class="pd-x-30 pd-t-30 pd-b-15">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Vendor Performance</h6>
                      </div>
                      {{-- <div class="tx-13">
                        <p class="mg-b-0"><span class="square-8 rounded-circle bg-success mg-r-10"></span>Success SMS</p>
                        <p class="mg-b-0"><span class="square-8 rounded-circle bg-danger mg-r-10"></span>Failed SMS</p>
                      </div> --}}
                    </div>
                  </div>       
              <div class="pd-x-15 pd-b-15">
                      <div class="ct_chart br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
                </div>
              </div>
          </div>
          </div>
          <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"  aria-labelledby="staticBackdropLabel" aria-hidden="true" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">Welcome to AamarSMS.</h3>
      </div>
      <div class="modal-body">
      <p>Please select your desired package and recharge your account for sending SMS.</p>

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
</ul>
<input type="hidden" value="100" name="amount" id="total_amount" required/>
<input type="hidden" value="1" name="pack" id="pack" required/>
<button class="btn btn-success" type="submit">SELECT PACKAGE</button>
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
      
    </ul>
    <input type="hidden" value="500" name="amount" id="total_amount" required/>
    <input type="hidden" value="2" name="pack" id="pack" required/>
<button class="btn btn-success" type="submit">SELECT PACKAGE</button>
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
    </ul>
   
    <input type="hidden" value="1000" name="amount" id="total_amount" required/>
    <input type="hidden" value="3" name="pack" id="pack" required/>
<button class="btn btn-success" type="submit">SELECT PACKAGE</button>
            </form>
  </div>
</div>
</div>

      </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="staticNid" data-backdrop="static" tabindex="-1" role="dialog"  aria-labelledby="staticBackdropLabel" aria-hidden="true" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Document Submission</h3>
      </div>
      <div class="modal-body">
      <p>Please upload your document</p>
      <form class="form-horizontal" method="POST" action="{{ url('/user/nid_submission') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        

                        <div class="row mg-t-20">
                        <div class="col-4">NID Front: (max) <span class="tx-danger">*</span></div>
                        <div class="col-8"><input type="file" name="f_nid" required></div>
                        </div>
                        
                        <div class="row mg-t-20">
                        <div class="col-4">NID Back: (max) <span class="tx-danger">*</span></div>
                        <div class="col-8"><input type="file" name="b_nid" required></div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4">Trade License:(max)</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" name="trade">
                            </div>
                        </div>

                        <div class="mg-t-30">
                          <button type="submit" class="btn btn-info">Upload <i class="fa fa-upload"></i></button>
                        </div>
      </form>
  </div>

  
    </div>
</div>
</div>

<div class="modal fade bd-example-modal-lg" id="staticCon" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Document Submitted !!!</h3>
      </div>
      <div class="modal-body">
      <p>Document is uploaded please wait for admin confirmation !!!</p>
      <img class="rounded-circle" width="300px" 
      src="{!! asset('images/tick.png') !!}"></br>

      <label class="form-control-label">Email:</label>
      <strong><label class="form-control-label">info@aamarsms.com</label></strong> </br>
      <label class="form-control-label">WhatsApp:</label>
      <strong><label class="form-control-label">+880100000000</label></strong>



  </div>
</div>
</div>

      </div>
  </div>
</div>



<!-- <script type="text/javascript">
 
  
@if($currentBalance == NULL)  
$(document).ready(function(){
   $("#staticBackdrop").modal('show'); 
});
@endif

@if($approval == 0 && $currentBalance != NULL)
$(document).ready(function(){
   $("#staticNid").modal('show'); 
});
@endif

@if($approval == 2)
$(document).ready(function(){
   $("#staticCon").modal('show'); 
});
@endif

</script> -->

<script type="text/javascript">
  $(function() {
    var dte = "{{$chartdata['datetime']}}";
    var dtArray = dte.split(',');
   var ch1 = new Chartist.Line('#ch123456', {
    labels: dtArray,
   series: [
           [{{$chartdata['success']}}]
           ] 
          },
      {
showArea: true,
       fullWidth: true,
               });

       });
</script>

<script type="text/javascript">
  var animals = ['GP', 'Robi','Airtel', 'Teletalk', 'BL'];

var data = {
series: [{{$operator['gp']}},{{$operator['robi']}},{{$operator['airtel']}},{{$operator['teletalk']}},{{$operator['bl']}}]
};

var sum = function(a, b) {
return a + b
};

new Chartist.Pie('.ct_chart', data, {
labelInterpolationFnc: function(value, idx) {
  var percentage = Math.round(value / data.series.reduce(sum) * 100) + '%';
  return animals[idx] + ' ' + percentage;
}
});
  </script>

@endsection