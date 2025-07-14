@extends('layouts.admin')

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-lg-12 col-md-10">
        <h3 class="mb-4 text-center fw-bold">Edit Order</h3>

        <!-- Border wrapper added here -->
        <div class="border rounded p-4 shadow-sm bg-light">

            <form method="POST" action="{{ route('order.update', $order->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Patient Name -->
                    <div class="col-12">
                        <label for="patient_name" class="form-label fw-bold">Patient Name</label>
                        <input type="text" id="patient_name" name="patient_name" value="{{ old('patient_name', $order->patient_name) }}" required class="form-control">
                    </div>

                    <!-- Phone Number -->
                    <div class="col-12">
                        <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $order->phone_number) }}" required class="form-control">
                    </div>

                    <!-- City -->
                    <div class="col-12">
                        <label for="city" class="form-label fw-bold">City</label>
                        <select id="city" name="city" required class="form-select">
                            <option value="">Choose City</option>
                            <option value="Lahore" {{ strtolower($order->city) == 'lahore' ? 'selected' : '' }}>Lahore</option>
                            <option value="Karachi" {{ strtolower($order->city) == 'karachi' ? 'selected' : '' }}>Karachi</option>
                            <option value="Islamabad" {{ strtolower($order->city) == 'islamabad' ? 'selected' : '' }}>Islamabad</option>
                        </select>
                    </div>

                    <!-- Medicine Name -->
                    <div class="col-12">
                        <label for="medicine_name" class="form-label fw-bold">Medicine Name</label>
                        <textarea id="medicine_name" name="medicine_name" rows="2" class="form-control">{{ old('medicine_name', $order->medicine_name) }}</textarea>
                    </div>

                    <!-- Address -->
                    <div class="col-12">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <textarea id="address" name="address" rows="3" required class="form-control">{{ old('address', $order->address) }}</textarea>
                    </div>

                    <!-- Prescription Upload -->
                    <div class="col-12">
                        <label for="prescription" class="form-label fw-bold">Prescription (Upload to Replace)</label>
                        <input type="file" id="prescription" name="prescription" class="form-control">
                    </div>

                    <!-- Existing Prescription Preview -->
                    @if($order->prescription)
                        <div class="col-12">
                            <label class="form-label fw-bold">Current Prescription</label><br>
                            <a href="{{ asset('storage/' . $order->prescription) }}" target="_blank" class="btn btn-sm btn-outline-info px-3 py-1">View</a>
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-success w-100 mt-4">Update Order</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
