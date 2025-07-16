<?php


// app/Http/Controllers/LabTestController.php

namespace App\Http\Controllers;

use App\Models\LabTest;
use App\Models\Lab;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    public function index()
    {
        $labTests = LabTest::with('lab')->get();
        return view('lab_tests.index', compact('labTests'));
    }

    public function create()
    {
        $labs = Lab::all();
        return view('lab_tests.create', compact('labs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lab_id' => 'required|exists:labs,id',
            'test_name' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric'
        ]);

        LabTest::create($request->all());

        return redirect()->route('lab_tests.index')->with('success', 'Lab Test added successfully.');
    }

    public function show(LabTest $labTest)
    {
        return view('lab_tests.show', compact('labTest'));
    }

    public function edit(LabTest $labTest)
    {
        $labs = Lab::all();
        return view('lab_tests.edit', compact('labTest', 'labs'));
    }

    public function update(Request $request, LabTest $labTest)
    {
        $request->validate([
            'lab_id' => 'required|exists:labs,id',
            'test_name' => 'required',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric'
        ]);

        $labTest->update($request->all());

        return redirect()->route('lab_tests.index')->with('success', 'Lab Test updated successfully.');
    }

    public function destroy(LabTest $labTest)
    {
        $labTest->delete();
        return redirect()->route('lab_tests.index')->with('success', 'Lab Test deleted successfully.');
    }
}
