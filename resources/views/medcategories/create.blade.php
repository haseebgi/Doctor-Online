@extends('layouts.admin')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-12">

            <h2 class="mb-4 text-center fw-semibold">Add New Medicine Category</h2>

            @if(session('ok'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('ok') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="border rounded p-4 shadow-sm">
                <form method="POST" action="{{ route('medcategories.store') }}" autocomplete="off">
                    @csrf

                    <div class="mb-3">
                        <label for="company_name" class="form-label fw-semibold">Company Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control form-control-lg" placeholder="Enter company name" required>
                    </div>

                    <div class="mb-3">
                        <label for="brand_name" class="form-label fw-semibold">Brand Name</label>
                        <input type="text" name="brand_name" id="brand_name" class="form-control form-control-lg" placeholder="Enter brand name" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 fw-semibold shadow-sm" style="font-size: 1.15rem;">
                        Save Category
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
