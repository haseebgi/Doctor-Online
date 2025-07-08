<h2>Edit Property</h2>
<form action="{{ route('properties.update', $property->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $property->title }}" required><br><br>
    <textarea name="description">{{ $property->description }}</textarea><br><br>
    <button type="submit">Update</button>
    <a href="{{ route('properties.index') }}">Back to List</a>
</form>
