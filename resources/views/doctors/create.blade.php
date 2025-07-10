@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Doctor</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-check mb-2">
            <input type="checkbox" name="pmdc_verified" class="form-check-input" id="pmdc_verified"
                value="1" {{ old('pmdc_verified', $doctor->pmdc_verified ?? false) ? 'checked' : '' }}>
            <label for="pmdc_verified" class="form-check-label">PMDC Verified</label>
        </div>


        <div class="form-group mb-2">
            <label>Specialization:</label>
            <input type="text" name="specialization" class="form-control" value="{{ old('specialization') }}" required>
        </div>

        <div class="form-group mb-2">
            <label>Degrees:</label>
            <input type="text" name="degrees" class="form-control" value="{{ old('degrees') }}">
        </div>

        <div class="form-group mb-2">
            <label>Experience:</label>
            <input type="text" name="experience" class="form-control" value="{{ old('experience') }}">
        </div>

        <div class="form-group mb-2">
            <label>Tags (comma separated):</label>
            <input type="text" name="tags" class="form-control" value="{{ old('tags') }}">
        </div>

        <div class="form-group mb-2">
            <label>Clinic Info:</label>
            <input type="text" name="clinic_info" class="form-control" value="{{ old('clinic_info') }}">
        </div>

        <div class="form-group mb-2">
            <label>Availability:</label>
            <input type="text" name="availability" class="form-control" value="{{ old('availability') }}">
        </div>

        <div class="form-group mb-2">
            <label>Fee (Rs):</label>
            <input type="number" name="fee" class="form-control" value="{{ old('fee') }}" step="0.01">
        </div>

        <div class="form-group mb-2">
            <label>Profile Image:</label>
            <input type="file" name="profile_image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Add Doctor</button>
    </form>
</div>
@endsection
