@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>All Doctors</h2>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Add Doctor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualifications</th>
                <th>Experience</th>
                <th>Reviews</th>
                <th>Satisfaction</th>
                <th>Video Fee</th>
                <th>Hospital Fee</th>
                <th>Hospital Name</th>
                <th>Hospital Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>
                    <img src="{{ $doctor->image ? asset('storage/' . $doctor->image) : asset('images/default.png') }}" width="60">
                </td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->designation }}</td>
                <td>{{ $doctor->qualifications }}</td>
                <td>{{ $doctor->experience_years }} years</td>
                <td>{{ $doctor->reviews }}</td>
                <td>{{ $doctor->satisfaction }}%</td>
                <td>Rs {{ $doctor->video_fee }}</td>
                <td>Rs {{ $doctor->hospital_fee }}</td>
                <td>{{ $doctor->hospital_name }}</td>
                <td>{{ $doctor->hospital_location }}</td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
