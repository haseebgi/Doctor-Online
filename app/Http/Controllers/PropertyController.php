<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Property::create($validated);
        return redirect()->route('properties.index')->with('success', 'Property created.');
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $property->update($validated);
        return redirect()->route('properties.index')->with('success', 'Property updated.');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property deleted.');
    }
}
