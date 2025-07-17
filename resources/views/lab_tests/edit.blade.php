@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Lab Test</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('lab_tests.update', $labTest->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="lab_id" class="form-label">Select Lab</label>
            <select name="lab_id" id="lab_id" class="form-control" required>
                <option value="">--Select Lab--</option>
                @foreach($labs as $lab)
                    <option value="{{ $lab->id }}" {{ ($labTest->lab_id == $lab->id) ? 'selected' : '' }}>{{ $lab->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="test_name" class="form-label">Test Name</label>
            <input type="text" name="test_name" id="test_name" value="{{ $labTest->test_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (PKR)</label>
            <input type="number" name="price" id="price" value="{{ $labTest->price }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Body Tests</label>
            <input type="text" id="searchBodyTests" placeholder="Search body tests..." class="form-control mb-2">

            <div id="bodyTestsList" style="max-height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                @foreach($bodyTests as $bodyTest)
                <div class="form-check">
                    <input
                        class="form-check-input body-test-checkbox"
                        type="checkbox"
                        name="body_tests[]"
                        value="{{ $bodyTest->id }}"
                        id="bodyTest{{ $bodyTest->id }}"
                        {{ in_array($bodyTest->id, $selectedBodyTests) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="bodyTest{{ $bodyTest->id }}">{{ $bodyTest->name }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update Lab Test</button>
    </form>
</div>

<script>
    document.getElementById('searchBodyTests').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const bodyTests = document.querySelectorAll('#bodyTestsList .form-check');

        bodyTests.forEach(div => {
            const label = div.querySelector('label').innerText.toLowerCase();
            div.style.display = label.includes(filter) ? '' : 'none';
        });
    });
</script>
@endsection
