@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Product</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price (Rs)</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
