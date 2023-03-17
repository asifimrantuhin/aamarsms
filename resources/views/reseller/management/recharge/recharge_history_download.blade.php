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
                                        <th>Balance</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ; ?>
                                    @if(count($data)> 0)
                                    @foreach ($data as $r)
                                    <?php if( $r->amount >=0) $total = ($total+$r->amount) ; ?>
                                    <tr>
                                        <td>{{$r->user->name}}</td>
                                        <td>
                                        @php
                                        $reseller = DB::table('users')->where('id',$r->user->parent_user)->pluck('name')->first();  
                                        @endphp
                                        {{$reseller}}
                                        </td>
                                        <td>  @php
                                            $sales = DB::table('users')->where('id',$r->sales_id)->pluck('name')->first();  
                                          @endphp
                                          {{$sales}}
                                        </td>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                        <td>{{$r->comments}}</td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7">No records found!</td>
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
                       