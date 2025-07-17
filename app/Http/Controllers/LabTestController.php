<?php

namespace App\Http\Controllers;

use App\Models\LabTest;
use App\Models\Lab;
use App\Models\BodyTest;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    public function index()
    {
        $labTests = LabTest::with('lab')->paginate(10);
        return view('lab_tests.index', compact('labTests'));
    }

    public function create()
    {
        $labs = Lab::all();
        $bodyTests = BodyTest::all();
        return view('lab_tests.create', compact('labs', 'bodyTests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lab_id' => 'required|exists:labs,id',
            'test_name' => 'required|string|max:255',
            'price' => 'required|integer',
            'body_tests' => 'nullable|array',
            'body_tests.*' => 'exists:body_tests,id',
        ]);

        $labTest = LabTest::create($request->only('lab_id', 'test_name', 'price'));

        if ($request->has('body_tests')) {
            $labTest->bodyTests()->sync($request->body_tests);
        }

        return redirect()->route('lab_tests.index')->with('success', 'Lab Test created successfully.');
    }

    public function edit(LabTest $labTest)
    {
        $labs = Lab::all();
        $bodyTests = BodyTest::all();
        $selectedBodyTests = $labTest->bodyTests->pluck('id')->toArray();

        return view('lab_tests.edit', compact('labTest', 'labs', 'bodyTests', 'selectedBodyTests'));
    }

    public function update(Request $request, LabTest $labTest)
    {
        $request->validate([
            'lab_id' => 'required|exists:labs,id',
            'test_name' => 'required|string|max:255',
            'price' => 'required|integer',
            'body_tests' => 'nullable|array',
            'body_tests.*' => 'exists:body_tests,id',
        ]);

        $labTest->update($request->only('lab_id', 'test_name', 'price'));

        if ($request->has('body_tests')) {
            $labTest->bodyTests()->sync($request->body_tests);
        } else {
            $labTest->bodyTests()->detach();
        }

        return redirect()->route('lab_tests.index')->with('success', 'Lab Test updated successfully.');
    }

    public function destroy(LabTest $labTest)
    {
        $labTest->delete();
        return redirect()->route('lab_tests.index')->with('success', 'Lab Test deleted successfully.');
    }
}
