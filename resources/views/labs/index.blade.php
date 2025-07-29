@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Labs List</h1>

    <a href="{{ route('labs.create') }}" class="btn btn-primary mb-3">Add New Lab</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($labs->count() > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Lab Name</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($labs as $lab)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lab->name }}</td>
                <td>{{ $lab->location ?? '-' }}</td>
                <td>{{ $lab->contact ?? '-' }}</td>
                <td>
                    <a href="{{ route('labs.edit', $lab->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('labs.destroy', $lab->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this lab?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $labs->links() }} <!-- Pagination links -->
    @else
    <p>No labs found.</p>
    @endif
</div>
@endsection
