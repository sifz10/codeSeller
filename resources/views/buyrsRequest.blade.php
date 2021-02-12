@extends('layouts.DashboardLayout')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">

      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>Request Table</h4>
                  </div>
              </div>
          </div>
          <div class="widget-content widget-content-area">
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th class="text-center">#</th>
                              <th class="text-center">User</th>
                              <th class="text-center">Payment Method</th>
                              <th class="text-center">Account Number</th>
                              <th class="text-center">Amount</th>
                              <th class="text-center">Product</th>
                              <th class="text-center">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $value)
                          <tr>
                              <td class="text-center">{{ $loop->index+1 }}</td>
                              <td class="text-center">{{ DB::table('users')->where('id', $value->user_id)->value('name') }}</td>
                              <td class="text-center">{{ $value->paymentMethod }}</td>
                              <td class="text-center">{{ $value->accountNumber }}</td>
                              <td class="text-center">{{ $value->amount }}</td>
                              <td class="text-center">{{ DB::table('products')->where('id', $value->product_id)->value('price') }} {{ DB::table('products')->where('id', $value->product_id)->value('currency') }}</td>
                              <td  class="text-center">
                                <a href="" class="btn btn-success" data-toggle="modal" data-target="#approve{{$value->id}}">Approve</a>
                                {{-- {!! route('ApproveRequest',[$value->id, $value->product_id]) !!} --}}
                                <a href="#" class="btn btn-danger">Denine</a>
                              </td>
                          </tr>
                          <!-- Modal -->
                          <div class="modal animated zoomInUp custo-zoomInUp show" id="approve{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Do you want to approve this?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  <a href="{!! route('ApproveRequest',[$value->id, $value->product_id]) !!}" type="button" class="btn btn-primary">Yes</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
          </div>

          @if (Session::has('success'))
            <div class="alert alert-success">
              <strong>OK! </strong> {{ session('success') }}
            </div>
          @endif
        </div>
@endsection
