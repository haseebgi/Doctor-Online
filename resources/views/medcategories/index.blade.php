@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary fw-semibold">All Medicine Categories</h3>
        <a href="{{ route('medcategories.create') }}" class="btn btn-success btn-lg fw-semibold">
            ➕ Add New Category
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded border">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead class="table-light fw-semibold">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Brand</th>
                    <th scope="col" style="width: 160px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->company_name }}</td>
                    <td>{{ $cat->brand_name }}</td>
                    <td>
                        <a href="{{ route('medcategories.edit', $cat->id) }}" class="btn btn-sm btn-warning me-1 fw-semibold">
                            Edit
                        </a>

                        <form action="{{ route('medcategories.destroy', $cat->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-sm btn-danger fw-semibold">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted fst-italic">No categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
