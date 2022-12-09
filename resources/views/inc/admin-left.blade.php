<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('admin') }}"><span>AamarSMS</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{url('admin')}}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;  Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;  Contacts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/create-group')}}" class="nav-link">Create Group</a></li>
            <li class="nav-item"><a href="{{url('admin/manage-group')}}" class="nav-link">Manage Group</a></li> 
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    SMS Campaign</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/new-campaign')}}" class="nav-link">Add New Campaign</a></li>
            <li class="nav-item"><a href="{{ url('admin/campaign-details') }}" class="nav-link">My Campaign's</a></li>
            <li class="nav-item"><a href="{{url('admin/campaign-list')}}" class="nav-link">All Campaign's </a></li> 
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-cash tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Rate</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('admin/rateplan') }}" class="nav-link">Rate Plan</a></li>
            <li class="nav-item"><a href="{{url('admin/rates')}}" class="nav-link">Basic Rates</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-person-stalker tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Users</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ url('admin/create-user') }}" class="nav-link">Create User</a></li>
            <li class="nav-item"><a href="{{url('admin/userlist')}}" class="nav-link">User List</a></li>
            <li class="nav-item"><a href="{{url('admin/users-balance')}}" class="nav-link">Users Balance</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-android-sad tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Sales & Marketing</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('admin/comission') }}" class="nav-link">Create Commision Plan</a></li>
            <li class="nav-item"><a href="{{ url('admin/create-sales') }}" class="nav-link">Create Sales Executive</a></li>
            <li class="nav-item"><a href="{{url('admin/saleslist')}}" class="nav-link">Sales Executive List</a></li>
            <li class="nav-item"><a href="{{url('admin/comissionlist')}}" class="nav-link">Sales Comission List</a></li>
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-pricetags tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Field Management</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/managecus')}}" class="nav-link">Customer List</a></li>
            <li class="nav-item"><a href="{{url('admin/conveyanceadmin')}}" class="nav-link">Convanyance List</a></li>
        </ul>
        
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-calculator tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Recharge</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/recharge-reseller')}}" class="nav-link">Recharge Reseller/User</a></li>

            <li class="nav-item"><a href="{{url('admin/recharge-history')}}" class="nav-link">Recharge History</a></li>
            <li class="nav-item"><a href="{{url('admin/transaction-history')}}" class="nav-link">Transaction History</a></li>
            <!-- <li class="nav-item"><a href="{{url('admin/balance-history')}}" class="nav-link">Balance History</a></li>   -->
        </ul>
        <a href="#" class="br-menu-link">
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
        </ul>
        <!--        <a href="{{url('admin/sms-transactions')}}" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon ion-ios-email tx-24"></i>
                        <span class="menu-item-label">    &nbsp;    SMS Transactions</span>
                    </div>
                </a>-->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-email tx-24"></i>
                <span class="menu-item-label">    &nbsp;    SMS Transactions</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/sms-transactions-report')}}" class="nav-link">SMS Report</a></li>
            <li class="nav-item"><a href="{{url('admin/sms-transactions')}}" class="nav-link">Vendor SMS Report</a></li>
            <li class="nav-item"><a href="{{url('admin/user-sms-report')}}" class="nav-link">User SMS Report</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Masks</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a> 
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/create-mask')}}" class="nav-link">Create Mask</a></li>
            <li class="nav-item"><a href="{{url('admin/manage-mask')}}" class="nav-link">Manage User Masks</a></li> 
        </ul>
        <a href="{{url('admin/settings')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Settings </span>

            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{url('admin/revenue-report')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;    Revenue Report</span>
            </div>
        </a>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/campaign-list')}}" class="nav-link">Campaign's Report</a></li> 
        </ul>
        <a href="{{url('/admin/logActivity')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-magnet tx-22"></i>
                <ion-icon name="bug"></ion-icon>
                <span class="menu-item-label">    &nbsp;   Log Viewer</span>

            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->

    

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->