@extends('layouts.admin-master') 
@section('content')
<link href="{{ url('public/templates/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">


<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Dynamic SMS</a>
            <span class="breadcrumb-item active">SMS Preview</span>
        </nav>
    </div>

    <div class="br-pagebody">


        <div class="br-section-wrapper">
            <div class="row">
                <div class="col-12">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">SMS Summery</h6>
                    <table class="table table-info table-bordered">
                        <thead>
                            <tr>
                                <th>Schedule Time</th>
                                <th>Message</th>
                                <th>Total Number Count</th>
                                <th>Total SMS Count</th>
                                <th>Total Cost</th>
                                <th>Remaining Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$schedule}}</td>
                                <td>{{$message}}</td>
                                <td>{{$total_number_count}}</td>
                                <td>{{$total_sms_count}}</td>
                                <td>{{$total_sms_cost}}</td>
                                <td>{{$remaining_balance}}</td>
                            </tr>
                            @if($remaining_balance < 0)
                            <tr><td colspan="5" class="text-center"><span class="tx-danger">You didn't have enough balance to send this SMS, please recharge first.</span></td></tr>
                            @endif
                        </tbody>
                    </table>
                    <form id='confirm_campaign' method="POST" action="{{ url('/user/store_dynamic_sms')}}" >
                        {{csrf_field()}}

                         

                        <input type="hidden" name="campaign_name" value="<?php echo $campaign_name; ?>"/>
                        <input type="hidden" name="dataArr" value='<?php echo json_encode($items); ?>'/>
                        <input type="hidden" name="total_sms_count" value="<?php echo $total_sms_count; ?>"/>
                        <input type="hidden" name="total_sms_cost" value="<?php echo $total_sms_cost; ?>"/>
                        <input type="hidden" name="total_number_count" value="<?php echo $total_number_count; ?>"/>
                        <input type="hidden" name="message" value="<?php echo $message; ?>"/>
                        <input type="hidden" name="mask" value="<?php echo $mask; ?>"/>
                        <input type="hidden" name="senderid" value="<?php echo $senderid; ?>"/>
                        <input type="hidden" name="schedule" value="<?php echo $schedule; ?>"/>
                        <input type="hidden" name="" value=""/>
                        <input type="hidden" name="" value=""/>


                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info"
                                    @if($remaining_balance < 0)
                                    disabled="true"
                                    @endif
                                    >Confirm</button>
                            <a href="{{ url('user/dynamic_sms') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

                <div class="col-8"></div>
            </div>
        </div>


        <div class="row  mg-t-20">
            <div class="col-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">SMS/per Preview</h6>
                    <div class="table-wrapper">
                        <table id="datatable2" class="table table-info  table-striped table-bordered  responsive" style="width: 100%" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th>Mobile no</th>
                                    <th>Operator</th>
                                    <th>message</th>
                                    <th>sms count</th>
                                    <th>sms_cost</th>
                                    <th>smstype</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item) 
                                <tr>
                                    <td>{{ $item['country_code']}}{{  $item['number']}}</td>
                                    <td>{{ $item['operator'] }}</td>
                                    <td>{{ $item['message'] }}</td>
                                    <td>{{ $item['sms_count'] }}</td>
                                    <td>{{ $item['sms_cost'] }}</td>
                                    <td>{{ $item['smstype'] }}</td>
                                </tr>
                                
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ url('public/templates/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ url('public/templates/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{ url('public/templates/lib/select2/js/select2.min.js')}}"></script>
<script src="{{ url('public/templates//js/bracket.js')}}"></script>

<script>
$(function () {
    'use strict';

    $('#datatable1').DataTable({
        responsive: true,
        ordering: true,
        paging:     false,
        info:       true,
        filter:     true,
        length:     true,
        processing: true,
        dom:          't<"bottom"if><"clear">',  
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }

    });
    $('#datatable2').DataTable({
        bLengthChange: false,
        searching: false,
        responsive: true
    });
    // Select2
    $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});






});


$(document).ready(function () {
    $("#confirm_campaign").submit(function (e) {

        var form = $(this);
        var url = form.attr('action');
        
        var rem = "<?php echo $remaining_balance; ?>";
if(rem >= 0 ){
        // var campaign_name = "<?php echo $campaign_name; ?>";
        // var dataArr = <?php echo json_encode($items); ?>;
        // var total_sms_count = <?php echo $total_sms_count; ?>;
        // var total_sms_cost = <?php echo $total_sms_cost; ?>;
        // var message = <?php echo json_encode($message); ?>;
        // var mask = "<?php echo $mask; ?>";
        // var senderid = "<?php echo $senderid; ?>";
        // var schedule = "<?php echo $schedule; ?>";
        // var formData = new FormData(this);
        // formData.append('campaign_name', campaign_name);
        // formData.append('message', message);
        // formData.append('dataArr', JSON.stringify(dataArr));
        // formData.append('total_sms_count', total_sms_count);
        // formData.append('total_sms_cost', total_sms_cost);
        // formData.append('mask', mask);
        // formData.append('senderid', senderid);
        // formData.append('schedule', schedule);


        // console.log(formData);

        var form = $('#confirm_campaign');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            //data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (data)
            {
                //console.log(data);
                 if(data = 'success'){
                     window.location.href = "<?php echo url('user/dynamic_sms?message=') ?>"+ data;
                 }else{
                     window.location.href = "<?php echo url('user/dynamic_sms?') ?>"+ data;
                 }
            },
            error: function (data)
            {
                console.log(data);
            },

        });
        }else{
        alert("You didn't have enough balance to send this SMS, please recharge first.");
        }
        e.preventDefault();
        e.stopPropagation();
    });
});



</script>



@endsection
