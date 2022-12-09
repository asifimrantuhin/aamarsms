<div class="br-header">
            <div class="br-header-left">
                <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
                <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
                <div class="align-left" style="padding: 10px 20px;">
                   <!--  <img src="{{url('images/logo.png')}}" style="height: 40px" /> -->
                </div><!-- input-group -->
            </div><!-- br-header-left -->
            <body onload=display_ct();>
             <span id='ct' ></span>
            <div class="br-header-right">
                <nav class="nav">
                    <div class="dropdown">
                        <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                            <i class="icon ion-ios-email-outline tx-24"></i>
                            <!-- start: if statement -->
                            
                            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                            <!-- end: if statement -->
                        </a>
                     
                    </div><!-- dropdown -->
                 
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name hidden-md-down">{{Auth::user()->name}}</span>
                            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                            <span class="square-10 bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <li><a href="{{url('admin/userprofile')}}"><i class="icon ion-ios-person"></i> Profile</a></li>
                                <li><a href="{{url('admin/settings')}}"><i class="icon ion-ios-gear"></i> Settings</a></li> 
                                <li><a href="{{url('logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                            </ul>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                </nav>
            </div><!-- br-header-right -->
        </div><!-- br-header -->