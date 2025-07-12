@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Create New Hospital</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Hospital Form --}}
    <form action="{{ route('hospitals.store') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Hospital Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hospital Icon</label>
            <input type="file" name="icon" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone No</label>
            <input type="text" name="phone_no" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Latitude</label>
            <input type="text" name="latitude" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Longitude</label>
            <input type="text" name="longitude" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Hospital Category ID</label>
            <input type="number" name="hospital_category_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Property ID</label>
            <input type="number" name="property_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save Hospital</button>
        <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
