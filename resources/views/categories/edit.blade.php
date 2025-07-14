@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Category</h2>

    {{-- Error Messages --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- Category Name --}}
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
            </div>
        </div>

        {{-- Buttons --}}
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
