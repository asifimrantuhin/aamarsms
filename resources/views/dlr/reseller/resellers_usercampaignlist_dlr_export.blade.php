	                    <table class="table table-bordered mg-b-0 table-small">
	                        <thead>
	                            <tr>
	                            	<th>User</th>
	                                <th>Submit Time</th>
	                                <th>SenderID</th>
	                                <th>SMS Text</th>
	                                <th>Total Number</th>
	                                <th>Sent<br/><span style="font-size:8px">(Number)</span></th>
	                                <th>Failed<br/><span style="font-size:8px">(Number)</span></th>
	                                <th>SMS length</th>
	                                <th>Total SMS Count</th>
	                                <th class="text-center">Charged</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        @if(count($data) > 0)
	                       
	                            @foreach($data as $campaign)
	                            <tr>
	                            
	                            <td>{{$campaign->username}}</td>
	                            <td>{{ date("d-M-y h:iA", strtotime($campaign->start_date))}}</td>
	                            <td>@if(empty($campaign->sender))
	                                Non-masking
	                                @else
	                                <strong class="tx-dark">{{$campaign->sender}}</strong>
	                                @endif
	                                @if($campaign->dynamic_sms == 1)
	                                <br/><span style="font-size: 7px; color:#000">(Dynamic SMS)</span>
	                                @endif
	                            </td>
	                            <td>{{$campaign->text_body}}</td>
	                            <th>
	                            @php 
	                            $suc =  App\Models\sms_transactions::where('campaign_id',$campaign->id)->count('mobile_number');
	                            $fail = App\Models\sms_senders::where('campaign_id',$campaign->id)->count('number');
	                            $succ = $suc + $fail;
	                            @endphp
	                            {{$succ}}
	                            </th><th><span class="text-success">
	                            @php 
	                            $s = App\Models\sms_transactions::where('campaign_id',$campaign->id)->where('status',1)->count();
	                            @endphp
	                            {{$s}}
	                            </span></th>
	                            <th>
	                                <span class="text-danger">{{ $fail = $succ-$s }}</span>
	                            </th>

	                            <th>{{$campaign->sms_count}}</th>
	                            <td>{{$campaign->sms_count * $succ}}</td>
	                            <td>{{number_format($campaign->campaign_cost, 4)}}</td>
	                       		
	                            </tr>
	                            @endforeach
	                            @else
	                            <tr>
	                                <td colspan="9">No Log!</td>
	                            </tr>
	                            @endif
	                        </tbody>
	                    </table>
	                