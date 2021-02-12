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
                        <h4>Progress Table</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>PRODUCTS</th>
                                <th>Progress Bar</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $value)
                            <tr>
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td>{{ $value->price }} {{ $value->currency }}</td>
                                <td>
                                    <div class="progress br-30">
                                        <div class="progress-bar br-30 bg-success" role="progressbar" style="width: {{ $value->quantity }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td><p class="text-success">{{ $value->quantity }}</p></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
@endsection
