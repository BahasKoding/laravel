@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Table Room</h1>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="text-success">{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard/room/create" class="btn btn-success mb-3">Create Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Number Room</th>
                    <th scope="col">Type Room</th>
                    <th scope="col">Price Per Night</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $room->RoomNumber }}</td>
                        <td>{{ $room->RoomType }}</td>
                        <td>{{ $room->PricePerNight }}</td>
                        <td>
                            <a href="/dashboard/room/edit/{{ $room->id }}" class="btn btn-warning">Edit</a>
                            <a href="/dashboard/room/destroy/{{ $room->id }}"  class="btn btn-danger" onclick="return confirm('sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection