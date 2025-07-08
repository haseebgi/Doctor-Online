<h2>All Properties</h2>
<a href="{{ route('properties.create') }}">Create New Property</a>

@if(session('success'))
  <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($properties as $property)
      <tr>
        <td>{{ $property->title }}</td>
        <td>{{ $property->description }}</td>
        <td>
          <a href="{{ route('properties.edit', $property->id) }}">Edit</a>
          <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Delete this?')">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
