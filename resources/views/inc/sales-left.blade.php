<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('reseller') }}"><span>[</span>AamarSMS<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('sales') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
       
        
         <a href="{{ url('sales/comissionlist') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-scissors tx-24"></i>
                <span class="menu-item-label">    &nbsp; Sales Comission </span>
            </div>
        </a>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-people tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Assigned Customer</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/customerlist') }}" class="nav-link">Customers List</a></li>
        <li class="nav-item"><a href="{{ url('sales/customers-balance') }}" class="nav-link">Customers Balance</a></li>
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/daily-recharge-report') }}" class="nav-link">Customer Recharge</a></li>   
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-filing tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Field Work</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/dataform') }}"  class="nav-link">Field Data Form  <i class="fa fa-database" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('sales/managecustomer') }}"  class="nav-link"> My Customers List   <i class="fa fa-user" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('sales/conveyance') }}"  class="nav-link"> Conveyance   <i class="fa fa-exchange" aria-hidden="true"></i></a></li>   
        </ul>
      
        
    </div><!-- br-sideleft-menu -->
    
    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->