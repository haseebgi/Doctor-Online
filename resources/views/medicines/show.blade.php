<div style="max-width: 1100px; margin: 40px auto; padding: 25px; background: #fff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); font-family: Arial, sans-serif; color: #333;">

    <div style="display: flex; gap: 40px; flex-wrap: wrap;">

        {{-- Left: Medicine Image --}}
        <div style="flex: 1; min-width: 300px;">
            @if($medicine->image)
                <img src="{{ asset('storage/' . $medicine->image) }}" 
                     alt="{{ $medicine->name }}"
                     style="width: 100%; max-width: 400px; height: auto; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
            @endif
        </div>

        {{-- Right: Main Information --}}
        <div style="flex: 2; min-width: 300px;">

            <h2 style="font-size: 28px; color: #2c3e50;">{{ $medicine->name }}</h2>
            <p style="margin-bottom: 10px;">💬 <strong>Description:</strong> {{ $medicine->description }}</p>
            <p>💰 <strong>Price:</strong> <span style="color: green;">{{ $medicine->price }} PKR</span></p>

            <hr style="margin: 20px 0;">

            {{-- Extra Medical Info --}}
            <div style="line-height: 1.8;">
                <p>🏢 <strong>Manufacturer:</strong> {{ $medicine->manufacturer ?? 'N/A' }}</p>
                <p>🔤 <strong>Generic Name:</strong> {{ $medicine->generic_name ?? 'N/A' }}</p>
                <p>🧬 <strong>Formula:</strong> {{ $medicine->formula ?? 'N/A' }}</p>
                <p>📚 <strong>Drug Class:</strong> {{ $medicine->drug_class ?? 'N/A' }}</p>
                <p>💉 <strong>Medicinal Form:</strong> {{ $medicine->medicinal_form ?? 'N/A' }}</p>
            </div>

        </div>
    </div>

    <hr style="margin: 30px 0;">

    {{-- Full Details Below --}}
    <div style="line-height: 1.8;">
        <p>🧪 <strong>Uses:</strong> {{ $medicine->uses }}</p>
        <p>💊 <strong>Dosage:</strong> {{ $medicine->dosage }}</p>
        <p>⚠️ <strong>Warnings:</strong> {{ $medicine->warnings }}</p>
        <p>🛡️ <strong>Precautions:</strong> {{ $medicine->precautions }}</p>
        <p>😟 <strong>Side Effects:</strong> {{ $medicine->side_effects }}</p>
        <p>📦 <strong>Packaging:</strong> {{ $medicine->packaging }}</p>
        <p>📝 <strong>Prescription Required:</strong> {{ $medicine->prescription_required ? 'Yes' : 'No' }}</p>
        <p>👨‍⚕️ <strong>Expert Advice:</strong> {{ $medicine->expert_advice }}</p>
        <p>❓ <strong>FAQ:</strong> {{ $medicine->faq }}</p>
        <p>📌 <strong>Disclaimer:</strong> {{ $medicine->disclaimer }}</p>
    </div>

    <div style="margin-top: 30px; text-align: center;">
        <a href="{{ route('medicine.admin.index') }}" 
           style="text-decoration: none; padding: 10px 25px; background-color: #3498db; color: white; border-radius: 6px; font-weight: bold;">
            ← Back to Medicines
        </a>
    </div>
</div>
