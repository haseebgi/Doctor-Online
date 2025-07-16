@extends('layouts.admin')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-12">

            <h2 class="mb-4 text-center fw-semibold">Edit Category</h2>

            <div class="border rounded p-4 shadow-sm">
                <form method="POST" action="{{ route('medcategories.update', $category->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="company_name" class="form-label fw-semibold">Company Name</label>
                        <input type="text" name="company_name" id="company_name" value="{{ old('company_name', $category->company_name) }}" class="form-control form-control-lg" required>
                    </div>

                    <div class="mb-4">
                        <label for="brand_name" class="form-label fw-semibold">Brand Name</label>
                        <input type="text" name="brand_name" id="brand_name" value="{{ old('brand_name', $category->brand_name) }}" class="form-control form-control-lg" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 fw-semibold shadow-sm" style="font-size: 1.15rem;">
                        Update Category
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
