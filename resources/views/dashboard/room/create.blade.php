@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Create Data</h1>
    </div>

    <form method="post" action="/dashboard/room/store">
        @csrf
        <div class="mb-3">
          <label for="RoomNumber" class="form-label">Number Room</label>
          <input type="number" name="RoomNumber"  id="RoomNumber"  class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="RoomType" class="form-label">Type Room</label>
          <input type="text" name="RoomType" id="RoomType" class="form-control" required >
        </div>
        <div class="mb-3">
          <label for="PricePerNight" class="form-label">Price Per Night</label>
          <input type="number" name="PricePerNight" id="PricePerNight"  class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
@endsection