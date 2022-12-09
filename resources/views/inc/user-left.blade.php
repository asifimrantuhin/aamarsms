<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('user') }}"><span>[</span>AamarSMS<span>]</span></a></div>

<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('user') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;    Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
       
<!--        <a href="{{ url('user/new-campaign') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Send SMS </span>
            </div>
        </a>
        <a href="{{ url('user/db-campaign') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    DB Campaign </span>
            </div>
        </a>
        <a href="{{ url('user/new-dynamic-sms') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Dynamic SMS </span>
            </div>
        </a>-->
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Messaging</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
             <li class="nav-item"><a href="{{ url('user/new-campaign') }}" class="nav-link">Send SMS</a></li>
            <!-- <li class="nav-item"><a href="{{ url('user/new-dynamic-sms') }}" class="nav-link">Dynamic SMS</a></li>
            <li class="nav-item"><a href="{{ url('user/db-campaign') }}" class="nav-link">Database SMS</a></li> -->
        </ul>
        <!-- <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Messaging </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('user/new-campaign') }}" class="nav-link"> Send SMS</a></li>
            <li class="nav-item"><a href="{{ url('user/campaign-details') }}" class="nav-link">Campaign Report</a></li>
        </ul> -->
        <a href="{{ url('user/payment') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-briefcase tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Account Recharge </span>
            </div>
        </a>

         <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Contacts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
             
            <li class="nav-item"><a href="{{ url('user/create-group') }}" class="nav-link">Add Contact</a></li>
            <li class="nav-item"><a href="{{ url('user/manage-group') }}" class="nav-link">Manage Group</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Rate</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('user/myplan') }}" class="nav-link">My Rate Plan</a></li>
        </ul>
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Account</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('user/account-summary') }}" class="nav-link">Account Summary</a></li>
           <li class="nav-item"><a href="{{ url('user/balance-history') }}" class="nav-link">Balance History</a></li>
           <!-- <li class="nav-item"><a href="{{ url('user/refund-history') }}" class="nav-link" >Refund History</a></li> -->
           <li class="nav-item"><a href="{{ url('user/transaction-history') }}" class="nav-link">Transaction History</a></li>
           
        </ul>
         
         
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <!-- <li class="nav-item"><a href="{{ url('user/graphical-report') }}" class="nav-link">Graphical Report</a></li> -->
          <li class="nav-item"><a href="{{ url('user/cost-report') }}" class="nav-link">Cost Report</a></li>
          <li class="nav-item"><a href="{{ url('user/campaign-details') }}" class="nav-link">Campaign Report</a></li>
        </ul>
         <a href="{{ url('user/api-docs') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-document-text tx-22"></i>
                <span class="menu-item-label">    &nbsp;   API </span>
                 
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
    </div><!-- br-sideleft-menu -->

   <!--  <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9"> Information Summary</label>

    <div class="info-list">
        <div class="d-flex align-items-center justify-content-between pd-x-15">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">SMS Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div>

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">SMS Left</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">68.05</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div>

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Failed</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">0.02%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div>

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div>
    </div> -->

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->