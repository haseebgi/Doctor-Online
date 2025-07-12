<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    // Display all doctors
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    // Show the create form
    public function create()
    {
        return view('doctors.create');
    }

    // Store new doctor in database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'reviews' => 'nullable|integer',
            'experience_years' => 'nullable|integer',
            'satisfaction' => 'nullable|integer',
            'video_fee' => 'nullable|numeric',
            'hospital_fee' => 'nullable|numeric',
            'hospital_name' => 'nullable|string',
            'hospital_location' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('doctor_images', 'public');
        }

        Doctor::create($data);
        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }

    // Show the edit form
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    // Update doctor
    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'reviews' => 'nullable|integer',
            'experience_years' => 'nullable|integer',
            'satisfaction' => 'nullable|integer',
            'video_fee' => 'nullable|numeric',
            'hospital_fee' => 'nullable|numeric',
            'hospital_name' => 'nullable|string',
            'hospital_location' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
                Storage::disk('public')->delete($doctor->image);
            }

            $data['image'] = $request->file('image')->store('doctor_images', 'public');
        }

        $doctor->update($data);
        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    // Delete doctor
    public function destroy(Doctor $doctor)
    {
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }

        $doctor->delete();
        return back()->with('success', 'Doctor deleted successfully.');
    }
}
