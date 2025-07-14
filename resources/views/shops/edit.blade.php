@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <h2>Edit Product</h2>

    <form method="POST" action="{{ route('shops.update', $shop->id) }}" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm col-12">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Title</label>
            <input type="text" name="title" value="{{ $shop->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" value="{{ $shop->price }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($shop->image)
                <small class="d-block mt-2">Current Image:</small>
                <img src="{{ asset('storage/' . $shop->image) }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('shops.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection
