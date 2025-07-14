@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Create Category</h2>

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

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="row">
            {{-- Category Name --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                           placeholder="Enter category name" required autofocus>
                </div>
            </div>
        </div>

        {{-- Buttons --}}
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
