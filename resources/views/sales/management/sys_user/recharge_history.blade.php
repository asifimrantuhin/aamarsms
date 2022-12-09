@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Assigned Customer</a>
            <span class="breadcrumb-item active">Recharge list</span>
        </nav>
    </div>

    <div class="br-pagebody">

        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Assigned Customer Recharge History</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                              <input type="text" class="form-control mg-md-l-10" name="name" placeholder="Search with Name">
                              <input type="text" class="form-control mg-md-l-10" name="email" placeholder="Search with Email">
                              <input type="text" class="form-control mg-md-l-10" name="mobile" placeholder="Search with Phone">
                              <select name="userrole"  class="form-control mg-md-l-10">
                                  <option value="">Select Role</option>
                                  <option value="2">Reseller</option>
                                  <option value="3">User</option>
                              </select>
                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            </div>
                        </form>
                    </div>
                    <br/>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Recharged At</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Amount</th>
                                        <th>Transaction_ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($recharge_history) > 0)
                                    @foreach($recharge_history as $r)  
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->email}}</td>
                                        <td>
                                            @if($r->role == 1 )
                                                Admin
                                            @elseif($r->role == 2 )
                                                Reseller 
                                            @elseif($r->role == 3 )
                                                User 
                                            @elseif($r->role == 4 )
                                                Sales Executive 
                                            @else
                                                Undefined 
                                            @endif  
                                        </td>
                                        <td>{{$r->amount}}</td>
                                        <td>{{$r->trx_id}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td colspan="7">No Customer created yet!</td></tr>
                                    @endif
                                    <tr>
                                        <th colspan="4" class="text-right">Sub Total </th>
                                        
                                         <th> {{ $total}} </th>
                                        <th colspan="2">                        
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $recharge_history->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>

@endsection

