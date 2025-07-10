<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'pmdc_verified' => 'nullable|boolean',
            'specialization' => 'required|string|max:255',
            'degrees' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'clinic_info' => 'nullable|string|max:255',
            'availability' => 'nullable|string|max:255',
            'fee' => 'nullable|numeric',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $fileName = time() . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->move(public_path('uploads/doctors'), $fileName);
            $data['profile_image'] = 'uploads/doctors/' . $fileName;
        }

        $data['pmdc_verified'] = $request->has('pmdc_verified');

        Doctor::create($data);

        return redirect()->route('doctors.create')->with('success', 'Doctor created successfully');
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'pmdc_verified' => 'nullable|boolean',
            'specialization' => 'required|string|max:255',
            'degrees' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'clinic_info' => 'nullable|string|max:255',
            'availability' => 'nullable|string|max:255',
            'fee' => 'nullable|numeric',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $fileName = time() . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->move(public_path('uploads/doctors'), $fileName);
            $data['profile_image'] = 'uploads/doctors/' . $fileName;
        }

        $data['pmdc_verified'] = $request->has('pmdc_verified');

        $doctor->update($data);

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully');
    }
}
