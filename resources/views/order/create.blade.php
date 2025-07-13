@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">Order Medicine</h2>

    <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label">Write your medicine</label>
                <textarea name="medicine_name" class="form-control" rows="2" placeholder="E.g., Panadol, Augmentin">{{ old('medicine_name') }}</textarea>
            </div>

            <div class="col-md-12 text-center fw-semibold text-secondary">— OR —</div>

            <div class="col-md-12">
                <label class="form-label">Attach prescription</label>
                <input type="file" name="prescription" class="form-control">
            </div>

            <div class="col-md-12">
                <label class="form-label">Write your address</label>
                <textarea name="address" class="form-control" rows="2" placeholder="Complete delivery address" required>{{ old('address') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" required placeholder="03xx-xxxxxxx" value="{{ old('phone_number') }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Patient Name</label>
                <input type="text" name="patient_name" class="form-control" required value="{{ old('patient_name') }}">
            </div>

            <div class="col-md-12">
                <label class="form-label">Select City</label>
                <select name="city" class="form-select" required>
                    <option value="">Choose City</option>
                    <option value="Lahore" {{ old('city') == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                    <option value="Karachi" {{ old('city') == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                    <option value="Islamabad" {{ old('city') == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                    <option value="Rawalpindi" {{ old('city') == 'Rawalpindi' ? 'selected' : '' }}>Rawalpindi</option>
                    <option value="Faisalabad" {{ old('city') == 'Faisalabad' ? 'selected' : '' }}>Faisalabad</option>
                </select>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Submit Order</button>
            </div>
        </div>
    </form>
</div>
@endsection
