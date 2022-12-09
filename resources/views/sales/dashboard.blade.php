@extends('layouts.admin-master')

@section('content')
<link href="{{url('templates/lib/morris.js/morris.css')}}" rel="stylesheet">

     <!-- ########## START: MAIN PANEL ########## -->
     <div class="br-mainpanel">
      <div class="pd-20">
          <h4 class="tx-gray-800 mg-b-1">Sales Dashboard</h4>
      </div><!-- d-flex -->
  
      <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-teal rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-refresh tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Current Month Sell</p>
                              <p  class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$month_sell}}</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                  <div class="bg-primary rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-user tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                          <a href="{{ url('sales/userlist') }}">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Assigned Customers</p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$asn_cus}}</p>
                          </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                  <div class="bg-br-primary rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-shopping-cart tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Sale <span class="badge badge-success"> Total </span></p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_sell}}</p> 
                          </div>
                      </div>
                  </div>
              </div> 
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                  <div class="bg-danger rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Customer Gathered</p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$g_cus}}</p>
                          </div>
                      </div>
                  </div>
              </div> 
          </div> 
  


          {{-- Graph --}}
          <div class="row row-sm mg-t-20">
            <div class="col-6">
              <div class="card pd-0 bd-0 shadow-base">
                <div class="pd-x-30 pd-t-30 pd-b-15">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Recharge Report</h6>
                    </div>
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle bg-success mg-r-10"></span>Successful Recharge</p>
                    </div>
                  </div><!-- d-flex -->
                </div>
                 <div class="pd-x-15 pd-b-15">
                  <div id="ch123456" class="br-chartist br-chartist-2 ht-200 ht-sm-300"></div>
                </div>
              </div><!-- card -->
            </div>
            <div class="col-6">
              <div class="card pd-0 bd-0 shadow-base">
               
                <div class="bd bd-gray-300 rounded table-responsive">
                          <table class="table mg-b-0">
                              <thead>
                                  <tr>
                                      <th>Customer Name</th>
                                      <th>Type</th>
                                      <th>Mobile Number</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @if(count($customers) > 0)
                                  @foreach ($customers as $cus)
                                  <tr>
                                      <td>{{ $cus->name }}</td>
                                      <td>
                                      @if($cus->role == 1 )
                                                  Admin
                                              @elseif($cus->role == 2 )
                                              <span class="badge badge-success"> Reseller </span>
                                              @elseif($cus->role == 3 )
                                              <span class="badge badge-info"> User </span>
                                              @elseif($cus->role == 4 )
                                                  Sales Executive 
                                              @else
                                                  Undefined 
                                              @endif 
                                      </td>
                                      <td>{{ $cus->mobile }}</td>
                                  </tr>
                                  @endforeach
                                  @else
                                  <tr>
                                      <td colspan="5">No Customer Assigned yet!</td>
                                  </tr>
                                  @endif
                              </tbody>
                          </table>
                      </div>
                      
             </div>
  </div>
             
            </div><!-- col-3 -->
          </div><!-- row -->
  

          </div>
  
    <!-- ########## END: MAIN PANEL ########## -->

    <script type="text/javascript">
        $(function() {
          var dte = "{{$chartdata['datetime']}}";
          var dtArray = dte.split(',');
         var ch1 = new Chartist.Bar('#ch123456', {
          labels: dtArray,
         series: [
                 [{{$chartdata['recharge']}}]
                 ] 
                },
            {
      showArea: true,
             fullWidth: true,
                     });
      
      
             });
    </script>


@endsection


