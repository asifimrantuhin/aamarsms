<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('admin/dashboard') }}"><span>AamarSMS</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{url('admin/dashboard')}}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;  Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-folder tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Contact Management</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a> 
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/create_group')}}" class="nav-link">New Group</a></li>
            <li class="nav-item"><a href="{{url('admin/contact_group')}}" class="nav-link">Manage Group</a></li> 
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;  Send SMS</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/campaign')}}" class="nav-link">New Campaign</a></li>
            <li class="nav-item"><a href="{{ url('admin/campaign-details') }}" class="nav-link">My Campaign's</a></li>
            <li class="nav-item"><a href="{{url('admin/campaign_list')}}" class="nav-link">All Campaign's </a></li> 
            <li class="nav-item"><a href="{{url('admin/fail_campaign_list')}}" class="nav-link">Failed Campaign's </a></li> 
            <li class="nav-item"><a href="{{url('admin/template')}}" class="nav-link">SMS Templete</a></li> 
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Rate Plan</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('admin/rateplan') }}" class="nav-link">User Rate Plan</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-person-stalker tx-24"></i>
                <span class="menu-item-label">  &nbsp; Manage   Users</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/userlist')}}" class="nav-link">User List</a></li>
            <li class="nav-item"><a href="{{url('admin/user_balance')}}" class="nav-link">Users Balance</a></li>
        </ul>
        <!-- <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-fingerprint tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Attendence</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('admin/holiday_list')}}" class="nav-link">Public Holiday List </a></li>
        <li class="nav-item"><a href="{{url('admin/time_schedule')}}" class="nav-link">Time Schedule Setting </a></li>
        <li class="nav-item"><a href="{{url('admin/staff_leave')}}" class="nav-link">Leave Setting </a></li>
        <li class="nav-item"><a href="{{url('admin/salary_deduction')}}" class="nav-link">Salary Deduction</a></li>  
        <li class="nav-item"><a href="{{url('admin/attendence_list')}}" class="nav-link">Staff Attendence </a></li>  
        </ul> -->


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-shopping-cart tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Sales & Marketing</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('admin/comissionlist')}}" class="nav-link">Sales Comission List <i class="fa fa-scissors"></i></a></li>
        <li class="nav-item"><a href="{{url('admin/saleslist')}}" class="nav-link">Sales Executive List <i class="fa fa-user"></i></a></li>
        <li class="nav-item"><a href="{{url('admin/managecus')}}" class="nav-link">Customer List <i class="fa fa-users"></i></a></li>
        <li class="nav-item"><a href="{{url('admin/conveyance')}}" class="nav-link">Convanyance List ৳</a></li>  
        </ul>
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-calculator tx-24"></i>
                <span class="menu-item-label"> &nbsp; Recharge</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/recharge_history')}}" class="nav-link">Recharge User/Reseller</a></li>
            <!-- <li class="nav-item"><a href="{{url('admin/customer_credit')}}" class="nav-link">Recharge Request</a></li> -->
            <li class="nav-item"><a href="{{url('admin/operator_recharge')}}" class="nav-link">Operator Recharge</a></li>
            <li class="nav-item"><a href="{{url('admin/transaction_history')}}" class="nav-link">Transaction History</a></li>
            
        </ul>
        {{-- <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-android-phone-portrait  tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Operator Balance </span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/current-balance')}}" class="nav-link">Current Balance</a></li>
            <li class="nav-item"><a href="{{url('admin/recharge-balance')}}" class="nav-link">Recharge Balance</a></li> 
            <li class="nav-item"><a href="{{url('admin/operator-balance-history')}}" class="nav-link">Balance History</a></li> 
        </ul> --}}


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    SMS Transactions</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/sms_transactions')}}" class="nav-link">SMS Report</a></li>
            <li class="nav-item"><a href="{{url('admin/reseller_sms')}}" class="nav-link">Reseller SMS Report</a></li>
            <li class="nav-item"><a href="{{url('admin/user_sms')}}" class="nav-link">User SMS Report</a></li>
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Report</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/financial_report')}}" class="nav-link">Financial Report</a></li>
            <li class="nav-item"><a href="{{url('admin/vendor_sms')}}" class="nav-link">Vendor SMS Report</a></li>
            <li class="nav-item"><a href="{{url('admin/revenue_report')}}" class="nav-link">Revenue Report</a></li>
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   DLR</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a>

        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('admin/dlr/deliverylog') }}" class="nav-link">My Delivery Log</a></li>
            <li class="nav-item"><a href="{{ url('admin/dlr/campaignlist') }}" class="nav-link">My CampaignWise DLR</a></li>

            <li class="nav-item"><a href="{{ url('admin/dlr/userdeliverylog') }}" class="nav-link">User Delivery Log</a></li>
            <li class="nav-item"><a href="{{ url('admin/dlr/usercampaignlist') }}" class="nav-link">User CampaignWise DLR</a></li>
          
        </ul>


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-cog tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Settings</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/mask')}}" class="nav-link">Mask Management</a></li>
            <li class="nav-item"><a href="{{url('admin/nonmask')}}" class="nav-link">SenderID Management</a></li>
            <li class="nav-item"><a href="{{url('admin/settings')}}" class="nav-link">Vendor Configurations</a></li>
            <li class="nav-item"><a href="{{url('admin/api')}}" class="nav-link">API Management </a></li> 
             
        </ul>
       
     
        <a href="{{url('/admin/AccessLog')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-magnet tx-22"></i>
                <ion-icon name="bug"></ion-icon>
                <span class="menu-item-label">    &nbsp;   System Log</span>

            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->

    

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->