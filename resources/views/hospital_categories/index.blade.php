<h2>All Hospital Categories</h2>
<a href="{{ route('hospital_categories.create') }}">Create New Category</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>
                <a href="{{ route('hospital_categories.edit', $category->id) }}">Edit</a>
                <form action="{{ route('hospital_categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this category?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
