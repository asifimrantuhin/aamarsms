@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Executive</a>
            <span class="breadcrumb-item active">ExecutiveList</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="POST" >
                            {{ csrf_field() }}
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                              <input type="text" class="form-control mg-md-l-10" name="email" placeholder="Search with Email">
                              
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Manager</th>
                                        <th>UserType</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>mobile</th>
                                        <th>Joined</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($saleslists) > 0)
                                    @foreach($saleslists as $c)  
                                    <tr>
                                        <td>{{$c->name}}</td>
                                        <td><img class="rounded-circle" width="50px" src="{!! asset('images/user/'.$c->image) !!}"></td>
                                        <td>{{App\Models\User::whereId($c->manager)->pluck('name')->first()}}</td>
                                        <td>{{$c->role == 5 ? 'Manager' : 'Executive'}}</td>
                                        <td>{{$c->designation}}</td>
                                        <td>{{$c->email}}</td>
                                        <td>{{$c->mobile}}</td>
                                        <td class="text-nowrap">{{date('d-m-y', strtotime($c->joining))}}</td>
                                        <td>
                                            @if($c->status == 1 )
                                            <span class="badge badge-success"> Active </span>
                                            @else
                                            <span class="badge badge-danger"> Inactive  </span>
                                            @endif  
                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No reseller/user created yet!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>{{ $saleslists->appends(array_filter(Request::all()))->links( "pagination::bootstrap-4")}}</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>

    </div>
    <!-- br-pagebody -->
</div>


@endsection