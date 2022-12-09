<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('reseller') }}"><span>[</span>AamarSMS<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('reseller') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Messaging </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('reseller/new-campaign') }}" class="nav-link"> Send SMS</a></li>
            <!-- <li class="nav-item"><a href="{{ url('reseller/new-dynamic-sms') }}" class="nav-link"> Dynamic SMS</a></li>
            <li class="nav-item"><a href="{{ url('reseller/campaign-details') }}" class="nav-link">Campaign Details</a></li> -->
        </ul>
         <a href="{{ url('reseller/bkash-payment') }}" class="br-menu-link">
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
             
            <li class="nav-item"><a href="{{ url('reseller/create-group') }}" class="nav-link">New Group</a></li>
            <li class="nav-item"><a href="{{ url('reseller/manage-group') }}" class="nav-link">Manage Group</a></li>
        </ul>
        
        
        <a href="{{ url('reseller/create-mask') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-contrast tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Masks </span>
                <!-- <i class="menu-item-arrow fa fa-angle-down"></i> -->
            </div><!-- menu-item -->
        </a>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Rate </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('reseller/rateplan') }}" class="nav-link">Rate Plan</a></li>
            <li class="nav-item"><a href="{{ url('reseller/myplan') }}" class="nav-link">My Plan</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-person-stalker tx-24"></i>
                <span class="menu-item-label">    &nbsp;    User </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
             <li class="nav-item"><a href="{{ url('reseller/create-user') }}" class="nav-link">Create User</a></li>
             <li class="nav-item"><a href="{{ url('reseller/userlist') }}" class="nav-link">Userlist</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Recharge</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ url('reseller/recharge-reseller') }}" class="nav-link">Recharge User</a></li>
           <li class="nav-item"><a href="{{ url('reseller/user-recharge-history') }}" class="nav-link">User Recharge History</a></li>
           <li class="nav-item"><a href="{{ url('reseller/user-refund-history') }}" class="nav-link">User Refund History</a></li>
           <li class="nav-item"><a href="{{ url('reseller/recharge-history') }}" class="nav-link">My Recharge History</a></li>
           <li class="nav-item"><a href="{{ url('reseller/balance-history') }}" class="nav-link">Balance History</a></li>
        </ul>
         
         
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('reseller/mydaily-sms-report') }}" class="nav-link">Day wise My Summery</a></li>
          <li class="nav-item"><a href="{{ url('reseller/daily-sms-report') }}" class="nav-link">Day wise Users Summery</a></li>
          <li class="nav-item"><a href="{{ url('reseller/user-sms-report') }}" class="nav-link">User SMS Report</a></li>    
        </ul>
        
    </div><!-- br-sideleft-menu -->
    <a href="{{ url('reseller/api-docs') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-document-text tx-22"></i>
                <span class="menu-item-label">    &nbsp;   API </span>
                 
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->