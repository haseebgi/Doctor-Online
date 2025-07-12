@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>Create Surgery</h2>
    <form method="POST" action="{{ route('surgeries.store') }}" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Discount Label</label>
            <input type="text" name="discount_label" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Subtext</label>
            <input type="text" name="subtext" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Button</label>
            <input type="text" name="button" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
