<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Create New Hospital</h2>

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('hospitals.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
          <label>Hospital Name</label>
          <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
          <label>Hospital Icon</label>
          <input type="file" name="icon" class="form-control">
      </div>
      <div class="mb-3">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
      </div>
      <div class="mb-3">
          <label>Description</label>
          <textarea name="description" class="form-control"></textarea>
      </div>
      <div class="mb-3">
          <label>Phone No</label>
          <input type="text" name="phone_no" class="form-control">
      </div>
      <div class="mb-3">
          <label>Map Direction Link</label>
          <input type="text" name="map_direction" class="form-control">
      </div>
      <div class="mb-3">
          <label>Address</label>
          <input type="text" name="address" class="form-control">
      </div>
      <div class="mb-3">
          <label>Hospital Category ID</label>
          <input type="number" name="hospital_category_id" class="form-control" required>
      </div>
      <div class="mb-3">
          <label>Property ID</label>
          <input type="number" name="property_id" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Save Hospital</button>
      <a href="{{ route('hospitals.index') }}" class="btn btn-secondary">Back to List</a>
  </form>
</body>
</html>
