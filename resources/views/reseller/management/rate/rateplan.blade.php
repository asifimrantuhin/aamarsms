@extends('layouts.admin-master') 
@section('content')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">User</a>
            <span class="breadcrumb-item active">Rate Plan</span>
        </nav>
    </div>

    <div class="br-pagebody">
        <div class="row">
            <div class="col-lg-12">
                <div class="br-section-wrapper">
                    <a href="" class="pull-right btn btn-outline-primary btn-md rateset" data-toggle="modal" data-target="#modaldemo3">Add Rate<i class="fa fa-plus"></i></a>
                   
                    <br/>
                    <br/>
                    <div class="bd-gray-300">
                        <table id="table_id" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    {{-- <th>Reseller</th> --}}
                                    <th>Operator</th>
                                    <th>Non_Mask</th>
                                    <th>Mask</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rates as $rate)
                                <tr>
                                    <td>{{ App\Models\User::where('id',$rate->user_id)->pluck('name')->first() }}</td>
                                    {{-- <td>{{ $rate->reseller->name }}</td> --}}
                                    <td class="tx-uppercase">{{ $rate->operator }}</td>
                                    <td>{{ number_format($rate->nonmasking_price,4) }}</td>
                                    <td>{{ number_format($rate->masking_price,4) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>      
</div>


 <!-- LARGE MODAL -->
 <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          
            <div class="form-layout form-layout-1">
                <form class="form-horizontal" method="POST" action="{{ url('reseller/rateplan/store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="row mg-b-25">
                      <div class="col-lg-4">
                          <div class="form-group">
                              <label class="form-control-label">
                                  Reseller / User :
                                  <span class="tx-danger">
                                      *
                                  </span>
                              </label>
                              <select name="user_id" aria-hidden="true" class="form-control select2 select2-hidden-accessible" data-placeholder="Choose User" tabindex="-1" required>
                                  <option label="Choose User">
                                  </option>
                                  @foreach($reseller as $r)
                                  <option value="{{$r->id}}">
                                      {{$r->name}}
                                  </option> 
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <!-- col-4 -->
                      <div class="col-lg-4">
              
                      </div>
                      <!-- col-4 -->
                      <div class="col-lg-4">
                      </div>

                      <div class="col-lg-12" id="form_element">
                        <div class="row mg-t-20">
                            <label class="col-sm-4">Rateplan:</label>
                            <div class="col-md-8 bd bd-gray-300 rounded table-responsive">
                                <table class="table table-bordered mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>Operator</th>
                                        <th>Normal Price</th>
                                        <th>Masking price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="hidden" name="operator[]" value="GP">GrameenPhone</td>
                                            <td><input type="number" class="form-control" name="non_mask[]" value="0.3000"></td>
                                            <td><input type="number" class="form-control" name="masking[]" value="0.5000"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="hidden" name="operator[]" value="RB">Robi</td>
                                            <td><input type="number" class="form-control" name="non_mask[]" value="0.3000"></td>
                                            <td><input type="number" class="form-control" name="masking[]" value="0.5000"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="hidden" name="operator[]" value="BL">Banglalink</td>
                                            <td><input type="number" class="form-control" name="non_mask[]" value="0.3000"></td>
                                            <td><input type="number" class="form-control" name="masking[]" value="0.5000"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="hidden" name="operator[]" value="TL">Teletalk</td>
                                            <td><input type="number" class="form-control" name="non_mask[]" value="0.3000"></td>
                                            <td><input type="number" class="form-control" name="masking[]" value="0.5000"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="hidden" name="operator[]" value="AL">Airtel</td>
                                            <td><input type="number" class="form-control" name="non_mask[]" value="0.3000"></td>
                                            <td><input type="number" class="form-control" name="masking[]" value="0.5000"></td>
                                        </tr>
                                </tbody>
                                </table>
                            </div> 
                            
                        </div>
                      </div>
                      <div class="col-lg-12" id="addmore_content">
                      </div>
                  </div>
                  <!-- row -->
                  <div class="form-layout-footer">
                      <button class="btn btn-info">
                          Submit
                      </button>
                      <button class="btn btn-secondary">
                          Cancel
                      </button>
                  </div>
                </form>
              </div>
        </div><!-- modal-body -->
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


<script type="text/javascript">
    // Datatable Script
        $(document).ready( function () {
        $('#table_id').DataTable();
        });
    // Datatable Script
</script>
@endsection