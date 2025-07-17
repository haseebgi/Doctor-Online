@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Lab</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('labs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Lab Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}">
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Lab</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
$(function() {
    $("#location").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('locations.search') }}",
                dataType: "json",
                data: { term: request.term },
                success: function(data) {
                    response(data);
                }
            });
        },
        minLength: 2,
    });
});
</script>
@endsection
