
@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>Edit Doctor</h2>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
                </div>
                <div class="mb-3">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ $doctor->designation }}">
                </div>
                <div class="mb-3">
                    <label>Qualifications</label>
                    <input type="text" name="qualifications" class="form-control" value="{{ $doctor->qualifications }}">
                </div>
                <div class="mb-3">
                    <label>Experience (Years)</label>
                    <input type="number" name="experience_years" class="form-control" value="{{ $doctor->experience_years }}">
                </div>
                <div class="mb-3">
                    <label>Reviews</label>
                    <input type="number" name="reviews" class="form-control" value="{{ $doctor->reviews }}">
                </div>
                <div class="mb-3">
                    <label>Satisfaction (%)</label>
                    <input type="number" name="satisfaction" class="form-control" value="{{ $doctor->satisfaction }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Video Fee (Rs)</label>
                    <input type="number" name="video_fee" class="form-control" value="{{ $doctor->video_fee }}">
                </div>
                <div class="mb-3">
                    <label>Hospital Fee (Rs)</label>
                    <input type="number" name="hospital_fee" class="form-control" value="{{ $doctor->hospital_fee }}">
                </div>
                <div class="mb-3">
                    <label>Hospital Name</label>
                    <input type="text" name="hospital_name" class="form-control" value="{{ $doctor->hospital_name }}">
                </div>
                <div class="mb-3">
                    <label>Hospital Location</label>
                    <input type="text" name="hospital_location" class="form-control" value="{{ $doctor->hospital_location }}">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($doctor->image)
                        <img src="{{ asset('storage/' . $doctor->image) }}" width="80" class="mt-2">
                    @endif
                </div>
            </div>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
