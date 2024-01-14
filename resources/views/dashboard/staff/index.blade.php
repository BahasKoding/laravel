@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Table Staff</h1>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="text-success">{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a href="/dashboard/staff/create" class="btn btn-success mb-3">Create Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $staff->FirstName }}</td>
                        <td>{{ $staff->LastName }}</td>
                        <td>{{ $staff->Position }}</td>
                        <td>{{ $staff->Salary }}</td>
                        <td>
                            <a href="/dashboard/staff/edit/{{ $staff->id }}" class="btn btn-warning">Edit</a>
                            <a href="/dashboard/staff/destroy/{{ $staff->id }}"  class="btn btn-danger" onclick="return confirm('sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection