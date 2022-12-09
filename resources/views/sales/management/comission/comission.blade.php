@extends('layouts.admin-master') 
@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Comission</a>
            <span class="breadcrumb-item active">Comission list</span>
        </nav>
    </div>

    <div class="br-pagebody">

        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">{{Auth::user()->name}}'s Comission</h6>
                    <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                    <form method="GET" autocomplete="off">
                            <div class="d-md-flex pd-y-20 pd-md-y-0">
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="from_date" class="form-control datepicker camp_datepicker" placeholder="<?=date('Y-m-01')?>" 
                                           value= "<?php  if (isset($_REQUEST['from_date'])) echo $_REQUEST['from_date'];  ?>">
                                </div>
                                <div class="input-group  mg-b-10 ">
                                    <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                    <input type="text" name="to_date" class="form-control datepicker camp_datepicker" placeholder="<?= date('Y-m-d') ?>"  
                                    value="<?php  if (isset($_REQUEST['to_date'])) echo $_REQUEST['to_date'];  ?>">
                                </div>
                                <div class="input-group  mg-b-10 mg-r-10">
                                    <button type="submit" class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <br/>

                    <div class="table-wrapper">
                        <div class="bd rounded table-responsive">
                            <table class="table table-bordered mg-b-0">
                                <thead>
                                    <tr>
                                        <th>Total Sales</th>
                                        <th>Base Sales</th>
                                        <th>Comissionable Sales</th>
                                        <th>Comission</th>
                                        <th>Comission Amount</th>
                                        <th>Payable Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{$round}}</td>
                                        <td>{{$base_sales}}</td>
                                        <td>{{$comissionale_sales}}</td>
                                        <td><strong>{{(isset($comissions) ? $comissions : '0')}} % </strong></td>
                                        <td>{{round(($comissionale_sales)* ($comissions/100))}}</td>
                                        <td>
                                            @if($comissionale_sales < 1 )
                                            {{$round}}
                                        @else
                                        {{round(($comissionale_sales)* ($comissions/100) + $base_sales)}}
                                        @endif
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <br/>
      

        <div class="row">
            <div class="col-md-12">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Company Comission Plan</h6>

                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                            <thead>
                                <tr>
                                    <th>Minimum Sales</th>
                                    <th>Maximum Sales</th>
                                    <th>Comission Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($comission_list) > 0)
                                @foreach ($comission_list as $c)
                                <tr>
                                    <td>{{ $c->minimum }} &#2547;</td>
                                    <td>{{ $c->maximum }} &#2547;</td>
                                    <td>{{ $c->comission }} %</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Comission create yet!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if(count($comission_list) > 0)
                    {{ $comission_list->links( "pagination::bootstrap-4") }}
                    @endif
               </div>


                </div>
</div>
</div>


        

    </div>

</div>

@endsection


