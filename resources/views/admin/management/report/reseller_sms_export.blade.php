
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">NAME</th>
                                    <th class="text-center" style="background: #1bb4f0;">GP SMS</th>
                                    <th class="text-center"  style="background:#f16a28">BL SMS</th>
                                    <th class="text-center" style="background: #f13b3b;">Robi SMS</th>
                                    <th class="text-center" style="background: #f13b3b;">Airtel SMS</th>
                                    <th class="text-center"  style="background: #6ac537;">Teletalk SMS</th>
                                    <th class="text-center" style="background: yellowgreen;">Total Masking</th>
                                    <th class="text-center" style="background: #b9e377;">Total Nonmasking</th>
                                    <th class="text-center" style="background: #c2e36b;">Total SMS</th>
                                    <!-- <th class="text-center" style="background: #a1dba1;">Total PRICE</th> -->
                                    <th class="text-center" style="background: #a1dba1;">Total PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @if(count($data) > 0)

                                @php
                                $gp = 0;
                                $bl = 0;
                                $robi = 0;
                                $airtel = 0;
                                $teletalk = 0;
                                $total_masking = 0;
                                $total_nonmasking = 0;
                                $total_sms = 0;
                                
                                $total_sell_price = 0;
                                @endphp

                                @foreach ($data as $sm)
                                
                                @php
                                $gp += (isset($sm->gp) ? $sm->gp : 0);
                                $bl += (isset($sm->bl) ? $sm->bl : 0);
                                $robi += (isset($sm->robi) ? $sm->robi : 0);
                                $airtel += (isset($sm->airtel) ? $sm->airtel : 0);
                                $teletalk += (isset($sm->teletalk) ? $sm->teletalk : 0);
                                $total_sms += $sm->total_sms;
                                
                                $total_masking += $sm->mask;
                                $total_nonmasking += $sm->nonmask;
                                $user = App\Models\User::select('users.name')->where('users.id',$sm->parent_user)->first();

                                
                                $total_sell_price += $sm->total_sell_price;
                                @endphp

                                <tr>
                                    <td class="text-center">{{ date('d-m-Y', strtotime($sm->sent_date)) }}</td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-right"  style="background: #1bb4f0;">{{ (isset($sm->gp) ? $sm->gp : 0) }}</td>
                                    <td class="text-right" style="background:#f16a28">{{ (isset($sm->bl) ? $sm->bl : 0) }}</td>
                                    <td class="text-right" style="background: #f13b3b;">{{ (isset($sm->robi) ?$sm->robi : 0) }}</td>
                                    <td class="text-right" style="background: #f13b3b;">{{ (isset($sm->airtel) ? $sm->airtel:0) }}</td>
                                    <td class="text-right"  style="background: #6ac537;">{{ (isset($sm->teletalk) ? $sm->teletalk : 0) }}</td>
                                    <td class="text-right" style="background: yellowgreen;">{{ (isset($sm->mask) ? $sm->mask:0) }}</td>
                                    <td class="text-right" style="background: #b9e377;">{{ (isset($sm->nonmask)? $sm->nonmask:0) }}</td>
                                    <td class="text-right" style="background: #c2e36b;">{{ (isset($sm->total_sms) ? $sm->total_sms:0) }}</td>
                                   
                                    <td class="text-right" style="background: #a1dba1;">{{ (isset($sm->total_sell_price) ? $sm->total_sell_price:0) }}</td>
                                </tr>
                                @endforeach
                                <tr style="font-size:14px">
                                    <th class="text-center">Total</th>
                                    <th class="text-center">@if(isset($_REQUEST['user']))
                                        @if(!empty($_REQUEST['user']))
                                        {{$sm->parent_user}}
                                        @else
                                        All
                                        @endif
                                        @else
                                        All
                                        @endif
                                    </th>
                                    <th class="text-right"  style="background: #1bb4f0;">{{ $gp }}</th>
                                    <th class="text-right" style="background:#f16a28">{{ $bl }}</th>
                                    <th class="text-right" style="background: #f13b3b;">{{ $robi}}</th>
                                    <th class="text-right" style="background: #f13b3b;">{{ $airtel}}</th>
                                    <th class="text-right" style="background: #6ac537;">{{ $teletalk }}</th>
                                    <th class="text-right" style="background: yellowgreen;">{{ $total_masking }}</th>
                                    <th class="text-right" style="background: #b9e377;">{{ $total_nonmasking }}</th>
                                    <th class="text-right" style="background: #c2e36b;">{{ $total_sms }}</th>
                                   
                                    <th class="text-right" style="background: #a1dba1;">{{ $total_sell_price }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="10">No Records Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    