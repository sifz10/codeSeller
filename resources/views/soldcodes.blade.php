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
                        <h4>Sold Codes:</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Code Type</th>
                                <th>Code</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse ($soldCodes as $value)
                            @php
                            $code = DB::table('products')->where('id', $value->giftCodeType)->first();
                            @endphp
                            <tr>
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td> {{ $code->price }} {{ $code->currency }}</td>
                                <td> {{ $value->giftCode }}</td>
                                <td><p class="text-success">Sold</p></td>
                            </tr>
                          @empty
                            <td colspan="4" class="text-center"> -::No Codes Sold::- </td>
                          @endforelse
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
@endsection
