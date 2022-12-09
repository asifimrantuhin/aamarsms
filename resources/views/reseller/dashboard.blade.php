@extends('layouts.admin-master')

@section('content')
<div class="br-mainpanel">
    <div class="pd-20">
        <h4 class="tx-gray-800 mg-b-5">Reseller Dashboard</h4>
    </div>

    <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Users</p>
                            <p  class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_users}}</p>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-balance-scale tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Recharge</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ {{number_format($total_recharge)}}</p>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-envelope tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Sent SMS &nbsp;<span class="badge badge-pill badge-success"> Today </span></p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$daily_campaign}}</p> 
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-shield tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Mask</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_mask}}</p>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 --> 
        </div>



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
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-danger mg-r-10"></span>Failed SMS</p>
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
                          <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Vendor Performance, Total SMS= {{number_format($operator['gp']+$operator['robi']+$operator['bl']+$operator['teletalk']+$operator['airtel'])}}</h6>
                        <div class="tx-13">
                        <p class="mg-b-0">Grameenphone: <strong>{{$operator['gp']}}</strong></p>
                        <p class="mg-b-0">Robi: <strong>{{$operator['robi']}}</strong></p>
                        </div>
                      </div>
                      <div class="tx-13">
                        <p class="mg-b-0">Banglalink: <strong>{{$operator['bl']}}</strong></p>
                        <p class="mg-b-0">Teletalk: <strong>{{$operator['teletalk']}}</strong></p>
                        <p class="mg-b-0">Airtel: <strong>{{$operator['airtel']}}</strong></p>
                      </div>
                    </div>
                  </div>       
                  <div class="pd-x-15 pd-b-15">
                    <div class="ct_chart br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
                    
              </div>
            </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $(function() {
      var dte = "{{$chartdata['datetime']}}";
      var dtArray = dte.split(',');
     var ch1 = new Chartist.Line('#ch123456', {
      labels: dtArray,
     series: [
             [{{$chartdata['success']}}],[{{$chartdata['failed']}}]
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