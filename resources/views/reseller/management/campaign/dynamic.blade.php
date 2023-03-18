@extends('layouts.admin-master') 
@section('content')


    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Campaign</a>
                <span class="breadcrumb-item active">Dynamic SMS</span>
            </nav>
        </div>

        <div class="br-pagebody">

            <div class="row">
                <div class="col-sm-12">
                    <div class="br-section-wrapper">
                        <div class="form-layout form-layout-4">
                            <form id="campaign-form" method="POST" action="{{ url('reseller/dynamic_campaign') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="form-control-label"><strong>Enter SMS</strong><span
                                                class="tx-danger">*</span> &nbsp;
                                                <a href="{{url('/reseller/dynamicsms')}}" class="pull-right">Sample SMS <i class="fa fa-download"></i></a>
                                            </label>

                                        <textarea rows="6" type="text" id="campaign_message" name="campaign_message" class="form-control"
                                            placeholder="Dear #NAME#,How are you today? Your coupon code is #COUPON#" row="3" required></textarea>
                                        <p>
                                            Character Count: <span class="tx-warning" id="charectercount">0</span>&nbsp; |
                                            &nbsp;
                                            SMS Length: <span class="tx-warning" id="smscount">0</span>&nbsp; | &nbsp;
                                            SMS Type: <span class="tx-warning" id="sms-type">Text</span> &nbsp;
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-4"><label><strong>File</strong><span
                                            class="tx-danger">*</span>
                                            <a href="{{url('/reseller/dynamicfile')}}" class="pull-right">Sample File</a>
                                        </label></div>                          
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                            
                                            <input type="file" id="file" name="uploadfile"  accept=".xlsx, .xls" required>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                         
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="form-control-label"><strong>Mask Option</strong></label>
                                        <select class="form-control" id="mask" onchange="MaskCheck(this);"
                                            name="mask">
                                            <option value="0">Non Mask</option>
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
                                    <label class="form-control-label"><strong>Schedule Date Time &nbsp;</strong>
                                            <div class="arrowpopup" onmouseover="myFunction()" style="color:#428bca" title="Show Details"><strong> (?) </strong>
                                                <span class="tooltiptext" id="tooltipdemo">System will send SMS to your seleceted Time.
                                                    Choose a specific time to send sms
                                                </span>
                                            </div>
                                               </label>
                                        <input name="schedule" id="schedule" type="datetime-local" class="form-control"
                                            placeholder="YYYY-MM-DD HH:MM" />

                                    </div>
                                    <div class="col-lg-3">
                                        <!-- <label class="form-control-label"><strong>Campaign Name</strong></label> -->
                                        <input type="hidden" name="campaign_name" class="form-control"
                                            placeholder="Enter Campaign Name" id="campaign-name">
                                    </div>
                                </div>


                                <div class="form-layout-footer mg-t-30">
                                    <button type='submit' class="btn btn-info">Send <i class="fa fa-paper-plane"></i></button>
                                    <button type="reset" class="btn btn-secondary">Reset <i class="fa fa-undo"></i></button>
                                </div>
                            </form>


                        </div>
                        <!-- form-layout -->
                    </div>
                </div>


            </div>
         
            <!-- br-pagebody -->
        </div>


        <script type="text/javascript">
            function MaskCheck(that) {
                if (that.value == "1") {
                    document.getElementById("SenderIdShow").style.display = "block";
                } else {
                    document.getElementById("SenderIdShow").style.display = "none";
                }
            }

        </script>

<script>
function myFunction() {
var tt = document.getElementById("tooltipdemo");
tt.classList.toggle("show");
}
</script>


        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.js"></script>
       

        <script src="{{ url('scripts/custom_jquery.js') }}"></script>
        <script src="{{ url('scripts/custom_js.js') }}"></script>

        <script>
            var now = new Date();
            var camp_name = "{{ date('YmdHis') }}";
            document.querySelector('#campaign-name').value = camp_name;
        </script>

    @endsection
