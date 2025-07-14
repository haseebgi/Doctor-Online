@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <div class="card shadow border-0">
        <div class="card-header bg-light text-dark">
            <h4 class="mb-0">Create New Product</h4>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('shops.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Product Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter product name" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Price</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Product Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Save Product</button>
                    <a href="{{ route('shops.index') }}" class="btn btn-secondary">Back to Products</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
