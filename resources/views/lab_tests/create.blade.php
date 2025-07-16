@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Lab Test</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('lab_tests.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Lab</label>
            <select name="lab_id" class="form-control" required>
                <option value="">Select Lab</option>
                @foreach($labs as $lab)
                    <option value="{{ $lab->id }}" {{ old('lab_id') == $lab->id ? 'selected' : '' }}>{{ $lab->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Test Name</label>
            <input type="text" name="test_name" class="form-control" value="{{ old('test_name') }}" required>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}" required>
        </div>
        <div class="mb-3">
            <label>Discount</label>
            <input type="number" step="0.01" name="discount" class="form-control" value="{{ old('discount', 0) }}">
        </div>
        <button type="submit" class="btn btn-success">Add Test</button>
    </form>
</div>
@endsection
