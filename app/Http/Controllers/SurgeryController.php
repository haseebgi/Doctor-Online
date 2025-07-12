<?php

// app/Http/Controllers/SurgeryController.php

namespace App\Http\Controllers;

use App\Models\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function index()
    {
        $surgeries = Surgery::all();
        return view('surgeries.index', compact('surgeries'));
    }

    public function create()
    {
        return view('surgeries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'discount_label' => 'nullable|string|max:255',
            'subtext' => 'nullable|string|max:255',
            'button' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('surgeries', 'public');
        }

        Surgery::create($validated);
        return redirect()->route('surgeries.index')->with('success', 'Surgery created successfully.');
    }

    public function edit(Surgery $surgery)
    {
        return view('surgeries.edit', compact('surgery'));
    }

    public function update(Request $request, Surgery $surgery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'discount_label' => 'nullable|string|max:255',
            'subtext' => 'nullable|string|max:255',
            'button' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('surgeries', 'public');
        }

        $surgery->update($validated);
        return redirect()->route('surgeries.index')->with('success', 'Surgery updated successfully.');
    }

    public function destroy(Surgery $surgery)
    {
        $surgery->delete();
        return redirect()->route('surgeries.index')->with('success', 'Surgery deleted successfully.');
    }
}
