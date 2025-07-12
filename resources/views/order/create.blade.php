<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background: #f4f4f4;">
    <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data"
          style="width: 400px; background-color: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
        @csrf

        <h2 style="text-align: center; font-size: 20px; color: #2c3e50; margin-bottom: 20px;">Order Medicine(s)</h2>

        <label style="font-size: 14px; font-weight: bold;">Write your medicine</label>
        <textarea name="medicine_name" rows="2" style="width: 100%; padding: 6px; font-size: 13px; margin-bottom: 10px;"></textarea>

        <p style="text-align: center; margin: 5px 0; font-weight: bold;">Or</p>

        <label style="font-size: 14px; font-weight: bold;">Attach prescription</label>
        <input type="file" name="prescription" style="margin-bottom: 10px; font-size: 13px;"><br>

        <label style="font-size: 14px; font-weight: bold;">Write your address</label>
        <textarea name="address" required rows="2" style="width: 100%; padding: 6px; font-size: 13px; margin-bottom: 10px;"></textarea>

        <label style="font-size: 14px; font-weight: bold;">Enter Phone Number</label>
        <input type="text" name="phone_number" required style="width: 100%; padding: 6px; font-size: 13px; margin-bottom: 10px;">

        <label style="font-size: 14px; font-weight: bold;">Add Patient Name</label>
        <input type="text" name="patient_name" required style="width: 100%; padding: 6px; font-size: 13px; margin-bottom: 10px;">

        <label style="font-size: 14px; font-weight: bold;">Select City</label>
        <select name="city" required style="width: 100%; padding: 6px; font-size: 13px; margin-bottom: 15px;">
            <option value="">Choose City</option>
            <option>Lahore</option>
            <option>Karachi</option>
            <option>Islamabad</option>
        </select>

        <button type="submit" style="background-color: #c0392b; color: white; padding: 10px; font-size: 14px; border: none; border-radius: 4px; width: 100%;">
            Submit
        </button>
    </form>
</div>
