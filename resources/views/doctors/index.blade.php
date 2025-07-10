@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Doctors List</h1>
        </div>
        <div class="col-md-6 text-end mt-2">
            <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add Doctor</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>PMDC Verified</th>
                <th>Specialization</th>
                <th>Degrees</th>
                <th>Experience</th>
                <th>Tags</th>
                <th>Clinic Info</th>
                <th>Availability</th>
                <th>Fee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($doctors as $doctor)
            <tr>
                <td>
                    @if($doctor->profile_image && file_exists(public_path($doctor->profile_image)))
                        <img src="{{ asset($doctor->profile_image) }}" alt="{{ $doctor->name }}" width="60" height="60" class="rounded-circle">
                    @else
                        <img src="https://via.placeholder.com/60" alt="No Image" class="rounded-circle">
                    @endif
                </td>

                <td><a href="{{ route('doctors.show', $doctor) }}">{{ $doctor->name }}</a></td>
                <td>{{ $doctor->pmdc_verified ? 'Yes' : 'No' }}</td>
                <td>{{ $doctor->specialization }}</td>
                <td>{{ $doctor->degrees }}</td>
                <td>{{ $doctor->experience }}</td>
                <td>{{ $doctor->tags }}</td>
                <td>{{ $doctor->clinic_info }}</td>
                <td>{{ $doctor->availability }}</td>
                <td>Rs. {{ $doctor->fee }}</td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-info">View</a>

                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr><td colspan="11">No doctors found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
