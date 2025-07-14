<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Category;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    // Display all doctors
    public function index()
    {
        $doctors = Doctor::with('category', 'hospital')->get();
        return view('doctors.index', compact('doctors'));
    }

    // Show the create form
    public function create()
    {
        $categories = Category::all();
        $hospitals = Hospital::all();
        return view('doctors.create', compact('categories', 'hospitals'));
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
            'hospital_id' => 'required|integer|exists:hospitals,id',
            'category_id' => 'required|integer|exists:categories,id',
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
        $categories = Category::all();
        $hospitals = Hospital::all();
        return view('doctors.edit', compact('doctor', 'categories', 'hospitals'));
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
            'hospital_id' => 'required|integer|exists:hospitals,id',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
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
