@extends('layouts.admin')

@section('content')
<h2 style="text-align: center; color: #2c3e50;">Edit Medicine</h2>

<form method="POST" action="{{ route('medicine.update', $medicine->id) }}" enctype="multipart/form-data" style="max-width: 600px; margin: auto; background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    @csrf
    @method('PUT')

    <label style="display: block; margin-top: 10px;">Name:</label>
    <input type="text" name="name" value="{{ $medicine->name }}" required style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Description:</label>
 <textarea name="description" style="width: 100%; padding: 8px;">{{ old('description', $medicine->description) }}</textarea>


    <label style="display: block; margin-top: 10px;">Price (PKR):</label>
    <input type="text" name="price" value="{{ $medicine->price }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Image:</label>
    <input type="file" name="image" style="width: 100%;">

    <label style="display: block; margin-top: 10px;">Uses:</label>
    <textarea name="uses" style="width: 100%; padding: 8px;">{{ old('uses', $medicine->uses) }}</textarea>

    <label style="display: block; margin-top: 10px;">Dosage:</label>
    <textarea name="dosage" style="width: 100%; padding: 8px;">{{ old('dosage', $medicine->dosage) }}</textarea>

    <label style="display: block; margin-top: 10px;">Warnings:</label>
    <textarea name="warnings" style="width: 100%; padding: 8px;">{{ old('warnings', $medicine->warnings) }}</textarea>

    <label style="display: block; margin-top: 10px;">Precautions:</label>
    <textarea name="precautions" style="width: 100%; padding: 8px;">{{ old('precautions', $medicine->precautions) }}</textarea>

    <label style="display: block; margin-top: 10px;">Side Effects:</label>
    <textarea name="side_effects" style="width: 100%; padding: 8px;">{{ old('side_effects', $medicine->side_effects) }}</textarea>

    <label style="display: block; margin-top: 10px;">Packaging:</label>
    <input type="text" name="packaging" value="{{ old('packaging', $medicine->packaging) }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">
        <input type="checkbox" name="prescription_required" value="1" {{ $medicine->prescription_required ? 'checked' : '' }}>
        Prescription Required
    </label>

    <label style="display: block; margin-top: 10px;">Expert Advice:</label>
    <textarea name="expert_advice" style="width: 100%; padding: 8px;">{{ old('expert_advice', $medicine->expert_advice) }}</textarea>

    <label style="display: block; margin-top: 10px;">FAQ:</label>
    <textarea name="faq" style="width: 100%; padding: 8px;">{{ old('faq', $medicine->faq) }}</textarea>

    <label style="display: block; margin-top: 10px;">Disclaimer:</label>
    <textarea name="disclaimer" style="width: 100%; padding: 8px;">{{ old('disclaimer', $medicine->disclaimer) }}</textarea>

    <label style="display: block; margin-top: 10px;">Manufacturer:</label>
    <input type="text" name="manufacturer" value="{{ $medicine->manufacturer }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Generic Name:</label>
    <input type="text" name="generic_name" value="{{ $medicine->generic_name }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Formula:</label>
    <input type="text" name="formula" value="{{ $medicine->formula }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Drug Class:</label>
    <input type="text" name="drug_class" value="{{ $medicine->drug_class }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Medicinal Form:</label>
    <input type="text" name="medicinal_form" value="{{ $medicine->medicinal_form }}" style="width: 100%; padding: 8px;">

    <button type="submit" style="margin-top: 20px; padding: 10px 20px; background-color: #2ecc71; color: white; border: none; border-radius: 5px;">Update</button>
</form>
@endsection
