@extends('layouts.admin-master')
@section('content')

@php
$totaldeliveredsms = DB::table('sms_transactions')->count();
$totalpendingsms = DB::table('sms_sender_table')
    ->where('status', 1)
    ->count();
$totalfailedsms = DB::table('sms_sender_table')
    ->where('status', 2)
    ->count();

$totaldeliveredcampaign = DB::table('campaigns')
    ->whereIn('status',[1])
    ->count();
$totalpendingcampaign = DB::table('campaigns')
    ->whereIn('status',[2,4])
    ->count();
$totalsell = DB::table('recharges')->where('type', 'recharge')->where('amount', '>', 10)->sum('amount');
$apiclient = DB::table('users')->where('api_enabled', 1)->count();
@endphp

     <!-- ########## START: MAIN PANEL ########## -->
     <div class="br-mainpanel">
      <div class="pd-10">
        <h4 class="tx-gray-800 mg-b-5">Admin Dashboard</h4>
        <p class="mg-b-0"> </p>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Users</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_users->count()}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Pending SMS</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$totalpendingsms+$totalfailedsms}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Delevered SMS</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$totaldeliveredsms}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Failed SMS</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$totalfailedsms}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Campaign Pending</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$totalpendingcampaign}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Message In Queue</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$totalpendingsms}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->

          
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-balance-scale tx-36 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Recharge</p>
                  <p class="tx-20 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ 0</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-balance-scale tx-36 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Sale</p>
                  <p class="tx-20 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ {{number_format($totalsell)}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-balance-scale tx-36 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Vendor Balance</p>
                  <p class="tx-20 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ {{number_format($balance)}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-envelope tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Campaign</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$todays_campaign}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-shield tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Masks</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_mask}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 ">
            <div class="bg-ajra rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-shield tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">API Client</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$apiclient}}</p>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

      


        <div class="row row-sm mg-t-10">
          <div class="col-sm-6">
          <div class="card pd-0 bd-0 shadow-base">
            <div class="pd-x-30 pd-t-30 pd-b-15">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Daily SMS Report</h6>
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

          <div class="row row-sm mg-t-10">
            <div class="col-sm-6">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Revenue Report</h6>
                  </div>
                  <div class="tx-13">
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-success mg-r-10"></span>Income</p>
                    <p class="mg-b-0"><span class="square-8 rounded-circle bg-danger mg-r-10"></span>Expense</p>
                  </div>
                </div>
              </div>
              <div class="pd-x-15 pd-b-15">
                <div id="revenue" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
              </div>
                </div><!-- card -->
            </div>
            {{-- <div class="col-sm-6"> 
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
                </div> --}}


            </div>
            </div>


      </div>
  </div>
</div>



<script type="text/javascript">
  $(function() {
    var dte = "{{$chartdata['datetime']}}";
    var dtArray = dte.split(',');
   var ch1 = new Chartist.Bar('#ch123456', {
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
  $(function() {
   
   var ch1 = new Chartist.Bar('#revenue', {
    labels: ['This Month', 'This Year', 'Total'],
   series: [
           [{{$currentmonth_revenue[0]['income']}},{{$currentyear_revenue[0]['income']}},{{$totalrevenue[0]['income']}}],
           [{{$currentmonth_revenue[0]['expense']}},{{$currentyear_revenue[0]['expense']}},{{$totalrevenue[0]['expense']}}]
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

var data = {series: [{{$operator['gp']}},{{$operator['robi']}},{{$operator['airtel']}},{{$operator['teletalk']}},{{$operator['bl']}}]
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