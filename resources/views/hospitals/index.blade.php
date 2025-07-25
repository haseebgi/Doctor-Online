@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>All Hospitals</h2>
    <a href="{{ route('hospitals.create') }}" class="btn btn-primary mb-3">Add Hospital</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Category ID</th>
                <th>Property ID</th>
                <th>Map</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hospitals as $hospital)
            <tr>
                <td>
                    <img src="{{ $hospital->icon ? asset('storage/' . $hospital->icon) : asset('images/default.png') }}" width="60">
                </td>
                <td>{{ $hospital->name }}</td>
                <td>{{ $hospital->title }}</td>
                <td>{{ $hospital->description }}</td>
                <td>{{ $hospital->phone_no }}</td>
                <td>{{ $hospital->address }}</td>
                <td>{{ $hospital->location }}</td>
                <td>{{ $hospital->latitude }}</td>
                <td>{{ $hospital->longitude }}</td>
                <td>{{ $hospital->hospital_category_id }}</td>
                <td>{{ $hospital->property_id }}</td>
                <td>
                    @if($hospital->latitude && $hospital->longitude)
                        <a href="https://www.google.com/maps/search/?api=1&query={{ $hospital->latitude }},{{ $hospital->longitude }}"
                           class="btn btn-info btn-sm" target="_blank">Map</a>
                    @else
                        <span class="text-muted">No Map</span>
                    @endif
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('hospitals.edit', $hospital->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
