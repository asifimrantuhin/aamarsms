@extends('layouts.admin-master') @section('content')
    <link href="{{ url('css/loader.css') }}" rel="stylesheet">


    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Campaign</a>
                <span class="breadcrumb-item active">DataBase SMS</span>
            </nav>
        </div>

        <div class="br-pagebody">
            <div class="loading">Loading&#8230;</div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="br-section-wrapper">
                        <div class="form-layout form-layout-4">
                            <form id="campaign-form" method="POST" action="{{ url('user/create_campaign') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="form-control-label"><strong>Enter SMS</strong><span
                                                class="tx-danger">*</span><a href=""
                                                class="tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"
                                                data-toggle="modal" data-target="#modaldemo1">use template</a></label>

                                        <textarea rows="6" type="text" id="campaign_message" name="campaign_message" class="form-control"
                                            placeholder="Type Your Message Here" row="3" required></textarea>
                                        <p>
                                            Character Count: <span class="tx-warning" id="charectercount">0</span>&nbsp; |
                                            &nbsp;
                                            SMS Length: <span class="tx-warning" id="smscount">0</span>&nbsp; | &nbsp;
                                            SMS Type: <span class="tx-warning" id="sms-type">Text</span> &nbsp;
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-3"><label><strong>Numbers</strong><span
                                                        class="tx-danger">*</span></label></div>
                                            <div class="col-lg-1">
                                                <select id="upload_type" onchange="Option(this);" name="upload_type">
                                                    <option value="raw">Comma</option>
                                                    <option value="file">File Upload</option>
                                                    
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                {{-- 2nd Row --}}
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="form-control-label"><strong>Mask Option</strong></label>
                                        <select class="form-control" id="mask" onchange="MaskCheck(this);"
                                            name="mask">
                                            @if($count != 0)
                                            <option value="1">Mask</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        </br>
                                        <select id="SenderIdShow" style="display: none" class="form-control"
                                            name="senderid">
                                            @foreach ($masks as $mask)
                                                <option value="{{ $mask->name }}">{{ $mask->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label"><strong>Schedule Date Time </strong><strong
                                                style="color:#428bca"
                                                title="Our system will start sending your SMS at selected date time."> (?)
                                            </strong></label>
                                        <input name="schedule" id="schedule" type="datetime-local" class="form-control"
                                            placeholder="YYYY-MM-DD HH:MM" />

                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-control-label"><strong>Campaign Name</strong></label>
                                        <input type="text" name="campaign_name" class="form-control"
                                            placeholder="Enter Campaign Name" id="campaign-name">
                                    </div>
                                </div>

                                {{-- Button Row --}}

                                <div class="form-layout-footer mg-t-30">
                                    {{-- <button type="submit" class="btn btn-warning">Send</button> --}}
                                    <button id="preview" type='button' class="btn btn-info">Send</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>


                        </div>
                        <!-- form-layout -->
                    </div>
                </div>


            </div>
            <div class="row mg-t-30">
                <div class="col-sm-12">
                    <div class="br-section-wrapper">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Recent Campaign</h6>
                        <div class="table-wrapper">
                            <div class="bd rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Text</th>
                                            <th>Start Time</th>
                                            <th>Cost</th>
                                            <!-- <th>Status</th> -->
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($campaigns) > 0)
                                        @foreach($campaigns as $campaign)
    
                                        <tr>
                                            <td>
                                                <b>{{$campaign->campaign_name}} </b>
                                            </td>
                                            <td>{{$campaign->text_body}}</td>
                                            <td style="width:160px">{{$campaign->start_date}}</td>
                                            <td>{{$campaign->campaign_cost}}</td>
                                            <!-- <td>
                                                @if($campaign->status == 1 )
                                                <span class="badge badge-success"> Success </span>
                                                @elseif($campaign->status == 2 )
                                                <span class="badge badge-info"> Sending  </span>
                                                @elseif($campaign->status == 3 )
                                                <span class="badge badge-danger"> Paused  </span>   
                                                @else
                                                <span class="badge badge-warning"> Pending  </span> 
    
                                                @endif  
                                            </td> -->
                                            <td style="width : 120px">
                                                <?php
                                                $date1 = $campaign->start_date;
                                                $date2 = new DateTime();
                                                $date2 = $date2->format('Y-m-d H:i:s');
                                                ?>
                                                @if ($date1 > $date2)
                                                <a href="{{url('user/edit_campaign/'.$campaign->id)}}" title='Edit Campaign' class="btn btn-outline-primary btn-icon mg-r-5">
                                                    <div><i class="fa fa-pencil"></i></div>
                                                </a>
                                                <a href="{{url('user/delete_campaign/'.$campaign->id)}}" title='Delete Campaign' class="btn btn-outline-danger btn-icon mg-r-5 ">
                                                    <div><i class="fa fa-trash"></i></div>
                                                </a>
                                                @else
                                                <a href="#" title='Edit Campaign' class="btn btn-outline-dark btn-icon mg-r-5 disabled">
                                                    <div><i class="fa fa-pencil"></i></div>
                                                </a>
                                                <a href="#" title='Delete Campaign' class="btn btn-outline-dark btn-icon mg-r-5  disabled">
                                                    <div><i class="fa fa-trash"></i></div>
                                                </a>
                                                @endif
    
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="5">No campaign create yet!</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>{{ $campaigns->links( "pagination::bootstrap-4")}}</p>
    
    
    
                    </div>
                </div>
            </div>
            <!-- br-pagebody -->
        </div>



        <div id="creategroup" class="modal fade ">
            <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create Group </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="br-section-wrapper">
                        <div class="form-layout">
                            <form id="createnewgroup" action="{{ url('/user/contact/savecontactgroup') }}"
                                method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <label class="col-sm-4 form-control-label">Group Name: <span
                                            class="tx-danger">*</span></label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <input type="text" name="group_name" class="form-control"
                                            placeholder="Enter Group Name" />
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row mg-t-20">
                                    <label class="col-sm-4 form-control-label">MSISDN Upload Type: <span
                                            class="tx-danger">*</span></label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <div class="row mg-t-10">
                                            <div class="col-lg-6">
                                                <label class="rdiobox">
                                                    <input name="contact_upload_type" value="raw" type="radio"
                                                        checked="">
                                                    <span>Raw comma separated</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                                <label class="rdiobox">
                                                    <input name="contact_upload_type" value="fileType" type="radio">
                                                    <span>File upload(xls, xlsx, csv, txt)</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row mg-t-20">
                                    <label class="col-sm-4 form-control-label">MSISDNs: <span
                                            class="tx-danger">*</span></label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <label class="custom-file" id="fileType">
                                            <input type="file" name="file_msisdn" for="fileType"
                                                accept=".txt, .csv, .xlsx, .xls">
                                            <!--<span class="custom-file-control"></span>-->
                                        </label>
                                        <textarea id="rawType" rows="2" class="form-control" name="raw_msisdn"
                                            placeholder="Enter MSISDN e.g 8801712345678, 8801912345678,"></textarea>


                                    </div>
                                </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Save</button>
                        {{-- <button id="preview" type='button' class="btn btn-danger">Senccd</button> --}}
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div>


        <!-- TEMPLATE MODAL -->
        <div id="modaldemo1" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">SMS TEMPLATE</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pd-25">


                        <div class="table-wrapper">
                            <div class="bd rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($templates) > 0)
                                            @foreach ($templates as $t)
                                                <tr>
                                                    <td>{{ $t->name }}</td>
                                                    <td>{{ $t->text }}</td>
                                                    <td><button type="submit" class="badge badge-info badge-pill"
                                                            value="{{ $t->text }}" data-dismiss="modal">Insert <i
                                                                class="fa fa-plus"></i></button> </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="3">You don't have any Template !!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            {{ $templates->appends(array_filter(Request::all()))->links('pagination::bootstrap-4') }}
                        </div>


                    </div>

                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->


        {{-- All Page Script --}}
        {{-- Modal SMS Template Copy --}}
        <script>
            let currentInput = document.getElementById('campaign_message');
            $(document).on('focus', 'textarea', function() {
                currentInput = this;
            })

            $('button[type=submit]').on('click', function() {
                let cursorPos = currentInput.selectionStart;
                let v = currentInput.value;
                let textBefore = v.substring(0, cursorPos);
                let textAfter = v.substring(cursorPos, v.length);
                currentInput.value = textBefore + this.value + textAfter;

                cursorPos += this.value.length;
                currentInput.focus();
                currentInput.setSelectionRange(cursorPos, cursorPos);
            });
        </script>
        {{-- Modal SMS Template Copy --}}

        <script type="text/javascript">
            function MaskCheck(that) {
                if (that.value == "1") {
                    document.getElementById("SenderIdShow").style.display = "block";
                } else {
                    document.getElementById("SenderIdShow").style.display = "none";
                }
            }

            function Option(that) {
                if (that.value == "raw") {
                    document.getElementById("commadiv").style.display = "block";
                } else {
                    document.getElementById("commadiv").style.display = "none";
                }
                if (that.value == "file") {
                    document.getElementById("filediv").style.display = "block";
                } else {
                    document.getElementById("filediv").style.display = "none";
                }
                if (that.value == "existinggroup") {
                    document.getElementById("groupdiv").style.display = "block";
                } else {
                    document.getElementById("groupdiv").style.display = "none";
                }
            }
        </script>





        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.loading').hide();
                $('#preview').click(function() {
                    $('.loading').show();
                    var form = $('#campaign-form');
                    var url = "<?php echo url('user/preview_campaign'); ?>";
                    var filedata = $("input[name='file_msisdn_contact']")[0].files[0];

                    var formdata = new FormData();
                    formdata.append('_token', $("input[name='_token']").val());
                    formdata.append('campaign_name', $("input[name='campaign_name']").val());
                    formdata.append('campaign_message', $("#campaign_message").val());
                    formdata.append('mask', $("#mask").val());
                    formdata.append('senderid', ($("#mask").val() == 0) ? '' : $("#SenderIdShow").val());
                    formdata.append('schedule', $("#schedule").val());
                    formdata.append('upload_type', $("#upload_type").val());
                    formdata.append('raw_msisdn', $("#raw_msisdn").val());
                    formdata.append('groups', $("#groups").val());
                    formdata.append('file_msisdn_contact', filedata);

                    $.ajax({
                        type: "POST",
                        url: url,
                        contentType: false,
                        processData: false,
                        //  data: form.serialize(),
                        data: formdata,
                        dataType: "json",
                        success: function(data) {
                            if (data.success == false) {
                                alert("Promotional SMS should be in Bangla as per BTRC instruction.");
                            } else if (data.msg_type == 'Went Wrong') {
                                alert(data.msg);
                            } else {
                                bootbox.confirm({
                                    title: "Campaign Preview",
                                    message: '<div class="d-inline-flex p-2 table-responsive"><table class="table table-bordered table-info mg-b-0"><thead><tr><th colspan="2" id="camp_name"></th></tr></thead><tbody><tr><th scope="row">SenderID</th><td><span id="senderid"></span></td></tr><tr><th scope="row">Message</th><td><span id="camp_msg"></span></td></tr><tr><th scope="row">Total Contacts:</th><td><span id="camp_contacts"></span></td></tr><tr><th scope="row">SMS Count:</th><td><span id="camp_smslength"></span></td></tr><tr><th scope="row">Total Cost:</th><td><span id="camp_cost"></span></td></tr><tr><th scope="row">Your Remaining Balance:</th><td><span id="rem_balance"></span></td></tr><tr><th scope="row">Reseller Balance:</th><td><span id="res_bal"></span></td></tr></tbody></table></div>', //$('#sumTable').show(),
                                    closeButton: false,
                                    size: 'large',
                                    buttons: {
                                        confirm: {
                                            label: 'Confirm',
                                            className: 'btn-success'
                                        },
                                        cancel: {
                                            label: 'Cancel',
                                            className: 'btn-danger'
                                        }
                                    },
                                    callback: function(result) {
                                        if (result) {
                                            var form = $('#campaign-form');
                                            var url = form.attr('action');
                                            var filedata = $(
                                                    "input[name='file_msisdn_contact']"
                                                    )[0].files[0];
                                            var formdata = new FormData();
                                            formdata.append('_token', $("input[name='_token']").val());

                                            formdata.append('_token', $("input[name='_token']").val());
                                            formdata.append('campaign_name', $("input[name='campaign_name']").val());
                                            formdata.append('campaign_message', $("#campaign_message").val());
                                            formdata.append('mask', $("#mask").val());
                                            formdata.append('senderid', ($("#mask").val() == 0) ? '' : $("#SenderIdShow").val());
                                            formdata.append('schedule', $("#schedule").val());
                                            formdata.append('upload_type', $("#upload_type").val());
                                            formdata.append('raw_msisdn', $("#raw_msisdn").val());
                                            formdata.append('groups', $("#groups").val());
                                            formdata.append('file_msisdn_contact', filedata);

                                            $.ajax({
                                                type: "POST",
                                                url: url,
                                                contentType: false, // Not to set any content header 
                                                processData: false, // Not to process data 
                                                //  data: form.serialize(),
                                                data: formdata,
                                                dataType: "json",
                                                success: function(data) {
                                                    console.log(data);
                                                    window.location.href ="<?php echo url('user/campaign'); ?>";
                                                },
                                                error: function(data) {
                                                    console.log(data);
                                                    window.location.href ="<?php echo url('user/campaign'); ?>";
                                                }
                                            });
                                        }
                                    }
                                });
                                $('#camp_name').text(data.campaign_name);
                                if($("#mask").val() == '1'){
                                $('#senderid').text($("#SenderIdShow").val());
                                }else{
                                $('#senderid').text('Non-Masking');
                                }
                                $('#camp_msg').text(data.message);
                                $('#camp_contacts').text(data.totalContacts);
                                $('#camp_smslength').text(data.smsLength);
                                $('#camp_cost').text(data.totalcost);
                                $('#rem_balance').text(data.remaining_balance);
                                $('#res_bal').text(data.res_bal);
                            }
                            $('.loading').hide();
                        },
                        error: function(data) {
                            $('.loading').hide();
                            alert("Something Went Wrong");
                        }
                    });
                });
            });
        </script>

        <script src="{{ url('scripts/custom_jquery.js') }}"></script>
        <script src="{{ url('scripts/custom_js.js') }}"></script>

        <script>
            var now = new Date();
            var camp_name = "Campaign {{ date('YmdHis') }}";
            document.querySelector('#campaign-name').value = camp_name;
        </script>

    @endsection
