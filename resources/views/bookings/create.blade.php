@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Lab Test Booking Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('bookings.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="lab_test_id">Select Lab Test</label>
            <select id="lab_test_id" name="lab_test_id" class="form-control" required>
                <option value="">Select Test</option>
                @foreach($labTests as $test)
                    <option value="{{ $test->id }}" {{ old('lab_test_id') == $test->id ? 'selected' : '' }}>
                        {{ $test->lab->name }} - {{ $test->test_name }} (Price: {{ $test->price }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="patient_name">Patient’s Name</label>
            <input type="text" id="patient_name" name="patient_name" class="form-control" required value="{{ old('patient_name') }}">
        </div>

        <div class="mb-3">
            <label for="patient_number">Patient’s Number</label>
            <input type="text" id="patient_number" name="patient_number" class="form-control" required value="{{ old('patient_number') }}">
        </div>

       <div class="mb-3">
            <label for="lab_city">Select Lab City*</label>
            <select id="lab_city" name="lab_city" class="form-control" required>
                <option value="">Select City</option>
                @foreach($cities as $city)
                    <option value="{{ $city->name }}" {{ old('lab_city') == $city->name ? 'selected' : '' }}>
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>


      
        <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" class="form-control" value="{{ old('age') }}">
        </div>

        

        <div class="mb-3">
            <label for="prescription">Attach Prescription (Optional)</label>
            <input type="file" id="prescription" name="prescription" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
        </div>

        <button type="submit" class="btn btn-primary">Confirm Booking</button>
    </form>
</div>
@endsection
