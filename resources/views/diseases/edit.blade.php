@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Disease</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('diseases.update', $disease->id) }}" method="POST" class="p-4 bg-light border rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Disease Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $disease->name }}" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $disease->description }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('diseases.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
