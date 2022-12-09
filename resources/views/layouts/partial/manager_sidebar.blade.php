<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('manager/dashboard') }}"><span>SMS</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ url('manager/dashboard') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">    &nbsp;   Dashboard</span>
            </div>
        </a>


        <a href="{{ url('manager/attendence_list') }}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-fingerprint tx-24"></i>
                <span class="menu-item-label">    &nbsp;   My Attendence </span>
            </div>
        </a>
       

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-shopping-cart tx-22"></i>
                <span class="menu-item-label">    &nbsp;   Sales & Marketing</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{url('manager/cus_list')}}" class="nav-link">Field Customer List</a></li>
        <li class="nav-item"><a href="{{url('manager/exec_list')}}" class="nav-link">Executive List</a></li>
        <!-- <li class="nav-item"><a href="{{url('manager/com_list')}}" class="nav-link">Comission List</a></li> -->
        </ul>

        

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-filing tx-22"></i>
                <span class="menu-item-label">    &nbsp;  Field Work</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ url('manager/cus_create') }}"  class="nav-link"> Field Data Entry  <i class="fa fa-file" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('manager/customer') }}"  class="nav-link"> My Customers List   <i class="fa fa-users" aria-hidden="true"></i></a></li>   
        <li class="nav-item"><a href="{{ url('manager/conveyance') }}"  class="nav-link"> My Conveyance   <i class="fa fa-exchange" aria-hidden="true"></i></a></li>   
        </ul>
      
        
    </div>

    

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->