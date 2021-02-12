@extends('layouts.DashboardLayout')
@section('content')
<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h3>Add New Payment Gateway:</h3>
      <hr>
      <form action="{!! route('addProduct') !!}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-4">
              <label for="formGroupExampleInput">Select The Product type:</label>
              <select class="form-control" name="currency" placeholder="Please select a currency" required>
                <option value="USD">USD($)</option>
                <option value="INR">INR(₹)</option>
              </select>
          </div>
          <div class="form-group mb-4">
              <label for="formGroupExampleInput2">Price($/₹):</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Enter your price Here..." required>
          </div>
          <button type="submit" class="btn btn-primary"> Add Now </button>
      </form>
    </div>
  </div>
  <br>
  <br>
  <hr>
  <h3>All Product List:</h3>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered mb-4">
      <thead>
        <tr>
          <th>#</th>
          <th>Type</th>
          <th>Price</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($product as $value)
          <tr>
            <td>{{ $loop->index+1 }}</td>
            <td><span class="text-success">{{ $value->currency }}</span></td>
            <td><span class="text-success">{{ $value->price }}</span></td>
            <td class="text-center">
              <a href="{!! route('deleteProduct',$value->id) !!}" type="button" class="btn btn-danger">-Delete-</a></span>
            </td>
          </tr>
        @empty
          <td colspan="4" class="text-center">
            --::No Payment Mathod::--
          </td>
        @endforelse

      </tbody>
    </table>
    @if (Session::has('delete'))
      <div class="alert alert-danger mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Ops!</strong> {{ session('delete') }}</button>
      </div>
    @endif
    @if (Session::has('success'))
      <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Well!</strong> {{ session('success') }}</button>
      </div>
    @endif
  </div>
</div>
@endsection
