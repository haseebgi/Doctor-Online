

@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Edit Hospital</h2>

    <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Hospital Name</label>
            <input type="text" name="name" value="{{ $hospital->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hospital Image</label>
            <input type="file" name="icon" class="form-control">
            @if ($hospital->icon)
                <small class="text-muted">Current file: {{ $hospital->icon }}</small>
            @else
                <small class="text-muted">No image uploaded.</small>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $hospital->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $hospital->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone_no" value="{{ $hospital->phone_no }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Map Direction</label>
            <input type="text" name="map_direction" value="{{ $hospital->map_direction }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" value="{{ $hospital->address }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Hospital Category ID</label>
            <input type="number" name="hospital_category_id" value="{{ $hospital->hospital_category_id }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Property ID</label>
            <input type="number" name="property_id" value="{{ $hospital->property_id }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update Hospital</button>
        <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Back to List</a>
    </form>

</body>
</html>
@endsection