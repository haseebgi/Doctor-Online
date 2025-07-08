<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use Illuminate\Support\Facades\Storage;

class HospitalController extends Controller
{
    public function index()
    {
        // Show all hospitals in a blade view
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
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'map_direction' => 'nullable|string',
            'address' => 'nullable|string',
            'hospital_category_id' => 'required|integer',
            'property_id' => 'required|integer',
        ]);

        if ($request->hasFile('icon')) {
            $path = $request->file('icon')->store('hospital_icons', 'public');
            $validated['icon'] = $path;
        }

        Hospital::create($validated);
        return redirect()->route('hospitals.index')->with('success', 'Hospital created successfully.');
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('hospitals.edit', compact('hospital'));
    }

    public function update(Request $request, $id)
    {
        $hospital = Hospital::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'map_direction' => 'nullable|string',
            'address' => 'nullable|string',
            'hospital_category_id' => 'nullable|integer',
            'property_id' => 'nullable|integer',
        ]);

        if ($request->hasFile('icon')) {
            // Optional: delete old image
            if ($hospital->icon && Storage::disk('public')->exists($hospital->icon)) {
                Storage::disk('public')->delete($hospital->icon);
            }

            $path = $request->file('icon')->store('hospital_icons', 'public');
            $validated['icon'] = $path;
        }

        $hospital->update($validated);
        return redirect()->route('hospitals.index')->with('success', 'Hospital updated successfully.');
    }

    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);

        // Optional: delete image
        if ($hospital->icon && Storage::disk('public')->exists($hospital->icon)) {
            Storage::disk('public')->delete($hospital->icon);
        }

        $hospital->delete();
        return redirect()->route('hospitals.index')->with('success', 'Hospital deleted successfully.');
    }
}
