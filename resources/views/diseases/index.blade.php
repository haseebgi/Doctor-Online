@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>All Diseases</h2>

    <a href="{{ route('diseases.create') }}" class="btn btn-primary mb-3">Add Disease</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diseases as $disease)
            <tr>
                <td>{{ $disease->name }}</td>
                <td>{{ $disease->description }}</td>
                <td>
                    <a href="{{ route('diseases.edit', $disease->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('diseases.destroy', $disease->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this disease?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if($diseases->isEmpty())
            <tr>
                <td colspan="3" class="text-center">No diseases found.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
