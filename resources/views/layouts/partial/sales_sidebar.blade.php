<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('sales/dashboard') }}"><span>{{Auth::user()->name}}</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('sales/dashboard') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
       
        
         <a href="{{ url('sales/mycommission') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-scissors tx-24"></i>
                <span class="menu-item-label">Sales Comission </span>
            </div>
        </a>


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-fingerprint tx-24"></i>
                <span class="menu-item-label">Attendence</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/attendence_list') }}" class="nav-link">My Attendence</a></li>
        <li class="nav-item"><a href="{{ url('sales/application') }}" class="nav-link">Leave Application</a></li> 
        <li class="nav-item"><a href="{{ url('sales/leave_list') }}" class="nav-link">Leave Application List</a></li> 
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-people tx-24"></i>
                <span class="menu-item-label">Assigned Customer</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/userlist') }}" class="nav-link">User List</a></li>
        <li class="nav-item"><a href="{{ url('sales/sys_recharge') }}" class="nav-link">User Recharge History</a></li> 
        <li class="nav-item"><a href="{{ url('sales/customer_credit') }}" class="nav-link">Recharge Request</a></li>
        <li class="nav-item"><a href="{{ url('sales/customers_campaign') }}" class="nav-link">Customers Campaign</a></li>
        </ul>

        

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-filing tx-24"></i>
                <span class="menu-item-label">Field Work</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('sales/customer/create') }}"  class="nav-link"> Field Data Entry  <i class="fa fa-database" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('sales/customer') }}"  class="nav-link"> My Customers List   <i class="fa fa-user" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('sales/conveyance') }}"  class="nav-link"> My Conveyance   <i class="fa fa-exchange" aria-hidden="true"></i></a></li>   
        </ul>
      
        
    </div><!-- br-sideleft-menu -->

    

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->