<h2 style="text-align: center; color: #2c3e50;">All Orders</h2>

@if(session('success'))
    <p style="color: green; text-align: center;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10" cellspacing="0" style="width: 95%; margin: auto; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
    <thead style="background-color: #3498db; color: white;">
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
    <tbody>
        @foreach($orders as $order)
        <tr style="text-align: center;">
            <td>{{ $order->patient_name }}</td>
            <td>{{ $order->phone_number }}</td>
            <td>{{ $order->city }}</td>
            <td>{{ $order->medicine_name ?? 'N/A' }}</td>
            <td>{{ $order->address }}</td>
            <td>
                @if($order->prescription)
                    <a href="{{ asset('storage/' . $order->prescription) }}" target="_blank" style="color: #2980b9;">View</a>
                @else
                    <span style="color: #999;">N/A</span>
                @endif
            </td>

            <!-- Current Status Column -->
            <td>
                @php
                    $color = match($order->status) {
                        'Pending' => '#f39c12',
                        'Processing' => '#e67e22',
                        'Delivered' => '#2ecc71',
                        default => '#bdc3c7',
                    };
                @endphp
                <span style="background-color: {{ $color }}; color: white; padding: 5px 10px; border-radius: 5px;">
                    {{ $order->status }}
                </span>
            </td>

            <!-- Dropdown to Update Status -->
            <td>
                <form action="{{ route('order.updateStatus', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <select name="status" style="padding: 5px; border-radius: 5px;">
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                    </select>
                    <button type="submit" style="margin-top: 5px; background-color: #2980b9; color: white; border: none; border-radius: 5px; padding: 5px 10px; cursor: pointer;">
                        Update
                    </button>
                </form>
            </td>

            <!-- Edit/Delete Buttons -->
            <td>
                <a href="{{ route('order.edit', $order->id) }}" style="color: #2980b9; text-decoration: none; margin-right: 5px;">Edit</a>

                <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure to delete this order?')" style="color: white; background-color: #e74c3c; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
