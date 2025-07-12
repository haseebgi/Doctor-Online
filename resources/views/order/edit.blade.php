<h2 style="text-align: center; color: #2c3e50;">Edit Order</h2>

<form method="POST" action="{{ route('order.update', $order->id) }}" enctype="multipart/form-data"
    style="max-width: 600px; margin: 30px auto; background-color: #f9f9f9; padding: 25px; border-radius: 12px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    
    @csrf
    @method('PUT')

    <label style="font-weight: bold;">Patient Name:</label>
    <input type="text" name="patient_name" value="{{ $order->patient_name }}" required style="width: 100%; padding: 8px; margin-bottom: 15px;"><br>

    <label style="font-weight: bold;">Phone Number:</label>
    <input type="text" name="phone_number" value="{{ $order->phone_number }}" required style="width: 100%; padding: 8px; margin-bottom: 15px;"><br>

    <label style="font-weight: bold;">City:</label>
    <select name="city" required style="width: 100%; padding: 8px; margin-bottom: 15px;">
        <option value="">Choose City</option>
        <option {{ $order->city == 'Sargodha' ? 'selected' : '' }}>Lahore</option>
        <option {{ $order->city == 'lahore' ? 'selected' : '' }}>Karachi</option>
        <option {{ $order->city == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
    </select>

    <label style="font-weight: bold;">Medicine Name:</label>
    <textarea name="medicine_name" style="width: 100%; padding: 8px; margin-bottom: 15px;">{{ $order->medicine_name }}</textarea><br>

    <label style="font-weight: bold;">Address:</label>
    <textarea name="address" required style="width: 100%; padding: 8px; margin-bottom: 15px;">{{ $order->address }}</textarea><br>

    <label style="font-weight: bold;">Prescription (Upload to Replace):</label>
    <input type="file" name="prescription" style="width: 100%; padding: 6px;"><br><br>

    @if($order->prescription)
        <p>Current Prescription: 
            <a href="{{ asset('storage/' . $order->prescription) }}" target="_blank" style="color: #3490dc;">View</a>
        </p>
    @endif

    <button type="submit"
        style="background-color: #3490dc; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
        Update Order
    </button>
</form>