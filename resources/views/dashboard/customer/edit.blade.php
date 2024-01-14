@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Update Data</h1>
    </div>

    <form method="post" action="/dashboard/customer/update/{{ $customer->id }}">
        @csrf
        <div class="mb-3">
          <label for="FirstName" class="form-label">First Name</label>
          <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{ $customer->FirstName }}" required >
        </div>
        <div class="mb-3">
          <label for="LastName" class="form-label">Last Name</label>
          <input type="text" name="LastName" id="LastName" class="form-control" value="{{ $customer->LastName }}" required >
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" name="Email" id="Email" class="form-control" value="{{ $customer->Email }}" required >
        </div>
        <div class="mb-3">
          <label for="Phone" class="form-label">Phone</label>
          <input type="number" name="Phone"  id="Phone"  class="form-control" value="{{ $customer->Phone }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
@endsection