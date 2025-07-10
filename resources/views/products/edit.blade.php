@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
        </div>
        <div class="mb-3">
            <label>Price (Rs)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($product->image)
                <img src="{{ asset($product->image) }}" width="100" class="mt-2">
            @endif
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
