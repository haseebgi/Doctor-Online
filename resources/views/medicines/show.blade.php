@extends('layouts.admin')

@section('content')

<div class="container my-5">
    <div class="card shadow-lg p-4">
        <div class="row g-5">

            {{-- Left Column: Medicine Image --}}
            <div class="col-md-5">
                @if($medicine->image)
                    <img src="{{ asset('storage/' . $medicine->image) }}" 
                         alt="{{ $medicine->name }}" 
                         class="img-fluid rounded shadow"
                         style="max-height: 500px; object-fit: cover; width: 100%";>
                @else
                    <div class="text-muted">No image available</div>
                @endif
            </div>

            {{-- Right Column: Medicine Basic Info --}}
            <div class="col-md-7">
                <h2 class="text-primary">{{ $medicine->name }}</h2>

                <p><strong>💬 Description:</strong> {{ $medicine->description }}</p>
                <p><strong>💰 Price:</strong> <span class="text-success">{{ $medicine->price }} PKR</span></p>

                <hr>

                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><strong>🏢 Manufacturer:</strong> {{ $medicine->manufacturer ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>🔤 Generic Name:</strong> {{ $medicine->generic_name ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>🧬 Formula:</strong> {{ $medicine->formula ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>📚 Drug Class:</strong> {{ $medicine->drug_class ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>💉 Medicinal Form:</strong> {{ $medicine->medicinal_form ?? 'N/A' }}</li>
                </ul>
            </div>
        </div>

        <hr class="my-4">

        {{-- Full Detailed Info --}}
        <div class="row">
            <div class="col-12">
                <h5 class="mb-3 text-secondary">Additional Information</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>🧪 Uses:</strong> {{ $medicine->uses }}</li>
                    <li class="list-group-item"><strong>💊 Dosage:</strong> {{ $medicine->dosage }}</li>
                    <li class="list-group-item"><strong>⚠️ Warnings:</strong> {{ $medicine->warnings }}</li>
                    <li class="list-group-item"><strong>🛡️ Precautions:</strong> {{ $medicine->precautions }}</li>
                    <li class="list-group-item"><strong>😟 Side Effects:</strong> {{ $medicine->side_effects }}</li>
                    <li class="list-group-item"><strong>📦 Packaging:</strong> {{ $medicine->packaging }}</li>
                    <li class="list-group-item"><strong>📝 Prescription Required:</strong> {{ $medicine->prescription_required ? 'Yes' : 'No' }}</li>
                    <li class="list-group-item"><strong>👨‍⚕️ Expert Advice:</strong> {{ $medicine->expert_advice }}</li>
                    <li class="list-group-item"><strong>❓ FAQ:</strong> {{ $medicine->faq }}</li>
                    <li class="list-group-item"><strong>📌 Disclaimer:</strong> {{ $medicine->disclaimer }}</li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('medicine.admin.index') }}" class="btn btn-primary">
                ← Back to Medicines
            </a>
        </div>
    </div>
</div>

@endsection
