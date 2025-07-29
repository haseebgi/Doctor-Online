<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $labs = Lab::paginate(10);
        return view('labs.index', compact('labs'));
    }

    public function create()
    {
        return view('labs.create');
    }

    public function searchLocations(Request $request)
{
    $term = $request->get('term');

    // Example: hardcoded locations - replace with your DB or API data
    $locations = ['Karachi', 'Lahore', 'Islamabad', 'Peshawar', 'Quetta', 'Multan', 'Faisalabad', 'Rawalpindi'];

    $results = [];

    foreach ($locations as $location) {
        if (stripos($location, $term) !== false) {
            $results[] = $location;
        }
    }

    return response()->json($results);
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
        ]);

        Lab::create($request->only('name', 'location', 'contact'));

        return redirect()->route('labs.index')->with('success', 'Lab added successfully.');
    }

    public function edit(Lab $lab)
    {
        return view('labs.edit', compact('lab'));
    }

    public function update(Request $request, Lab $lab)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
        ]);

        $lab->update($request->only('name', 'location', 'contact'));

        return redirect()->route('labs.index')->with('success', 'Lab updated successfully.');
    }

    public function destroy(Lab $lab)
    {
        $lab->delete();
        return redirect()->route('labs.index')->with('success', 'Lab deleted successfully.');
    }
}
