@extends('layouts.admin-master')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Log Activity</a>
            </nav>
        </div>
        <div class="br-pagebody">
            <div class="row">
                <div class="col-lg-12">
                    <div class="br-section-wrapper">
                        <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                            <form method="GET" autocomplete="off">
                                <div class="d-md-flex pd-y-20 pd-md-y-0">
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <select name="user" class="form-control mg-md-l-10">
                                            <option value="">All USER</option>
                                            @foreach ($userlist as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <span class="input-group-addon"><i
                                                class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="from_date" class="form-control datepicker"
                                            placeholder="Date From">
                                    </div>
                                    <div class="input-group  mg-b-10 ">
                                        <span class="input-group-addon"><i
                                                class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                        <input type="text" name="to_date" class="form-control datepicker"
                                            placeholder="Date To">
                                    </div>
                                    <div class="input-group  mg-b-10 mg-r-10">
                                        <button type="submit"
                                            class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>

                        <div class="bd bd-gray-300 rounded table-responsive">
                            <table class="table mg-b-0 table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Occured By</th>
                                        {{-- <th>URL</th> --}}
                                        <th>IP Address</th>
                                        <th width="300px">Browser</th>
                                    </tr>
                                </thead>
                                @if ($logs->count() > 0)
                                    @foreach ($logs as $key => $log)
                                        <tr>
                                            <td>{{ $log->created_at }}</td>
                                            <td>{{ $log->subject }}</td>
                                            <td class="text-info">{{ $log->user->name }}</td>
                                            {{-- <td class="text-success">{{ $log->url }}</td> --}}
                                            <td class="text-warning">{{ $log->ip }}</td>
                                            <td class="text-danger">{{ $log->agent }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                    @else
                                        <td colspan="7">No Records Found</td>
                                    </tr>
                                @endif
                            </table>

                            @if (count($logs) > 0)
                                {{ $logs->appends(array_filter(Request::all()))->links('pagination::bootstrap-4') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
