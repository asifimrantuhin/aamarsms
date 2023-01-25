@extends('layouts.admin-master') 
@section('content')
<style type="text/css">
	table td, table th{color: #000 !important}
</style>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Reseller SMS Transactions Report</a>
        </nav>
    </div>
    <div class="br-pagebody" style="margin-top:0 ;">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Reseller SMS Transactions Report</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                        <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10"> 
                                    <select name="user" class="form-control mg-md-l-10">
                                        <option value="">All</option>
                                        @foreach($userlist as $user)
                                        <option value="{{$user->id}}"
                                        <?php
                                        if (isset($_REQUEST['user'])) {
                                            if ($_REQUEST['user'] == $user->id)
                                                echo "selected";
                                        }
                                        ?>
                                                >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="Date From" 
                                           value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="Date To"  
                                           value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br/>
                    <div class="bd bd-gray-300 rounded table-responsive">
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
                               
                                @if(count($sms_report) > 0)

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

                                @foreach ($sms_report as $sm)
                                
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
                    </div>
                    <br/>
                   
                </div>
            </div>

        </div>
    </div>      
</div>


@endsection
