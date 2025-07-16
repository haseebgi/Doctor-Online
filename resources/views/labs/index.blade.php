@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Labs</h1>
    <a href="{{ route('labs.create') }}" class="btn btn-primary mb-3">Add New Lab</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($labs as $lab)
            <tr>
                <td>{{ $lab->name }}</td>
                <td>{{ $lab->address }}</td>
                <td>{{ $lab->phone }}</td>
                <td>{{ $lab->email }}</td>
                <td>
                    <a href="{{ route('labs.edit', $lab) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('labs.destroy', $lab) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
