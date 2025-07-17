
@extends('layouts.admin')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg" style="width: 500px;">
        <div class="card-header" style="background-color: #1fabd6ff; color: white;">
            <h4 class="mb-0 text-center">Add New Medicine Category</h4>
        </div>

        <div class="card-body">
            @if(session('ok'))
                <div class="alert alert-success">
                    {{ session('ok') }}
                </div>
            @endif

            <form method="POST" action="{{ route('medcategories.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name</label>
                    <input type="text" name="brand_name" id="brand_name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Save Category</button>
            </form>
        </div>
    </div>
</div>
@endsection