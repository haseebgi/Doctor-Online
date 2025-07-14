@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Create Disease</h2>

    {{-- Flash / Error Messages --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('diseases.store') }}" method="POST" class="p-4 border rounded bg-light shadow-sm">
        @csrf

        <div class="row">
            {{-- Disease Name --}}
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Disease Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                           placeholder="Enter disease name" required autofocus>
                </div>
            </div>

            {{-- Description --}}
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="3" class="form-control"
                              placeholder="Optional description">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>

        {{-- Buttons --}}
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('diseases.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
