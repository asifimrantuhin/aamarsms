@extends('layouts.admin-master')

@section('content')
<link href="{{ url('public/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Comission</a>
            <span class="breadcrumb-item active">Executive Comission List</span>
        </nav>
    </div>

    <div class="br-pagebody">
        @include('inc.alert')
        <div class="br-section-wrapper">
           
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Executive Comission List</h6>
            <br/>
            <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <form method="GET" autocomplete="off">
                    <!--{{ csrf_field() }}-->
                    <div class="d-md-flex pd-y-20 pd-md-y-0">
                    
                        
                        <div class="input-group  mg-b-10 mg-r-10">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="<?=date('Y-m-01')?>" 
                                   value="<?php if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date']; ?>">
                        </div>
                        <div class="input-group  mg-b-10 ">
                            <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                            <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="<?= date('Y-m-d') ?>"  
                                   value="<?php if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date']; ?>">
                        </div>
                        <div class="input-group  mg-b-10 mg-r-10">
                            <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <br/>
            <div class="row">
                <div class="col-sm-12">
            <div class="table-wrapper">
                <div class="bd rounded table-responsive">
                    <table class="table table-bordered mg-b-0 table-small">
                        <thead>
                            <tr>
                                <th>Executive</th>
                                <th>Total Sale</th>
                                <th>Base Sale</th>
                                <th>Comissionable Sale</th>
                                <th>Comission</th>
                                <th>Comission Amount</th>
                                <th>Payable amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $ts = 0;
                                $cs = 0;
                                 ?>
                        @if(count($total_recharge) > 0)
                        @foreach($total_recharge as $total_recharge)
                        <?php 
                        if( $total_recharge->total_sale >=0) $ts = ($ts+$total_recharge->total_sale) ;
                        $cs = ($cs+$total_recharge->total_sale)
                         ?>
                        <tr>
                        <td>
                            @php
                            $username = DB::table('users')->where('id',$total_recharge->sales_id)->pluck('name')->first();
                            @endphp
                            {{$username}}
                        </td>
                        <td>{{$total_sales =$total_recharge->total_sale}}</td>
                        <td>
                            @php
                            $base_sales = DB::table('users')->where('id',$total_recharge->sales_id)->pluck('base_sales')->first();
                            @endphp
                            {{$base_sales}}
                        </td>
                        <td>{{$comissionable_sales = $total_sales - $base_sales}}</td>
                        <td>
                            @php
                            $comission_percentage = 0;
                            $com = 0;
                            $comissions = DB::table('comissions')
                             ->where('sales',$total_recharge->sales_id)
                            //->where('maximum','>',$total_recharge->extra_sale)
                           //->pluck('comission')
                            ->get();
                            //print_r($comissions);
                            foreach($comissions as $c){
                                if($comissionable_sales >= $c->minimum  &&  $comissionable_sales <= $c->maximum){
                                    $comission_percentage = $c->comission;
                                }
                            }
                            echo $comission_percentage."%";
                            @endphp
                        </td>
                        <td>
                            @php
                            if($comissionable_sales > 0){
                                $com = (($comissionable_sales / 100) * $comission_percentage);
                            }  
                            echo number_format($com);
                            @endphp
                        </td>
                        <td>
                            @php
                            if($comissionable_sales > 0){
                                $payable = $base_sales +  $com;   
                            }else{
                                $payable = $base_sales + $comissionable_sales;
                            }
                            echo number_format($payable);
                            

                            @endphp
                        </td>
                        {{-- <td style="text-align: right">{{$total_recharge->total_recharge}}</td>
                        <td style="text-align: right">{{$total_recharge->base_sales}}</td>
                        <td style="text-align: right">{{$total_recharge->extra_sale}}</td>
                        <td style="text-align: right"> 
                        @php
                        $comission_percentage = 0;
                        $com = 0;
                        $comissions = DB::table('comissions')
                         ->where('sales',$total_recharge->sales_person)
                        //->where('maximum','>',$total_recharge->extra_sale)
                       //->pluck('comission')
                        ->get();

                        //print_r($comissions);

                        foreach($comissions as $c){
                            if($total_recharge->extra_sale >= $c->minimum  &&  $total_recharge->extra_sale <= $c->maximum){
                                $comission_percentage = $c->comission;
                            }
                        }

                        echo $comission_percentage."%";


                        @endphp
                       </td>
                        <td style="text-align: right">
                            @php
                            if($total_recharge->extra_sale > 0){
                                $com = (($total_recharge->extra_sale / 100) * $comission_percentage);
                            }
                            
                            echo number_format($com);
                            @endphp

                        </td>


                        <td style="text-align: right">
                            @php
                            if($total_recharge->extra_sale > 0){
                                $payable = $total_recharge->base_sales +  $com;   
                            }else{
                                $payable = $total_recharge->base_sales + $total_recharge->extra_sale;
                            }
                            echo number_format($payable);
                            

                            @endphp

                        </td> --}}

                        </tr>
                        @endforeach
                        @else
                        <tr>
                        <td colspan="3">No Comission Generated yet</td>
                        </tr>
                        @endif
                        <tr>
                            <th colspan="1" class="text-right"> Total </th>
                            
                             <th> {{ $ts}} </th>
                            <th colspan="2">                        
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                </div>
            </div>
             
        </div>
    </div>

</div>

<!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
