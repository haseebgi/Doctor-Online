@extends('layouts.admin')

@section('content')
<h2 style="text-align: center; color: #2c3e50;">Add New Medicine</h2>

<form method="POST" action="{{ route('medicine.store') }}" enctype="multipart/form-data" style="max-width: 600px; margin: auto; background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    @csrf

    <label style="display: block; margin-top: 10px;">Name:</label>
    <input type="text" name="name" required style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Description:</label>
    <textarea name="description" style="width: 100%; padding: 8px;"></textarea>

    <label style="display: block; margin-top: 10px;">Price:</label>
    <input type="text" name="price" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Image:</label>
    <input type="file" name="image" style="width: 100%;">

    <label style="display: block; margin-top: 10px;">Uses:</label>
    <textarea name="uses" style="width: 100%; padding: 8px;">{{ old('uses') }}</textarea>

    <label style="display: block; margin-top: 10px;">Dosage:</label>
    <textarea name="dosage" style="width: 100%; padding: 8px;">{{ old('dosage') }}</textarea>

    <label style="display: block; margin-top: 10px;">Warnings:</label>
    <textarea name="warnings" style="width: 100%; padding: 8px;">{{ old('warnings') }}</textarea>

    <label style="display: block; margin-top: 10px;">Precautions:</label>
    <textarea name="precautions" style="width: 100%; padding: 8px;">{{ old('precautions') }}</textarea>

    <label style="display: block; margin-top: 10px;">Side Effects:</label>
    <textarea name="side_effects" style="width: 100%; padding: 8px;">{{ old('side_effects') }}</textarea>

    <label style="display: block; margin-top: 10px;">Packaging:</label>
    <input type="text" name="packaging" value="{{ old('packaging') }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">
        <input type="checkbox" name="prescription_required" value="1"> Prescription Required
    </label>

    <label style="display: block; margin-top: 10px;">Expert Advice:</label>
    <textarea name="expert_advice" style="width: 100%; padding: 8px;">{{ old('expert_advice') }}</textarea>

    <label style="display: block; margin-top: 10px;">FAQ:</label>
    <textarea name="faq" style="width: 100%; padding: 8px;">{{ old('faq') }}</textarea>

    <label style="display: block; margin-top: 10px;">Disclaimer:</label>
    <textarea name="disclaimer" style="width: 100%; padding: 8px;">{{ old('disclaimer') }}</textarea>

    <label style="display: block; margin-top: 10px;">Manufacturer:</label>
    <input type="text" name="manufacturer" value="{{ old('manufacturer') }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Generic Name:</label>
    <input type="text" name="generic_name" value="{{ old('generic_name') }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Formula:</label>
    <input type="text" name="formula" value="{{ old('formula') }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Drug Class:</label>
    <input type="text" name="drug_class" value="{{ old('drug_class') }}" style="width: 100%; padding: 8px;">

    <label style="display: block; margin-top: 10px;">Medicinal Form:</label>
    <input type="text" name="medicinal_form" value="{{ old('medicinal_form') }}" style="width: 100%; padding: 8px;">

    <button type="submit" style="margin-top: 20px; padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 5px;">Save</button>
</form>
@endsection
