@extends('layouts.admin-master')

@section('content')

     <!-- ########## START: MAIN PANEL ########## -->
     <div class="br-mainpanel">
      <div class="pd-20">
          <h4 class="tx-gray-800 mg-b-1">Sales Manager Dashboard</h4>
      </div><!-- d-flex -->
  
      <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
              <div class="col-sm-6 col-xl-3">
                  <div class="bg-teal rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-refresh tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Current Month Sale</p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">৳ {{number_format($cur_sale)}}</p>
                              <span class="tx-12 tx-roboto tx-white-6">Sale through Executives</span>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                  <div class="bg-primary rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-user tx-60 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Executive</p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_executive}}</p>
                              <span class="tx-12 tx-roboto tx-white-6">Total Executives</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                  <div class="bg-br-primary rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-shopping-cart tx-50 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Sale <span class="badge badge-success"> Total </span></p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{number_format($total_sale)}}</p>
                              <span class="tx-12 tx-roboto tx-white-6">Refreshed Today</span>
                          </div>
                      </div>
                  </div>
              </div> 
              <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                  <div class="bg-danger rounded overflow-hidden">
                      <div class="pd-25 d-flex align-items-center">
                          <i class="fa fa-users tx-50 lh-0 tx-white op-7"></i>
                          <div class="mg-l-20">
                              <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Customer Gathered</p>
                              <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{$total_data}}</p>
                              <span class="tx-12 tx-roboto tx-white-6">Via Executives</span>
                          </div>
                      </div>
                  </div>
              </div> 
          </div> 
  


     
  

          </div>
  
    <!-- ########## END: MAIN PANEL ########## -->

    


@endsection


