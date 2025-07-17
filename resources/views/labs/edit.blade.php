@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Lab</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('labs.update', $lab->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Lab Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $lab->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $lab->location) }}">
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact', $lab->contact) }}">
        </div>

        <button type="submit" class="btn btn-success">Update Lab</button>
    </form>
</div>
@endsection
