@extends('layouts.admin-master') 
@section('content')



<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Campaign</a>
            <span class="breadcrumb-item active">Modify Campaign</span>
        </nav>
    </div>

    <div class="br-pagebody">
       
        <div class="row">
            <div class="col-sm-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Modify Campaign</h6>
                    <div class="form-layout form-layout-4">

                        <form id="campaign-form" action="{{url('user/update_campaign/'.$campaign->id)}}" method="POST" autocomplete="off">
                            {{csrf_field()}}
                            <div class="row">
                                <!-- <label class="form-control-label">Campaign Name: <span class="tx-danger">*</span></label> -->

                                <input type="hidden" value="{{ $campaign->campaign_name}}" name="campaign_name" class="form-control" placeholder="Enter Campaign Name" id="campaign-name">

                            </div>



                            <div class="row mg-t-20">
                                <label class="form-control-label">Campaign Message: <span class="tx-danger">*</span></label>

                                <textarea rows="6" maxlength="1071" type="text" id="campaign_message" name="campaign_message" class="form-control" placeholder="Enter Campaign Message" row="3" required>{{ $campaign->text_body}}</textarea>
                                <p>
                                    Character Count: <span class="tx-warning"  id="charectercount">0</span> &nbsp;
                                    SMS Count: <span class="tx-warning"  id="smscount">0</span> &nbsp;
                                    SMS Type: <span class="tx-warning"  id="sms-type">Text</span> &nbsp;
                                </p>

                            </div>

                            <hr>


                            <div class="row mg-t-20">
                                <label class=" form-control-label">Start Time:</label>
                                <input name="schedule" id="schedule" type="datetime-local" class="form-control"
                                            placeholder="YYYY-MM-DD HH:MM" value="{{ $campaign->start_date}}"/>
                            </div>



                            <div class="form-layout-footer mg-t-30">
                                <button type='submit' class="btn btn-info">Update</button>
                                <!--<button type="reset" class="btn btn-secondary">Reset</button>-->

                            </div>
                        </form>
                        <!-- form-layout-footer -->
                    </div>
                    <!-- form-layout -->
                </div>
            </div>


        </div>
        <!-- br-pagebody -->
    </div>

    @endsection
