@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Lab Tests</h1>
    <a href="{{ route('lab_tests.create') }}" class="btn btn-primary mb-3">Add Lab Test</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Lab Name</th><th>Test Name</th><th>Price</th><th>Discount</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($labTests as $test)
            <tr>
                <td>{{ $test->lab->name }}</td>
                <td>{{ $test->test_name }}</td>
                <td>{{ $test->price }}</td>
                <td>{{ $test->discount }}</td>
                <td>
                    <a href="{{ route('lab_tests.edit', $test) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('lab_tests.destroy', $test) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
