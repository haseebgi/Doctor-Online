<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.index', compact('hospitals'));
    }

    public function create()
    {
        return view('hospitals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'address' => 'nullable|string',
            'location' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        if ($request->hasFile('icon')) {
            $validated['icon'] = $request->file('icon')->store('hospital_icons', 'public');
        }

        Hospital::create($validated);
        return redirect()->route('hospitals.index')->with('success', 'Hospital created successfully.');
    }

    public function edit(Hospital $hospital)
    {
        return view('hospitals.edit', compact('hospital'));
    }

    public function update(Request $request, Hospital $hospital)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'address' => 'nullable|string',
            'location' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        if ($request->hasFile('icon')) {
            if ($hospital->icon && Storage::disk('public')->exists($hospital->icon)) {
                Storage::disk('public')->delete($hospital->icon);
            }
            $validated['icon'] = $request->file('icon')->store('hospital_icons', 'public');
        }

        $hospital->update($validated);
        return redirect()->route('hospitals.index')->with('success', 'Hospital updated successfully.');
    }

    public function destroy(Hospital $hospital)
    {
        if ($hospital->icon && Storage::disk('public')->exists($hospital->icon)) {
            Storage::disk('public')->delete($hospital->icon);
        }

        $hospital->delete();
        return redirect()->route('hospitals.index')->with('success', 'Hospital deleted successfully.');
    }
}
