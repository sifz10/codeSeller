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
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $value)
                            <tr>
                                <td class="text-center">{{ $loop->index+1 }}</td>
                                <td> {{ $value->name }}</td>
                                <td><p class="text-success">{{ $value->email }}</p></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
@endsection
