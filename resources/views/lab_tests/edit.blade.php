@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Lab Test</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lab_tests.update', $labTest->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Lab</label>
            <select name="lab_id" class="form-control" required>
                <option value="">Select Lab</option>
                @foreach($labs as $lab)
                    <option value="{{ $lab->id }}" {{ $labTest->lab_id == $lab->id ? 'selected' : '' }}>{{ $lab->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Test Name</label>
            <input type="text" name="test_name" class="form-control" value="{{ old('test_name', $labTest->test_name) }}" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $labTest->price) }}" required>
        </div>

        <div class="mb-3">
            <label>Discount</label>
            <input type="number" step="0.01" name="discount" class="form-control" value="{{ old('discount', $labTest->discount) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Lab Test</button>
    </form>
</div>
@endsection
