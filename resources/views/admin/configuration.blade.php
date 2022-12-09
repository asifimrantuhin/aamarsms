@extends('layouts.admin-master')
@section('content')
<div class="br-mainpanel">
    <div class="pd-20">
        <h4 class="tx-gray-800 mg-b-5">Vendor Configurations</h4>
    </div>
    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-6">
                <div class="br-section-wrapper">
                    <h5>Non_Mask Vendor Route Configuration <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i></h5>
                    <table class="table mg-b-0 table-sm">
                        <tr>
                            <th>First Priority</th>
                            <th>Second Priority</th>
                            <th>Third Priority</th>
                        </tr>
                        <form class="form-horizontal" method="POST" action="{{ url('/admin/saveconfiguration') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <tr>
                            <td>
                                <select name="priority_1" class="form-control" required>
                                    <option value="" >Select vendor</option>
                                    <option value="mirtel" <?php if($api_status[0]->priority_1 =="mirtel") echo 'selected="selected"'; ?>>Mirtel</option>
                                    <option value="rankstel" <?php if($api_status[0]->priority_1 =="rankstel") echo 'selected="selected"'; ?>>RanksTel</option>
                                    <option value="adn" <?php if($api_status[0]->priority_1 =="adn") echo 'selected="selected"'; ?>>ADN</option>
                                    <option value="grameenphone" <?php if($api_status[0]->priority_1 =="grameenphone") echo 'selected="selected"'; ?>>GP</option>
                                    <option value="robi" <?php if($api_status[0]->priority_1 =="robi") echo 'selected="selected"'; ?>>Robi</option>
                                    <option value="teletalk" <?php if($api_status[0]->priority_1 =="teletalk") echo 'selected="selected"'; ?>>Teletalk</option>
                                    <option value="banglalink" <?php if($api_status[0]->priority_1 =="banglalink") echo 'selected="selected"'; ?>>Banglalink</option>
                               </select>
                            </td>
                            <td>
                                <select name="priority_2" class="form-control" required>
                                    <option value="" >Select vendor</option>
                                    <option value="mirtel" <?php if($api_status[0]->priority_2 =="mirtel") echo 'selected="selected"'; ?>>Mirtel</option>
                                    <option value="rankstel" <?php if($api_status[0]->priority_2 =="rankstel") echo 'selected="selected"'; ?>>RanksTel</option>
                                    <option value="adn" <?php if($api_status[0]->priority_2 =="adn") echo 'selected="selected"'; ?>>ADN</option>
                                    <option value="grameenphone" <?php if($api_status[0]->priority_2 =="grameenphone") echo 'selected="selected"'; ?>>GP</option>
                                    <option value="robi" <?php if($api_status[0]->priority_2 =="robi") echo 'selected="selected"'; ?>>Robi</option>
                                    <option value="teletalk" <?php if($api_status[0]->priority_2 =="teletalk") echo 'selected="selected"'; ?>>Teletalk</option>
                                    <option value="banglalink" <?php if($api_status[0]->priority_2 =="banglalink") echo 'selected="selected"'; ?>>Banglalink</option>
                               </select>
                            </td>
                            <td>
                                <select name="priority_3" class="form-control" required>
                                    <option value="" >Select vendor</option>
                                    <option value="mirtel" <?php if($api_status[0]->priority_3 =="mirteltel") echo 'selected="selected"'; ?>>Mirtel</option>
                                    <option value="rankstel" <?php if($api_status[0]->priority_3 =="rankstel") echo 'selected="selected"'; ?>>RanksTel</option>
                                    <option value="adn" <?php if($api_status[0]->priority_3 =="adn") echo 'selected="selected"'; ?>>ADN</option>
                                    <option value="grameenphone" <?php if($api_status[0]->priority_3 =="grameenphone") echo 'selected="selected"'; ?>>grameenphone</option>
                                    <option value="robi" <?php if($api_status[0]->priority_3 =="robi") echo 'selected="selected"'; ?>>Robi</option>
                                    <option value="teletalk" <?php if($api_status[0]->priority_3 =="teletalk") echo 'selected="selected"'; ?>>Teletalk</option>
                                    <option value="banglalink" <?php if($api_status[0]->priority_3 =="banglalink") echo 'selected="selected"'; ?>>Banglalink</option>
                               </select>
                            </td>
                        </tr>
                       <tr>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-success pull-right"> Save Configuration  </button> &nbsp;

                </form>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="br-section-wrapper">
                    <h5>API Status <i class="fa fa-link"></i></h5>
                    <table class="table mg-b-0 table-sm">
                            <thead>
                                <tr>
                                    
                                    <th>Vendor</th>
                                    <th>Date</th>
                                    <th>Credits</th>
                                    <th>Unit</th>
                                    <th>Status</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0 ; ?>
                                @if(count($vendors) > 0)
                                @foreach ($vendors as $op)
                                <?php if( $op->unit=='taka') $total = ($total+$op->credits) ; ?>
                                <tr class="{{($op->credits==0)?'text-danger':''}}">
                                    <td class="text-uppercase">{{ $op->name }}</td>
                                    <td>{{ date("Y-m-d h:i:s", strtotime($op->updated_at))  }}</td>
                                    <td><b>{{ $op->credits }}</b></td>
                                     <td>{{ $op->unit }}</td>
                                    <td>
                                        @if($op->status == 1)
                                          @if($op->credits <= 0)
                                        <span class="badge badge-pill badge-danger">Inactive</span>
                                        @else
                                        <span class="badge badge-pill badge-success">Active</span>
                                        @endif
                                        @else
                                        <span class="badge badge-pill badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <td colspan="4">No Balance Added yet</td>
                                </tr>
                                @endif
                                <tr>
                                    <th colspan="2" class="text-right"> Total </th>
                                    
                                     <th> {{ $total}} </th>
                                    <th colspan="2">                        
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <!-- br-pagebody -->

</div>

@endsection
