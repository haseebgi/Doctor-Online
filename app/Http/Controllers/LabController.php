<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $labs = Lab::all();
        return view('labs.index', compact('labs'));
    }

    public function create()
    {
        return view('labs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email'
        ]);

        Lab::create($request->all());

        return redirect()->route('labs.index')->with('success', 'Lab added successfully.');
    }

    public function show(Lab $lab)
    {
        return view('labs.show', compact('lab'));
    }

    public function edit(Lab $lab)
    {
        return view('labs.edit', compact('lab'));
    }

    public function update(Request $request, Lab $lab)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable|email'
        ]);

        $lab->update($request->all());

        return redirect()->route('labs.index')->with('success', 'Lab updated successfully.');
    }

    public function destroy(Lab $lab)
    {
        $lab->delete();
        return redirect()->route('labs.index')->with('success', 'Lab deleted successfully.');
    }
}
