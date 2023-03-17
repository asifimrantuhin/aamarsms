                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Reseller</th>
                                        <th>Executive</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Current Balance</th>
                                        <th>Note</th>
                                        <th>Payment Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $total = 0 ;
                                     ?>
                                    @if(count($data)> 0)
                                    @foreach ($data as $r)
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->user_name}}</td>
                                        <td>
                                        @php
                                        $reseller = App\Models\User::where('id',$r->reseller_id)->pluck('name')->first();  
                                        @endphp
                                        {{$reseller}}
                                        </td>
                                        <td>  @php
                                            $sales = DB::table('users')->where('id',$r->sales_id)->pluck('name')->first();  
                                          @endphp
                                          {{$sales}}
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($r->created_at))}}</td>
                                        <td class="text-right">{{number_format($r->amount, 0)}}</td>
                                        <td class="text-right">{{number_format($r->balance, 2)}}</td>
                                        <td>{{$r->comments}}</td>
                                        
                                        <td>
                                            @if($r->adm_payment == 2)
                                            <span class="badge badge-success">  Paid</span>
                                            @else
                                            <span class="badge badge-warning">  Unpaid</span>
                                            @endif
                                            </td>
                                        

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8">No records found!</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th colspan="4" class="text-right">Sub Total </th>
                                        
                                         <th> {{ $total}} </th>
                                        <th colspan="2">                        
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
