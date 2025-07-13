@extends('layouts.admin')

@section('content')

<div class="container my-5" style="max-width: 700px;">
    <h2 class="text-center text-primary mb-4">Edit Order</h2>

    <form method="POST" action="{{ route('order.update', $order->id) }}" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="patient_name" class="col-form-label fw-bold col-12">Patient Name:</label>
            <div class="col-12">
                <input type="text" id="patient_name" name="patient_name" value="{{ $order->patient_name }}" required class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone_number" class="col-form-label fw-bold col-12">Phone Number:</label>
            <div class="col-12">
                <input type="text" id="phone_number" name="phone_number" value="{{ $order->phone_number }}" required class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="city" class="col-form-label fw-bold col-12">City:</label>
            <div class="col-12">
                <select id="city" name="city" required class="form-select">
                    <option value="">Choose City</option>
                    <option value="Lahore" {{ strtolower($order->city) == 'lahore' ? 'selected' : '' }}>Lahore</option>
                    <option value="Karachi" {{ strtolower($order->city) == 'karachi' ? 'selected' : '' }}>Karachi</option>
                    <option value="Islamabad" {{ strtolower($order->city) == 'islamabad' ? 'selected' : '' }}>Islamabad</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="medicine_name" class="col-form-label fw-bold col-12">Medicine Name:</label>
            <div class="col-12">
                <textarea id="medicine_name" name="medicine_name" rows="3" class="form-control">{{ $order->medicine_name }}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="address" class="col-form-label fw-bold col-12">Address:</label>
            <div class="col-12">
                <textarea id="address" name="address" rows="3" required class="form-control">{{ $order->address }}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="prescription" class="col-form-label fw-bold col-12">Prescription (Upload to Replace):</label>
            <div class="col-12">
                <input type="file" id="prescription" name="prescription" class="form-control">
            </div>
        </div>

        @if($order->prescription)
            <div class="row mb-3">
                <div class="col-12">
                    <p>Current Prescription: 
                        <a href="{{ asset('storage/' . $order->prescription) }}" target="_blank" class="text-primary">View</a>
                    </p>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Update Order</button>
            </div>
        </div>
    </form>
</div>

@endsection
