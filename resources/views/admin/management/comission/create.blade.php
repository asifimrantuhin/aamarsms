@extends('layouts.admin-master')
@section('content')



<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Comission</a>
            <span class="breadcrumb-item active">Create Comission</span>
        </nav>
    </div>

    <div class="br-pagebody">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="d-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                <span>{{ $message }}</span>
            </div>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-bordered alert-danger" role="alert">
            <div class="d-flex align-items-center justify-content-start">
                <i class="icon ion-ios-close alert-icon tx-24"></i>
                <span>{{ $message }}</span>
            </div><!-- d-flex -->
        </div>
        @endif
        <div class="row">
            <div class="col-lg-5">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Create New Comission</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('/admin/comission/save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Sales Executive: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control" name="sales">
                                    <option value="">Select Executive</option>
                                    @php
                                    $sales = DB::table('users')->where('role', 4)->get();
                                    @endphp
                                    @foreach($sales as $s)  
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Minimum Sales: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" name="minimum" class="form-control" placeholder="Enter Minimum Sales" min="0">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Maximum Sales: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" name="maximum" class="form-control" placeholder="Enter maximum Sales" min="0">
                                </div>
                            </div>

                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Comission: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" name="comission" class="form-control" placeholder="Enter Percentage %" min="0">
                                </div>
                            </div>
                            

                            <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Send</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <div class="col-lg-7">
                <div class="br-section-wrapper">
                    
                	<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Comission List</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                              <input type="text" class="form-control mg-md-l-10" name="name" placeholder="Search with Executive">
                              <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Executive</th>
                                    <th>Minimum</th>
                                    <th>Maximum</th>
                                    <th>Comission</th>
                                    <th>Status</th>
                                    <th class="wd-50p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($customers) > 0)
                                @foreach ($customers as $c)
                                <tr>
                                    <td>{{ $c->username }}</td>
                                    <td>{{ $c->minimum }} &#2547;</td>
                                    <td>{{ $c->maximum }} &#2547;</td>
                                    <td>{{ $c->comission }} %</td>
                                    <td> 
                                    @if($c->status == 1 )
                                    <span class="badge badge-success"> Active  </span>
                                        @else
                                        <span class="badge badge-danger"> Inactive  </span>
                                        @endif  
                                    </td>
                                    <td>
                                        @if($c->status == 0)
                                            <a href="{{url('/admin/changecomissionstatus/'.$c->id.'/1')}}" class="btn btn-outline-primary btn-icon p-r-2">
                                                <div><i class="fa fa-check"></i></div>
                                            </a>
                                            @else
                                            <a href="{{url('/admin/changecomissionstatus/'.$c->id.'/0')}}" class="btn btn-outline-primary btn-icon p-r-2">
                                                <div><i class="fa fa-pause"></i></div>
                                            </a>
                                            @endif
                                        <a href="{{url('/admin/editcomssion/'.$c->id)}}" class="btn btn-outline-primary btn-icon mg-r-5">
                                            <div><i class="fa fa-pencil"></i></div>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                @else
                                <tr>
                                    <td colspan="5">No Comission create yet!</td>
                                </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                    @if(count($customers) > 0)
                    {{ $customers->links( "pagination::bootstrap-4") }}
                    @endif
            </div>
        </div>
    </div>      
</div>
</div>
       
@endsection
