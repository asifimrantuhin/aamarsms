@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Rate Plan</a>
            <span class="breadcrumb-item active">My Plan</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Operator Name</th>
                                    <th>Normal Rate (BDT)</th>
                                    <th>Masking Rate (BDT)</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach($rates as $r)
                                <tr>
                                    <td>{{$r->operator}}</td>
                                    <td>{{number_format($r->nonmasking_price,4)}}</td>
                                    <td>{{number_format($r->masking_price,4)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>


    </div><!-- page body -->

</div>

@endsection