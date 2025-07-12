@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <h2>All Surgeries</h2>
    <a href="{{ route('surgeries.create') }}" class="btn btn-primary mb-3">Create Surgery</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Discount Label</th>
                <th>Subtext</th>
                <th>Button</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surgeries as $surgery)
                <tr>
                    <td>
                        @if ($surgery->image)
                            <img src="{{ asset('storage/' . $surgery->image) }}" width="80">
                        @else
                            <img src="{{ asset('images/default.png') }}" width="80">
                        @endif
                    </td>
                    <td>{{ $surgery->title }}</td>
                    <td>{{ $surgery->discount_label }}</td>
                    <td>{{ $surgery->subtext }}</td>
                    <td>{{ $surgery->button }}</td>
                    <td>
                        <a href="{{ route('surgeries.edit', $surgery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('surgeries.destroy', $surgery->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
