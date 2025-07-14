@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>Add Doctor</h2>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Error messages --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                {{-- Name --}}
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>

                {{-- Designation --}}
                <div class="mb-3">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
                </div>

                {{-- Qualifications --}}
                <div class="mb-3">
                    <label>Qualifications</label>
                    <input type="text" name="qualifications" class="form-control" value="{{ old('qualifications') }}">
                </div>

                {{-- Experience --}}
                <div class="mb-3">
                    <label>Experience (Years)</label>
                    <input type="number" name="experience_years" class="form-control" value="{{ old('experience_years') }}">
                </div>

                {{-- Reviews --}}
                <div class="mb-3">
                    <label>Reviews</label>
                    <input type="number" name="reviews" class="form-control" value="{{ old('reviews') }}">
                </div>

                {{-- Satisfaction --}}
                <div class="mb-3">
                    <label>Satisfaction (%)</label>
                    <input type="number" name="satisfaction" class="form-control" value="{{ old('satisfaction') }}">
                </div>

                {{-- Category Dropdown --}}
                <div class="mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                {{-- Video Fee --}}
                <div class="mb-3">
                    <label>Video Fee (Rs)</label>
                    <input type="number" name="video_fee" class="form-control" value="{{ old('video_fee') }}">
                </div>

                {{-- Hospital Fee --}}
                <div class="mb-3">
                    <label>Hospital Fee (Rs)</label>
                    <input type="number" name="hospital_fee" class="form-control" value="{{ old('hospital_fee') }}">
                </div>

                {{-- Hospital Name --}}
                <div class="mb-3">
                    <label>Hospital Name</label>
                    <input type="text" name="hospital_name" class="form-control" value="{{ old('hospital_name') }}">
                </div>

                {{-- Hospital Location --}}
                <div class="mb-3">
                    <label>Hospital Location</label>
                    <input type="text" name="hospital_location" class="form-control" value="{{ old('hospital_location') }}">
                </div>

                {{-- Hospital Dropdown --}}
                <div class="mb-3">
                    <label for="hospital_id">Hospital (Bind to)</label>
                    <select name="hospital_id" id="hospital_id" class="form-select" required>
                        <option value="" disabled selected>Select Hospital</option>
                        @foreach($hospitals as $hospital)
                            <option value="{{ $hospital->id }}" {{ old('hospital_id') == $hospital->id ? 'selected' : '' }}>
                                {{ $hospital->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
        </div>

        {{-- Buttons --}}
        <button class="btn btn-success">Save</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
