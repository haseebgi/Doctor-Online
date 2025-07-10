@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="/products/create" class="btn btn-primary mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Price (Rs)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>
                    @if($product->image && file_exists(public_path($product->image)))
                        <img src="{{ asset($product->image) }}" width="70" height="70" style="object-fit: contain;">
                    @else
                        <img src="https://via.placeholder.com/70" width="70" height="70" style="object-fit: contain;">
                    @endif
                </td>
                <td>{{ $product->title }}</td>
                <td>Rs. {{ $product->price }}</td>
                <td>
                    <a href="/products/{{ $product->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/products/{{ $product->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
