
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Comments/Campaign</th>
                                        <th>Amount</th>
                                        <th>Current Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($data) > 0)
                                    @foreach ($data as $r)
                                    <tr>
                                        <td>{{$r->created_at}}</td>
                                        <td>{{$r->name}} ({{$r->email}})</td>
                                        <td>{{$r->comments}}</td>
                                        <td>{{number_format($r->amount, 4)}}</td>
                                        <td>{{number_format($r->balance, 4)}}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td class="text-center" colspan="5">No transection yet!</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        