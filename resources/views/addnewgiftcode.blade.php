@extends('layouts.DashboardLayout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <br>
      <br>
      <br>
      <h3>Add New Gift Card</h3>
      <hr>
      <form action="{!! route('addNewGiftCodePost') !!}" method="post">
        @csrf
          <div class="form-group mb-4">
              <label for="formGroupExampleInput">Select A Gift Card:</label>
              <select class="form-control  basic" name="CodeType" required>
                @foreach ($products as $value)
                  <option value="{{ $value->id }}">{{ $value->price }} @if ($value->currency == "USD") USD @endif @if ($value->currency == "INR") INR @endif</option>
                @endforeach
              </select>
          </div>
          <div class="form-group mb-4">
              <label for="formGroupExampleInput2">Gift Code:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="GiftCode" placeholder="Enter your Gift Code Here" required>
          </div>
          <button type="submit" class="btn btn-primary"> Add Now </button>
      </form>
      @if (!empty(Session('status')))
        <div class="alert alert-success mt-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
          <strong>Great ! </strong> {{ Session('status') }}</button>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
