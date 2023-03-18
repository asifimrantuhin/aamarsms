
                        <table class="table mg-b-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">User</th>
                                    <th class="text-center">GP SMS</th>
                                    <th class="text-center">BL SMS</th>
                                    <th class="text-center">Robi SMS</th>
                                    <th class="text-center">Airtel SMS</th>
                                    <th class="text-center">Teletalk SMS</th>

                                    <th class="text-center">Total Masking</th>
                                    <th class="text-center">Total Non Masking</th>
                                    <th class="text-center">Total SMS</th>
                                    <th class="text-center">Total PRICE</th>
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
                                $total_sms = 0;
                                $total_price = 0;
                                $total_masking = 0;
                                $total_nonmasking = 0;
                                @endphp

                                @foreach ($data as $sm)
                                
                                @php
                                $gp += (isset($sm->gp) ? $sm->gp : 0);
                                $bl += (isset($sm->bl) ? $sm->bl : 0);
                                $robi += (isset($sm->robi) ? $sm->robi : 0);
                                $airtel += (isset($sm->airtel) ? $sm->airtel : 0);
                                $teletalk += (isset($sm->teletalk) ? $sm->teletalk : 0);
                                $total_sms += $sm->total_sms;
                                $total_price += $sm->total_price;
                                $total_masking += $sm->mask;
                                $total_nonmasking += $sm->nonmask;
                                @endphp

                                <tr>
                                    <td class="text-center">{{ date('d-m-Y', strtotime($sm->sent_date)) }}</td>
                                    <td class="text-center">{{$sm->username}}</td>
                                    <td class="text-right">{{ (isset($sm->gp) ? $sm->gp : 0) }}</td>
                                    <td class="text-right">{{ (isset($sm->bl) ? $sm->bl : 0) }}</td>
                                    <td class="text-right">{{ $sm->robi }}</td>
                                    <td class="text-right">{{ $sm->airtel }}</td>
                                    <td class="text-right">{{ (isset($sm->teletalk) ? $sm->teletalk : 0) }}</td>
                                    <td class="text-right">{{ $sm->mask }}</td>
                                    <td class="text-right">{{ $sm->nonmask }}</td>
                                    <td class="text-right">{{ $sm->total_sms }}</td>
                                    <td class="text-right">{{ $sm->total_price }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">@if(isset($_REQUEST['user']))
                                        @if(!empty($_REQUEST['user']))
                                        {{$sm->username}}
                                        @else
                                        All
                                        @endif
                                        @else
                                        All
                                        @endif
                                    </th>
                                    <th class="text-right">{{ $gp }}</th>
                                    <th class="text-right">{{ $bl }}</th>
                                    <th class="text-right">{{ $robi}}</th>
                                    <th class="text-right">{{ $airtel}}</th>
                                    <th class="text-right">{{ $teletalk }}</th>
                                    <th class="text-right">{{ $total_masking }}</th>
                                    <th class="text-right">{{ $total_nonmasking }}</th>
                                    <th class="text-right">{{ $total_sms }}</th>
                                    <th class="text-right">{{ $total_price }}</th>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="10">No Records Found</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    
