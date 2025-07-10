

@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Hospital Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Edit Hospital Category</h2>

    <form method="POST" action="{{ route('hospital_categories.update', $category->id) }}" class="p-4 border rounded bg-light shadow-sm w-50">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category Title</label>
            <input type="text" name="title" value="{{ $category->title }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('hospital_categories.index') }}" class="btn btn-secondary">Back to List</a>
    </form>

</body>
</html>
@endsection