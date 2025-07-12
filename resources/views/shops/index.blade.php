@extends('layouts.admin')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">All Products</h2>
    <a href="{{ route('shops.create') }}" class="btn btn-primary mb-3">Create New Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr>
                    <td>
                        @if ($shop->image && file_exists(public_path('storage/' . $shop->image)))
                            <img src="{{ asset('storage/' . $shop->image) }}" width="80" alt="Product Image">
                        @else
                            <img src="{{ asset('images/default.png') }}" width="80" alt="Default Image">
                        @endif
                    </td>
                    <td>{{ $shop->title }}</td>
                    <td>{{ number_format($shop->price, 0) }}</td>
                    <td>
                        <a href="{{ route('shops.edit', $shop->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('shops.destroy', $shop->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
