<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('reseller/dashboard') }}"><span>[</span>AamarSMS<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('reseller/dashboard') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Messaging </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('reseller/campaign') }}" class="nav-link"> Send SMS</a></li>
            <li class="nav-item"><a href="{{ url('reseller/template') }}" class="nav-link">SMS Template</a></li>
            <!-- <li class="nav-item"><a href="{{ url('reseller/new-dynamic-sms') }}" class="nav-link"> Dynamic SMS</a></li> -->
            <li class="nav-item"><a href="{{ url('reseller/campaign_list') }}" class="nav-link">Campaign List</a></li> 
        </ul>
         <a href="{{ url('reseller/ssl_payment') }}" class="br-menu-link">
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
             
            <li class="nav-item"><a href="{{ url('reseller/create_group') }}" class="nav-link">New Group</a></li>
            <li class="nav-item"><a href="{{ url('reseller/contact_group') }}" class="nav-link">Manage Group</a></li>
        </ul>
        
        
        {{-- <a href="{{ url('reseller/mask') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-contrast tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Masks </span>
                <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
            </div><!-- menu-item -->
        </a> --}}
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Rate </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('reseller/rateplan') }}" class="nav-link">User Rate</a></li>
            <li class="nav-item"><a href="{{ url('reseller/myplan') }}" class="nav-link">My Plan</a></li>
        </ul>
        <a href="{{ url('reseller/userlist') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-people tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Users </span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Recharge</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ url('reseller/user_recharge_history') }}" class="nav-link">User Recharge</a></li>
           {{-- <li class="nav-item"><a href="{{ url('reseller/user-refund-history') }}" class="nav-link">User Refund History</a></li> --}}
           <li class="nav-item"><a href="{{ url('reseller/reseller_recharge_history') }}" class="nav-link">My Recharge</a></li>
           <li class="nav-item"><a href="{{ url('reseller/balance_history') }}" class="nav-link">Balance History</a></li>
        </ul>
         
         
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('reseller/My_smsReport') }}" class="nav-link">Day wise My Summery</a></li>
          {{-- <li class="nav-item"><a href="{{ url('reseller/userReport') }}" class="nav-link">Day wise Users Summery</a></li> --}}
          <li class="nav-item"><a href="{{ url('reseller/userReport') }}" class="nav-link">User SMS Report</a></li>    
        </ul>

       
        
    </div><!-- br-sideleft-menu -->
    <a href="{{ url('reseller/api') }}" class="br-menu-link">
        <div class="br-menu-item">
            <i class="menu-item-icon ion-android-globe tx-22"></i>
            <span class="menu-item-label">    &nbsp;   API </span>
             
        </div><!-- menu-item -->
    </a><!-- br-menu-link -->
    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->