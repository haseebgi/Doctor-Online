<h2>All Hospitals</h2>
<a href="{{ route('hospitals.create') }}">Create New Hospital</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hospitals as $hospital)
            <tr>
                <td>
                    @if ($hospital->icon)
                        <img src="{{ asset('storage/' . $hospital->icon) }}" alt="Hospital Image" width="80">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $hospital->name }}</td>
                <td>{{ $hospital->title }}</td>
                <td>{{ $hospital->description }}</td>
                <td>{{ $hospital->address }}</td>
                <td>
                    <a href="{{ route('hospitals.edit', $hospital->id) }}">Edit</a>
                    <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
