@extends('layouts.admin')

@section('content')
<div class="row justify-content-center my-5">
    <div class="col-lg-8 col-md-10">

        <h3 class="mb-4 text-primary text-center fw-bold">Edit Medicine</h3>

        <form method="POST" action="{{ route('medicine.update', $medicine->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-3">
                <!-- Name -->
                <div class="col-12">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $medicine->name) }}" required class="form-control">
                </div>

                <!-- Price -->
                <div class="col-12">
                    <label for="price" class="form-label fw-bold">Price (PKR)</label>
                    <input type="text" id="price" name="price" value="{{ old('price', $medicine->price) }}" class="form-control">
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea id="description" name="description" rows="3" class="form-control">{{ old('description', $medicine->description) }}</textarea>
                </div>

                <!-- Image -->
                <div class="col-12">
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if($medicine->image)
                        <img src="{{ asset('storage/' . $medicine->image) }}" alt="Current Image" class="img-thumbnail mt-2" style="max-height: 150px;">
                    @endif
                </div>

                <!-- Prescription Checkbox -->
                <div class="col-12 d-flex align-items-center">
                    <div class="form-check mt-3">
                        <input type="checkbox" id="prescription_required" name="prescription_required" value="1" class="form-check-input" {{ $medicine->prescription_required ? 'checked' : '' }}>
                        <label for="prescription_required" class="form-check-label fw-bold ms-2">Prescription Required</label>
                    </div>
                </div>

                <!-- Packaging -->
                <div class="col-12">
                    <label for="packaging" class="form-label fw-bold">Packaging</label>
                    <input type="text" id="packaging" name="packaging" value="{{ old('packaging', $medicine->packaging) }}" class="form-control">
                </div>

                <!-- Manufacturer -->
                <div class="col-12">
                    <label for="manufacturer" class="form-label fw-bold">Manufacturer</label>
                    <input type="text" id="manufacturer" name="manufacturer" value="{{ old('manufacturer', $medicine->manufacturer) }}" class="form-control">
                </div>

                <!-- Generic Name -->
                <div class="col-12">
                    <label for="generic_name" class="form-label fw-bold">Generic Name</label>
                    <input type="text" id="generic_name" name="generic_name" value="{{ old('generic_name', $medicine->generic_name) }}" class="form-control">
                </div>

                <!-- Formula -->
                <div class="col-12">
                    <label for="formula" class="form-label fw-bold">Formula</label>
                    <input type="text" id="formula" name="formula" value="{{ old('formula', $medicine->formula) }}" class="form-control">
                </div>

                <!-- Drug Class -->
                <div class="col-12">
                    <label for="drug_class" class="form-label fw-bold">Drug Class</label>
                    <input type="text" id="drug_class" name="drug_class" value="{{ old('drug_class', $medicine->drug_class) }}" class="form-control">
                </div>

                <!-- Medicinal Form -->
                <div class="col-12">
                    <label for="medicinal_form" class="form-label fw-bold">Medicinal Form</label>
                    <input type="text" id="medicinal_form" name="medicinal_form" value="{{ old('medicinal_form', $medicine->medicinal_form) }}" class="form-control">
                </div>

                <!-- Uses -->
                <div class="col-12">
                    <label for="uses" class="form-label fw-bold">Uses</label>
                    <textarea id="uses" name="uses" rows="2" class="form-control">{{ old('uses', $medicine->uses) }}</textarea>
                </div>

                <!-- Dosage -->
                <div class="col-12">
                    <label for="dosage" class="form-label fw-bold">Dosage</label>
                    <textarea id="dosage" name="dosage" rows="2" class="form-control">{{ old('dosage', $medicine->dosage) }}</textarea>
                </div>

                <!-- Warnings -->
                <div class="col-12">
                    <label for="warnings" class="form-label fw-bold">Warnings</label>
                    <textarea id="warnings" name="warnings" rows="2" class="form-control">{{ old('warnings', $medicine->warnings) }}</textarea>
                </div>

                <!-- Precautions -->
                <div class="col-12">
                    <label for="precautions" class="form-label fw-bold">Precautions</label>
                    <textarea id="precautions" name="precautions" rows="2" class="form-control">{{ old('precautions', $medicine->precautions) }}</textarea>
                </div>

                <!-- Side Effects -->
                <div class="col-12">
                    <label for="side_effects" class="form-label fw-bold">Side Effects</label>
                    <textarea id="side_effects" name="side_effects" rows="2" class="form-control">{{ old('side_effects', $medicine->side_effects) }}</textarea>
                </div>

                <!-- Expert Advice -->
                <div class="col-12">
                    <label for="expert_advice" class="form-label fw-bold">Expert Advice</label>
                    <textarea id="expert_advice" name="expert_advice" rows="2" class="form-control">{{ old('expert_advice', $medicine->expert_advice) }}</textarea>
                </div>

                <!-- FAQ -->
                <div class="col-12">
                    <label for="faq" class="form-label fw-bold">FAQ</label>
                    <textarea id="faq" name="faq" rows="2" class="form-control">{{ old('faq', $medicine->faq) }}</textarea>
                </div>

                <!-- Disclaimer -->
                <div class="col-12">
                    <label for="disclaimer" class="form-label fw-bold">Disclaimer</label>
                    <textarea id="disclaimer" name="disclaimer" rows="2" class="form-control">{{ old('disclaimer', $medicine->disclaimer) }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-success w-100 mt-4">Update</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
