@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">Add New Medicine</h2>

    <form method="POST" action="{{ route('medicine.store') }}" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Price (PKR)</label>
                <input type="text" name="price" class="form-control">
            </div>

            <div class="col-md-12">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="2"></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Packaging</label>
                <input type="text" name="packaging" value="{{ old('packaging') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Manufacturer</label>
                <input type="text" name="manufacturer" value="{{ old('manufacturer') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Generic Name</label>
                <input type="text" name="generic_name" value="{{ old('generic_name') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Formula</label>
                <input type="text" name="formula" value="{{ old('formula') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Drug Class</label>
                <input type="text" name="drug_class" value="{{ old('drug_class') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Medicinal Form</label>
                <input type="text" name="medicinal_form" value="{{ old('medicinal_form') }}" class="form-control">
            </div>

            <div class="col-md-6">
                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" name="prescription_required" value="1" id="prescriptionRequired">
                    <label class="form-check-label" for="prescriptionRequired">Prescription Required</label>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">Uses</label>
                <textarea name="uses" class="form-control" rows="2">{{ old('uses') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Dosage</label>
                <textarea name="dosage" class="form-control" rows="2">{{ old('dosage') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Warnings</label>
                <textarea name="warnings" class="form-control" rows="2">{{ old('warnings') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Precautions</label>
                <textarea name="precautions" class="form-control" rows="2">{{ old('precautions') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Side Effects</label>
                <textarea name="side_effects" class="form-control" rows="2">{{ old('side_effects') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Expert Advice</label>
                <textarea name="expert_advice" class="form-control" rows="2">{{ old('expert_advice') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">FAQ</label>
                <textarea name="faq" class="form-control" rows="2">{{ old('faq') }}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Disclaimer</label>
                <textarea name="disclaimer" class="form-control" rows="2">{{ old('disclaimer') }}</textarea>
            </div>
            <div>
                <select name="category_id">
  @foreach($categories as $cat)
    <option value="{{ $cat->id }}">{{ $cat->company_name }} - {{ $cat->brand_name }}</option>
  @endforeach
</select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 mt-3">Save Medicine</button>
            </div>
        </div>
    </form>
</div>
@endsection
