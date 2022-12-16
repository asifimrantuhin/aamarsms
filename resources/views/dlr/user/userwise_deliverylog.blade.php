@extends('layouts.admin-master')
@section("page-style")
<style type="text/css">
    #campaignViewModal .modal-dialog {
        width: 1000px;
    }
</style>
@endsection
@section('content')
<link href="{{ url('public/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<style type="text/css">
    .view, .export{
        
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
    }
    .view:hover, .export:hover{
        color: #054974;
        cursor: pointer;
    }
</style>



<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">DLR</a>
            <span class="breadcrumb-item active">Delivery Log</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="table-responsive">
                <table class="table table-striped table-bordered dlrDatatables" >
                    <thead>
                        <tr>
                            <th>Mobile Number</th>
                            <th>Sent Time</th>
                            <th>Operator</th>
                            <th>Charged</th>
                            <th>SMS Text</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection



@section("page-script")

<script type="text/javascript">
    $(document).ready(function(){
        var table = $('.dlrDatatables').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [[50, 100, 500, 1000, 2000, 5000, 10000, -1], [50, 100, 500, 1000, 2000, 5000, 10000, 'ALL']],
            ajax: "/user/dlr/deliverylog",

            columns: [
                {data: 'mobile_number', name: 'mobile_number'},
                {data: 'created_at', name: 'created_at', orderable: true, searchable: true},
                {data: 'operator', name: 'operator', orderable: true, searchable: true},
                {data: 'price', name: 'price'},
                {data: 'text_body', name: 'text_body'},
                //{data: 'action', name: 'action', orderable: true, searchable: true},
            ]
        });


    });

       
</script>

@endsection