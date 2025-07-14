@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">All Properties</h2>

    <a href="{{ route('properties.create') }}" class="btn btn-primary mb-3">Create New Property</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->description }}</td>
                    <td>
                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this?')" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
@endsection