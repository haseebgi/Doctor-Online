<h2>Edit Hospital Category</h2>

<form method="POST" action="{{ route('hospital_categories.update', $category->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $category->title }}" required>
    <button type="submit">Update</button>
</form>

<a href="{{ route('hospital_categories.index') }}">Back to List</a>
