<h2>Create Property</h2>
<form action="{{ route('properties.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <button type="submit">Save</button>
    <a href="{{ route('properties.index') }}">Back to List</a>
</form>
