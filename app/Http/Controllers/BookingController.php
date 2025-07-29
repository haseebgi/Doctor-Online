<?php

// app/Http/Controllers/BookingController.php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\LabTest;
use App\Models\City;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        $labTests = LabTest::with('lab')->get();
        $cities = City::orderBy('name')->get();
        return view('bookings.create', compact('labTests', 'cities'));
    }


    
 public function store(Request $request)
    {
        // Validate form inputs
        $data = $request->validate([
            'lab_test_id'    => 'required|exists:lab_tests,id',
            'patient_name'   => 'required|string|max:255',
            'patient_number' => 'required|string|max:15',
            'lab_city'       => 'required|string|max:100',
            'age'            => 'nullable|integer|min:0',
            'prescription'   => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file upload if exists
        if ($request->hasFile('prescription')) {
            $file = $request->file('prescription');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('prescriptions'), $filename);
            $data['prescription'] = 'prescriptions/' . $filename;
        }

        // Create booking record
        Booking::create($data);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Booking confirmed successfully!');
    }
}
