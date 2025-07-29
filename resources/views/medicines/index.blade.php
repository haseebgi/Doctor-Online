@extends('layouts.admin')

@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">All Medicines</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-responsive">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price (PKR)</th>
                <th>Uses</th>
                <th>Dosage</th>
                <th>Warnings</th>
                <th>Precautions</th>
                <th>Side Effects</th>
                <th>Packaging</th>
                <th>Prescription</th>
                <th>Expert Advice</th>
                <th>FAQ</th>
                <th>Disclaimer</th>
                <th>Manufacturer</th>
                <th>Generic Name</th>
                <th>Formula</th>
                <th>Drug Class</th>
                <th>Medicinal Form</th>
                <th>Company Name</th>
                <th>Brand Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
                <tr>
                    <td>
                        @if($medicine->image)
                            <img src="{{ asset('storage/' . $medicine->image) }}" style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->description }}</td>
                    <td>{{ $medicine->price }}</td>
                    <td>{{ $medicine->uses }}</td>
                    <td>{{ $medicine->dosage }}</td>
                    <td>{{ $medicine->warnings }}</td>
                    <td>{{ $medicine->precautions }}</td>
                    <td>{{ $medicine->side_effects }}</td>
                    <td>{{ $medicine->packaging }}</td>
                    <td>{{ $medicine->prescription_required ? 'Yes' : 'No' }}</td>
                    <td>{{ $medicine->expert_advice }}</td>
                    <td>{{ $medicine->faq }}</td>
                    <td>{{ $medicine->disclaimer }}</td>
                    <td>{{ $medicine->manufacturer }}</td>
                    <td>{{ $medicine->generic_name }}</td>
                    <td>{{ $medicine->formula }}</td>
                    <td>{{ $medicine->drug_class }}</td>
                    <td>{{ $medicine->medicinal_form }}</td>

                    {{-- ✅ Company and Brand --}}
                    @if($medicine->category)
                        <td>{{ $medicine->category->company_name }}</td>
                        <td>{{ $medicine->category->brand_name }}</td>
                    @else
                        <td colspan="2"><em>No Category</em></td>
                    @endif

                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('medicine.show', $medicine->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('medicine.edit', $medicine->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('medicine.destroy', $medicine->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this medicine?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
