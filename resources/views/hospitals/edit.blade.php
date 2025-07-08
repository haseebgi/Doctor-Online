<h2>Edit Hospital</h2>
<form action="{{ route('hospitals.update', $hospital->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $hospital->name }}" required><br><br>
    <input type="file" name="icon"><br><br>
    <input type="text" name="title" value="{{ $hospital->title }}"><br><br>
    <textarea name="description">{{ $hospital->description }}</textarea><br><br>
    <input type="text" name="phone_no" value="{{ $hospital->phone_no }}"><br><br>
    <input type="text" name="map_direction" value="{{ $hospital->map_direction }}"><br><br>
    <input type="text" name="address" value="{{ $hospital->address }}"><br><br>
    <input type="number" name="hospital_category_id" value="{{ $hospital->hospital_category_id }}" required><br><br>
    <input type="number" name="property_id" value="{{ $hospital->property_id }}" required><br><br>

    <button type="submit">Update Hospital</button>
</form>
