@extends('layouts.admin-master')
<style>
    .border-5 {
        border: 5px solid gray;
        padding: 20px;
        
    }
</style>
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Sales</a>
            <span class="breadcrumb-item active">Customer</span>
        </nav>
    </div>
    <div class="br-pagebody">
    
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <div class="form-layout">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Customer</h6>
                        <form class="form-horizontal" method="POST" action="{{ url('sales/updatecustomer/'.$data->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row">
                                <!--End Left Div -->
                                <div class="col-sm-6">

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cname" value="{{$data->cname}}" class="form-control" />
                                        </div>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Company Address: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <textarea rows="4" cols="50" name="caddress" class="form-control">{{$data->caddress}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Area Name: </label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control" name="area">
                                                <option value="">Select Area</option>
                                                 <option value="Abdullahpur" <?php if($data->area =="Abdullahpur") echo 'selected="selected"'; ?>>Abdullahpur</option>
                                                <option value="Agargaon" <?php if($data->area =="Agargaon") echo 'selected="selected"'; ?>>Agargaon</option>
                                                <option value="Ashulia" <?php if($data->area =="Ashulia") echo 'selected="selected"'; ?>>Ashulia</option>
                                                <option value="Badda" <?php if($data->area =="Badda") echo 'selected="selected"'; ?>>Badda</option>
                                                <option value="Banani" <?php if($data->area =="Banani") echo 'selected="selected"'; ?>>Banani</option>
                                                <option value="Banasree" <?php if($data->area =="Banasree") echo 'selected="selected"'; ?>>Banasree</option>
                                                <option value="Baridhara" <?php if($data->area =="Baridhara") echo 'selected="selected"'; ?>>Baridhara</option>
                                                <option value="Beraid" <?php if($data->area =="Beraid") echo 'selected="selected"'; ?>>Beraid</option>
                                                <option value="Birulia" <?php if($data->area =="Birulia") echo 'selected="selected"'; ?>>Birulia</option>
                                                <option value="Cantonment area" <?php if($data->area =="Cantonment area") echo 'selected="selected"'; ?>>Cantonment area</option>
                                                <option value="Dakshinkhan" <?php if($data->area =="Dakshinkhan") echo 'selected="selected"'; ?>>Dakshinkhan</option>
                                                <option value="Dania" <?php if($data->area =="Dania") echo 'selected="selected"'; ?>>Dania</option>
                                                <option value="Demra" <?php if($data->area =="Demra") echo 'selected="selected"'; ?>>Demra</option>
                                                <option value="Dhanmondi" <?php if($data->area =="Dhanmondi") echo 'selected="selected"'; ?>>Dhanmondi</option>
                                                <option value="Farmgate" <?php if($data->area =="Farmgate") echo 'selected="selected"'; ?>>Farmgate</option>
                                                <option value="Gabtali" <?php if($data->area =="Gabtali") echo 'selected="selected"'; ?>>Gabtali</option>
                                                <option value="Gazipur" <?php if($data->area =="Gazipur") echo 'selected="selected"'; ?>>Gazipur</option>
                                                <option value="Gulshan" <?php if($data->area =="Gulshan") echo 'selected="selected"'; ?>>Gulshan</option>
                                                <option value="Hazaribagh" <?php if($data->area =="Hazaribagh") echo 'selected="selected"'; ?>>Hazaribagh</option>
                                                <option value="Islampur" <?php if($data->area =="Islampur") echo 'selected="selected"'; ?>>Islampur</option>
                                                <option value="Jurain" <?php if($data->area =="Jurain") echo 'selected="selected"'; ?>>Jurain</option>
                                                <option value="Kafrul" <?php if($data->area =="Kafrul") echo 'selected="selected"'; ?>>Kafrul</option>
                                                <option value="Kamalapur" <?php if($data->area =="Kamalapur") echo 'selected="selected"'; ?>>Kamalapur</option>
                                                <option value="Kamrangirchar" <?php if($data->area =="Kamrangirchar") echo 'selected="selected"'; ?>>Kamrangirchar</option>
                                                <option value="Kazipara" <?php if($data->area =="Kazipara") echo 'selected="selected"'; ?>>Kazipara</option>
                                                <option value="Keraniganj" <?php if($data->area =="Keraniganj") echo 'selected="selected"'; ?>>Keraniganj</option>
                                                <option value="Khilgaon" <?php if($data->area =="Khilgaon") echo 'selected="selected"'; ?>>Khilgaon</option>
                                                <option value="Khilkhet" <?php if($data->area =="Khilkhet") echo 'selected="selected"'; ?>>Khilkhet</option>
                                                <option value="Kotwali" <?php if($data->area =="Kotwali") echo 'selected="selected"'; ?>>Kotwali</option>
                                                <option value="Lalbagh" <?php if($data->area =="Lalbagh") echo 'selected="selected"'; ?>>Lalbagh</option>
                                                <option value="Matuail" <?php if($data->area =="Matuail") echo 'selected="selected"'; ?>>Matuail</option>
                                                <option value="Mirpur" <?php if($data->area =="Mirpur") echo 'selected="selected"'; ?>>Mirpur</option>
                                                <option value="Mohakhali" <?php if($data->area =="Mohakhali") echo 'selected="selected"'; ?>>Mohakhali</option>
                                                <option value="Mohammadpur" <?php if($data->area =="Mohammadpur") echo 'selected="selected"'; ?>>Mohammadpur</option>
                                                <option value="Motijheel" <?php if($data->area =="Motijheel") echo 'selected="selected"'; ?>>Motijheel</option>
                                                <option value="Nimtoli" <?php if($data->area =="Nimtoli") echo 'selected="selected"'; ?>>Nimtoli</option>
                                                <option value="Pallabi" <?php if($data->area =="Pallabi") echo 'selected="selected"'; ?>>Pallabi</option>
                                                <option value="Paltan" <?php if($data->area =="Paltan") echo 'selected="selected"'; ?>>Paltan</option>
                                                <option value="Ramna" <?php if($data->area =="Ramna") echo 'selected="selected"'; ?>>Ramna</option>
                                                <option value="Rampura" <?php if($data->area =="Rampura") echo 'selected="selected"'; ?>>Rampura</option>
                                                <option value="Sabujbagh" <?php if($data->area =="Sabujbagh") echo 'selected="selected"'; ?>>Sabujbagh</option>
                                                <option value="Sadarghat" <?php if($data->area =="Sadarghat") echo 'selected="selected"'; ?>>Sadarghat</option>
                                                <option value="Satarkul" <?php if($data->area =="Satarkul") echo 'selected="selected"'; ?>>Satarkul</option>
                                                <option value="Savar" <?php if($data->area =="Savar") echo 'selected="selected"'; ?>>Savar</option>
                                                <option value="Shahbagh" <?php if($data->area =="Shahbagh") echo 'selected="selected"'; ?>>Shahbagh</option>
                                                <option value="Sher-e-Bangla Nagar" <?php if($data->area =="Sher-e-Bangla Nagar") echo 'selected="selected"'; ?>>Sher-e-Bangla Nagar</option>
                                                <option value="Shyampur" <?php if($data->area =="Shyampur") echo 'selected="selected"'; ?>>Shyampur</option>
                                                <option value="Sutrapur" <?php if($data->area =="Sutrapur") echo 'selected="selected"'; ?>>Sutrapur</option>
                                                <option value="Tejgaon" <?php if($data->area =="Tejgaon") echo 'selected="selected"'; ?>>Tejgaon</option>
                                                <option value="Tongi" <?php if($data->area =="Tongi") echo 'selected="selected"'; ?>>Tongi</option>
                                                <option value="Uttara" <?php if($data->area =="Uttara") echo 'selected="selected"'; ?>>Uttara</option>
                                                <option value="Uttarkhan" <?php if($data->area =="Uttarkhan") echo 'selected="selected"'; ?>>Uttarkhan</option>
                                                <option value="Vatara" <?php if($data->area =="Vatara") echo 'selected="selected"'; ?>>Vatara</option>
                                                <option value="Wari" <?php if($data->area =="Wari") echo 'selected="selected"'; ?>>Wari</option>
                                                <option value="Others" <?php if($data->area =="Others") echo 'selected="selected"'; ?>>Others</option>
                                            </select>
                                            
                                           
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Representative: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cperson" value="{{$data->cperson}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Designation: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="designation" value="{{$data->designation}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Email Address: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="email" name="email" value="{{$data->email}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Mobile No: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="number" name="mobile" value="{{$data->mobile}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer Requirement: </label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            
                                           <label>
                                               <input type="checkbox" name="requirement[]" value="masking" {{in_array("masking",$requirement)?"checked":""}}> Masking &nbsp;&nbsp;&nbsp;
                                               <input type="checkbox" name="requirement[]" value="non-masking" {{in_array("non-masking",$requirement)?"checked":""}}> Non-Masking
                                               <input type="checkbox" name="requirement[]" value="Location-based" {{in_array("Location-based",$requirement)?"checked":""}}> Location-based
                                           </label>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Proposal Required?: </label>
                                        <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                            <label class="rdiobox">
                                                <input name="proposal" value="1" type="radio" @if($data->proposal == 1)
                                                checked
                                                @endif
                                                >
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                            <label class="rdiobox">
                                                <input name="proposal" value="2" type="radio" @if($data->proposal == 2)
                                                checked
                                                @endif
                                                >
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer Priority: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control" name="priority" required>
                                                <option value="">Select Priority</option>
                                                <option value="Succeed" <?php if($data->priority =="Succeed") echo 'selected="selected"'; ?>>Succeed</option>
                                                <option value="high" <?php if($data->priority =="high") echo 'selected="selected"'; ?>>High</option>
                                                <option value="medium" <?php if($data->priority =="medium") echo 'selected="selected"'; ?>>Medium</option>
                                                <option value="low" <?php if($data->priority =="low") echo 'selected="selected"'; ?>>Low</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label" title="Return Visit Feedback">Customer FeedBack(New): <span
                                                class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cfeedback" value="{{$data->cfeedback}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Customer FeedBack(Old):</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" name="cfeedback2"  value="{{$data->cfeedback2}}" class="form-control" disabled/>  
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Source: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select class="form-control" name="source" required>
                                                <option value="">Select Source</option>
                                                <option value="Direct Visit" <?php if($data->source =="Direct Visit") echo 'selected="selected"'; ?>>Direct Visit</option>
                                                <option value="Facebook" <?php if($data->source =="Facebook") echo 'selected="selected"'; ?>>Facebook</option>
                                                <option value="Google Search" <?php if($data->source =="Google Search") echo 'selected="selected"'; ?>>Google Search</option>
                                                <option value="LinkedIn" <?php if($data->source =="LinkedIn") echo 'selected="selected"'; ?>>LinkedIn</option>
                                                <option value="AamarSMS Form" <?php if($data->source =="AamarSMS Form") echo 'selected="selected"'; ?>>AamarSMS Form</option>
                                                <option value="Web Directory" <?php if($data->source =="Web Directory") echo 'selected="selected"'; ?>>Web Directory</option>
                                                <option value="Email" <?php if($data->source =="Email") echo 'selected="selected"'; ?>>Email</option>
                                                <option value="Referrals" <?php if($data->source =="Referrals") echo 'selected="selected"'; ?>>Referrals</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Visiting Date: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" name="visiting_date" class="form-control" value="{{$data->visiting_date}}" disabled/>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">Next Follow-up: (if any)</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="date" id="txtDate" name="followup" class="form-control" value="{{$data->followup}}"/>
                                        </div>
                                    </div>
                                    <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label"></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                        </div>
                                    </div>


                                </div>
                                <!--End Left Div -->

                                @if($data->cost)
                                <div class="col-sm-6">
                                    <!--Start Right Div -->
                                    <div class="border border-gray border-5">
                                        <h7 class="tx-gray-800 tx-bold tx-7 ">Conveyance Information</h7>

                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Cost: </label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                    <input type="number" name="cost" class="form-control" value="{{$data->cost}}" disabled/>
                                                </div>
                                            </div>


                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Place (From): </label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                    <input type="text" name="from" class="form-control" value="{{$data->from}}" disabled/>
                                                </div>
                                            </div>

                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Place (To): </label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                    <input type="text" name="to" class="form-control" value="{{$data->to}}" disabled/>
                                                </div>
                                            </div>


                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Transport: </label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="transaport" class="form-control" value="{{$data->transaport}}" disabled/>
                                                </div>
                                            </div>
                                        </div><!-- Border Div -->
                                    
                                    @else
                                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">No Convyance</h6> 
                                    @endif



                                    <div class="form-layout-footer mg-t-30">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" type="button" class="btn btn-default">Back</a>
                            </div>


                                </div>
                                <!--End Right Div -->


                            </div>
                            <!--End Row -->
                            
                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



@endsection