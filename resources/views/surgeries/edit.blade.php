@extends('layouts.admin')
@section('content')

<div class="container mt-4">
    <h2>Edit Surgery</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('surgeries.update', $surgery->id) }}" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $surgery->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Discount Label</label>
            <input type="text" name="discount_label" value="{{ $surgery->discount_label }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Subtext</label>
            <input type="text" name="subtext" value="{{ $surgery->subtext }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Button</label>
            <input type="text" name="button" value="{{ $surgery->button }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if ($surgery->image)
                <img src="{{ asset('storage/' . $surgery->image) }}" width="120" alt="Current Surgery Image">
            @else
                <img src="{{ asset('images/default.png') }}" width="120" alt="Default Image">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Surgery</button>
        <a href="{{ route('surgeries.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection
