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
      <form action="{!! route('AddPaymentMethod') !!}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group mb-4">
              <label for="formGroupExampleInput">Payment Getway Name:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="paymentMethod" placeholder="Enter your Gift Code Here..." required>
          </div>
          <div class="form-group mb-4">
              <label for="formGroupExampleInput2">Account Number:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="AccountNumber" placeholder="Enter your Gift Code Here..." required>
          </div>
          <div class="form-group mb-4">
              <label for="formGroupExampleInput2">Payment Gateway Logo:</label>
              <input type="file" class="form-control" name="logo" required>
          </div>
          <button type="submit" class="btn btn-primary"> Add Now </button>
      </form>
    </div>
  </div>
  <br>
  <br>
  <hr>
  <h3>Payment Method List:</h3>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered mb-4">
      <thead>
        <tr>
          <th>Name</th>
          <th>Account Number</th>
          <th>Logo</th>
          <th class="text-center">Status</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($paymentMethod as $value)
          <tr>
            <td>{{ $value->paymentMethod }}</td>
            <td><span class="text-success">{{ $value->AccountNumber }}</span></td>
            <td> <img src="{!! asset('./uploads/'.$value->logo) !!}" alt="LOGO"></td>
            <td class="text-center"> <a href="{!! route('DeletePaymentMethod',$value->id) !!}" type="button" class="btn btn-danger">-Delete-</a></span></td>
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
          <strong>Ops!</strong> You just deleted the payment method.</button>
      </div>
    @endif
    @if (Session::has('success'))
      <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Well!</strong> You just added the payment method.</button>
      </div>
    @endif
  </div>
</div>


@endsection
