@extends('layouts.admin-master') 
@section('content')


<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Recharge</a>
            <span class="breadcrumb-item active">Create Recharge Request</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <div class="form-layout form-layout-4">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Create Recharge Request</h6>
                        <form action="recharge/create" method="POST">
                            {{csrf_field()}}
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Reseller/User: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="customer_id">
                                        <option> Select User/Reseller</option>
                                        @if(count($customers) > 0)
                                        @foreach($customers as $c)
                                        <option value="{{$c->id}}">{{$c->name}} ({{$c->email}})</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>    
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Amount: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="amount" class="form-control" placeholder="Enter amount" required>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Note: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea type="text" name="note" class="form-control" placeholder="Enter a note" row="2" required ></textarea>
                                </div>
                            </div>
                            
                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        <!-- </div>

        <br/>

        <div class="row"> -->
            <div class="col-md-6">
                <div class="br-section-wrapper">
                    <a href="{{url('admin/recharge_history')}}" ><h6 class=" tx-uppercase tx-bold tx-14 mg-b-10">Recharge History</h6></a>
                    
                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Current Balance</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($rechargeHistory) > 0)
                                    @foreach ($rechargeHistory as $r)
                               		<tr>
                               			<td>{{$r->user->name}}</td>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                        <td>
                                            @if($r->status == 0)
                                            <span class="badge badge-warning"> Pending  </span>
                                            @else
                                            <span class="badge badge-success"> Success </span>
                                            @endif
                                        </td>
                               		</tr>
                        			@endforeach
                                    @else
                                    <tr>
                                        <td colspan="5">No recharges yet</td>
                                    </tr>    
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        @if(count($rechargeHistory) > 1)
                        {{ $rechargeHistory->links( "pagination::bootstrap-4")}}
                        @endif 
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>


@endsection