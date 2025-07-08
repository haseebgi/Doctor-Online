<h2>Create Hospital Category</h2>

<form method="POST" action="{{ route('hospital_categories.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Category Title" required>
    <button type="submit">Create</button>
</form>

<a href="{{ route('hospital_categories.index') }}">Back to List</a>
