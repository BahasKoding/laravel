@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Create Data</h1>
    </div>

    <form method="post" action="/dashboard/customer/store">
        @csrf
        <div class="mb-3">
          <label for="FirstName" class="form-label">First Name</label>
          <input type="text" name="FirstName" id="FirstName" class="form-control" required >
        </div>
        <div class="mb-3">
          <label for="LastName" class="form-label">Last Name</label>
          <input type="text" name="LastName" id="LastName" class="form-control" required >
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" name="Email" id="Email" class="form-control" required >
        </div>
        <div class="mb-3">
          <label for="Phone" class="form-label">Phone</label>
          <input type="number" name="Phone"  id="Phone"  class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
@endsection