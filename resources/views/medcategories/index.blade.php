
@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="text-dark fw-bold">All Medicine Categories</h3>
        <a href="{{ route('medcategories.create') }}" class="btn btn-success">
            ➕ Add New Category
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->company_name }}</td>
                    <td>{{ $cat->brand_name }}</td>
                    <td>
                        <a href="{{ route('medcategories.edit', $cat->id) }}" class="btn btn-sm btn-warning me-1">
                            ✏️ Edit
                        </a>

                        <form action="{{ route('medcategories.destroy', $cat->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                🗑️ Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if($categories->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No categories found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
