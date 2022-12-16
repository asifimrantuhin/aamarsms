<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('user/dashboard') }}"><span>[</span>AamarSMS<span>]</span></a></div>

<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('user/dashboard') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon fas fa-home tx-16"></i>
                <span class="menu-item-label">    &nbsp;    Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fas fa-envelope tx-16"></i>
                <span class="menu-item-label">    &nbsp;    Send SMS</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
             <li class="nav-item"><a href="{{ url('user/campaign') }}" class="nav-link">New Campaign</a></li>
             <!-- <li class="nav-item"><a href="{{ url('user/db_campaign') }}" class="nav-link">Database SMS</a></li> -->
             
            <li class="nav-item"><a href="{{ url('user/dynamic_sms') }}" class="nav-link">Dynamic SMS</a></li>
            <li class="nav-item"><a href="{{ url('user/template') }}" class="nav-link">SMS Template</a></li>
        </ul>
       
        <!-- <a href="{{ url('user/ssl_payment') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fab fa-amazon-pay tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Account Recharge </span>
            </div>
        </a> -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fas fa-address-book  tx-16"></i>
                <span class="menu-item-label">    &nbsp;    Phone Book</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
             
            <li class="nav-item"><a href="{{ url('user/create_group') }}" class="nav-link">Add Contact</a></li>
            <li class="nav-item"><a href="{{ url('user/contact_group') }}" class="nav-link">Manage Group</a></li>
        </ul>
        <a href="{{url('user/myplan')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-16"></i>
                <span class="menu-item-label">    &nbsp; My Rate Plan </span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
       
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Account</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('user/account_summary') }}" class="nav-link">Account Summary</a></li>
            {{-- <li class="nav-item"><a href="{{ url('user/account_summary_graph') }}" class="nav-link">Account Summary graph</a></li> --}}
           <li class="nav-item"><a href="{{ url('user/recharge_history') }}" class="nav-link">Recharge History</a></li>
           <!-- <li class="nav-item"><a href="{{ url('user/refund-history') }}" class="nav-link" >Refund History</a></li> -->
           <li class="nav-item"><a href="{{ url('user/transaction_history') }}" class="nav-link">Expense History</a></li>
           
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
          <li class="nav-item"><a href="{{ url('user/cost_report') }}" class="nav-link">Cost Report</a></li>
          <li class="nav-item"><a href="{{ url('user/campaign_list') }}" class="nav-link">Campaign Report(Standard)</a></li>
          <!-- <li class="nav-item"><a href="{{ url('user/dynamic_list') }}" class="nav-link">Campaign Report(Dynamic)</a></li> -->
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   DLR</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('user/dlr/deliverylog') }}" class="nav-link">Delivery Log</a></li>
            <li class="nav-item"><a href="{{ url('user/dlr/campaignlist') }}" class="nav-link">CampaignWise DLR</a></li>
          
        </ul>

        @if(Auth::user()->api_enabled == 1)
         <a href="{{ url('user/api') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-link tx-16"></i>
                <span class="menu-item-label">    &nbsp;   API </span>
            </div>
        </a>
        @endif

        <a href="{{ url('user/support') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-phone tx-16"></i>
                <span class="menu-item-label">    &nbsp;    Support </span>
            </div>
        </a>

        
    </div><!-- br-sideleft-menu -->
   

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->