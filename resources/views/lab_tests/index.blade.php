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
                <th>Test Name</th>
                <th>Lab</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($labTests as $test)
            <tr>
                <td>{{ $test->test_name }}</td>
                <td>{{ $test->lab->name }}</td>
                <td>{{ $test->price }}</td>
                <td>
                    <a href="{{ route('lab_tests.edit', $test->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('lab_tests.destroy', $test->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $labTests->links() }}
</div>
@endsection
