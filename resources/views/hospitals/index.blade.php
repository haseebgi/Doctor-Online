
@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Hospitals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">All Hospitals</h2>
    <a href="{{ route('hospitals.create') }}" class="btn btn-primary mb-3">Create New Hospital</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Description</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
                <tr>
                 <td>
    @if ($hospital->icon && file_exists(public_path('storage/' . $hospital->icon)))
        <img src="{{ asset('storage/' . $hospital->icon) }}" alt="Hospital Icon" width="80">
    @else
        <img src="{{ asset('images/default.png') }}" alt="Default Icon" width="80">
    @endif
</td>

                    <td>{{ $hospital->name }}</td>
                    <td>{{ $hospital->phone_no }}</td>
                    <td>{{ $hospital->title }}</td>
                    <td>{{ $hospital->description }}</td>
                    <td>{{ $hospital->address }}</td>
                    <td>
                        <a href="{{ route('hospitals.edit', $hospital->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
@endsection