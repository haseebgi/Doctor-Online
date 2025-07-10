@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $doctor->name }}</h1>

    <p>
        <strong>PMDC Verified: </strong> 
        <!-- <span style="color: {{ $doctor->pmdc_verified ? 'green' : 'red' }}"> -->
            {{ $doctor->pmdc_verified ? 'Yes' : 'No' }}
        </span>
    </p>

    <p><strong>Specialization:</strong> {{ $doctor->specialization }}</p>
    <p><strong>Degrees:</strong> {{ $doctor->degrees }}</p>
    <p><strong>Experience:</strong> {{ $doctor->experience }}</p>
    <p><strong>Tags:</strong> {{ $doctor->tags }}</p>
    <p><strong>Clinic Info:</strong> {{ $doctor->clinic_info }}</p>
    <p><strong>Availability:</strong> {{ $doctor->availability }}</p>
    <p><strong>Fee:</strong> Rs. {{ $doctor->fee }}</p>

    @if($doctor->profile_image)
        <img src="{{ asset($doctor->profile_image) }}" alt="{{ $doctor->name }}" style="max-width: 200px;">
    @endif

    <br><br>
    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
