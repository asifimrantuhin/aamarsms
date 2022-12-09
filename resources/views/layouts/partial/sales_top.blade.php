<!-- Data Source -->
  @php
  $notification = App\Models\Notification::where(['status'=>1,'executive'=>1])->orderby('id','DESC')->paginate(5);
  $punch = App\Models\Attendence::where('user_id',Auth::user()->id)->whereDate('created_at', date("Y-m-d"))->count();
  @endphp
<!-- Data Source -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="align-left" style="padding: 10px 20px;">
            <img src="{{url('images/logo.png')}}" style="height: 40px" />
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
      @if($punch>0)
    <a class="btn btn-warning" href={{url('sales/attendence')}}>Check Out <i class="fa fa-fingerprint"></i></a>
    @else
    <a class="btn btn-info text-white" href={{url('sales/attendence')}}>Check In <i class="fa fa-fingerprint"></i></a>
     @endif
       
          
          <nav class="nav">
  
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              @if(count($notification) > 0)
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              @else
              <span class="square-8 bg-success pos-absolute t-15 r-5 rounded-circle"></span>
              @endif
              
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
  
              <div class="media-list">
                <!-- loop starts here -->
                @if(count($notification) > 0)
                @foreach($notification as $not)
                  <a href="" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                      <img src='{{asset('images/user/'.DB::table('users')->whereId($not->user_id)->pluck('image')->first())}}' class="wd-40 rounded-circle" alt="">
                      <div class="media-body">
                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800"></strong> {{$not->text}}</p>
                        <span class="tx-12">{{DB::table('users')->whereId($not->user_id)->pluck('name')->first()}} on {{ date('d-m-y h:i:s',strtotime($not->created_at))}}</span>
                      </div>
                    </div><!-- media -->
                  </a>
                @endforeach
                @else
                <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                  <label class="tx-12 tx-success tx-uppercase tx-spacing-2 mg-b-0">No Notification is there !!!</label>
                </div>
                @endif
               
                <!-- loop ends here -->
               
               
               
                {{-- <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div> --}}
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
         
          
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{Auth::user()->name}}</span>
                    <img class="rounded-circle" width="32px" src="{!! asset('images/user/'.Auth::user()->image) !!}">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{url('sales/profile')}}"><i class="icon ion-ios-person"></i> Profile</a></li>
                        <li><a href="{{url('logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->