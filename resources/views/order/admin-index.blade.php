@extends('layouts.admin')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">All Orders</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle shadow-sm">
            <thead class="table-primary text-center">
                <tr>
                    <th>Patient Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Medicine</th>
                    <th>Address</th>
                    <th>Prescription</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($orders as $order)
                <tr>
                    <td class="text-truncate" style="max-width: 120px;">{{ $order->patient_name }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->city }}</td>
                    <td class="text-truncate" style="max-width: 150px;">{{ $order->medicine_name ?? 'N/A' }}</td>
                    <td class="text-truncate" style="max-width: 180px;">{{ $order->address }}</td>
                    <td>
                        @if($order->prescription)
                            <a href="{{ asset('storage/' . $order->prescription) }}" target="_blank" class="btn btn-sm btn-outline-info px-2 py-1">View</a>
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        @php
                            $badgeColor = match($order->status) {
                                'Pending' => 'warning',
                                'Processing' => 'info',
                                'Delivered' => 'success',
                                default => 'secondary',
                            };
                        @endphp
                        <span class="badge bg-{{ $badgeColor }} px-2 py-1">{{ $order->status }}</span>
                    </td>
                    <td>
                        <form action="{{ route('order.updateStatus', $order->id) }}" method="POST" class="d-flex align-items-center gap-2 justify-content-center">
                            @csrf
                            @method('PUT')
                            <select name="status" class="form-select form-select-sm" style="width: 110px; height: 30px; font-size: 0.85rem;">
                                <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-primary px-2 py-1" style="font-size: 0.85rem;">Update</button>
                        </form>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-outline-primary px-2 py-1">Edit</a>

                            <form action="{{ route('order.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this order?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger px-2 py-1" style="font-size: 0.85rem;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center text-muted">No orders found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
