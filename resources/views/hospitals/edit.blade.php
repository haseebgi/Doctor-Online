@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Hospital</h2>

    <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Hospital Name</label>
            <input type="text" name="name" value="{{ $hospital->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Hospital Image</label>
            <input type="file" name="icon" class="form-control">
            @if ($hospital->icon)
                <img src="{{ asset('storage/' . $hospital->icon) }}" width="80" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $hospital->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $hospital->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Phone Number</label>
            <input type="text" name="phone_no" value="{{ $hospital->phone_no }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" value="{{ $hospital->address }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Location</label>
            <input type="text" name="location" value="{{ $hospital->location }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Latitude</label>
            <input type="text" name="latitude" value="{{ $hospital->latitude }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Longitude</label>
            <input type="text" name="longitude" value="{{ $hospital->longitude }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Hospital Category</label>
            <select name="hospital_category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $hospital->hospital_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Property</label>
            <select name="property_id" class="form-control" required>
                @foreach($properties as $property)
                    <option value="{{ $property->id }}" {{ $hospital->property_id == $property->id ? 'selected' : '' }}>
                        {{ $property->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Hospital</button>
        <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
