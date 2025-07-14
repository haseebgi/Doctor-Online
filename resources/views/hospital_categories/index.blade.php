
@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Hospital Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">All Hospital Categories</h2>

    <a href="{{ route('hospital_categories.create') }}" class="btn btn-primary mb-3">Create New Category</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>
                        <a href="{{ route('hospital_categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('hospital_categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this category?')">
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