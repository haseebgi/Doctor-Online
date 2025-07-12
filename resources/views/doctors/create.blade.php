
@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>Add Doctor</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Qualifications</label>
                    <input type="text" name="qualifications" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Experience (Years)</label>
                    <input type="number" name="experience_years" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Reviews</label>
                    <input type="number" name="reviews" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Satisfaction (%)</label>
                    <input type="number" name="satisfaction" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Video Fee (Rs)</label>
                    <input type="number" name="video_fee" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Hospital Fee (Rs)</label>
                    <input type="number" name="hospital_fee" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Hospital Name</label>
                    <input type="text" name="hospital_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Hospital Location</label>
                    <input type="text" name="hospital_location" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
