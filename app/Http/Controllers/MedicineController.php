<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.show', compact('medicine'));
    }

    public function create()
    {
        return view('medicines.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
          'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'uses' => 'nullable|string',
            'dosage' => 'nullable|string',
            'warnings' => 'nullable|string',
            'precautions' => 'nullable|string',
            'side_effects' => 'nullable|string',
            'packaging' => 'nullable|string',
            'prescription_required' => 'nullable|boolean',
            'expert_advice' => 'nullable|string',
            'faq' => 'nullable|string',
            'disclaimer' => 'nullable|string',
            'manufacturer' => 'nullable|string',
            'generic_name' => 'nullable|string',
            'formula' => 'nullable|string',
            'drug_class' => 'nullable|string',
            'medicinal_form' => 'nullable|string',
        ]);

        $data['prescription_required'] = $request->has('prescription_required');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('medicines', 'public');
        }

        Medicine::create($data);

        return redirect()->route('medicine.admin.index')->with('success', 'Medicine added successfully.');
    }

    public function edit($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('medicines.edit', compact('medicine'));
    }

   public function update(Request $request, $id)
{
    $medicine = Medicine::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string',
        'description' => 'nullable|string', // ✅ added this
        'price' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'uses' => 'nullable|string',
        'dosage' => 'nullable|string',
        'warnings' => 'nullable|string',
        'precautions' => 'nullable|string',
        'side_effects' => 'nullable|string',
        'packaging' => 'nullable|string',
        'prescription_required' => 'nullable|boolean',
        'expert_advice' => 'nullable|string',
        'faq' => 'nullable|string',
        'disclaimer' => 'nullable|string',
        'manufacturer' => 'nullable|string',
        'generic_name' => 'nullable|string',
        'formula' => 'nullable|string',
        'drug_class' => 'nullable|string',
        'medicinal_form' => 'nullable|string',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('medicines', 'public');
    }

    $data['prescription_required'] = $request->has('prescription_required');
    $medicine->update($data);

    return redirect()->route('medicine.admin.index')->with('success', 'Medicine updated successfully.');
}


    public function destroy($id)
    {
        $medicine = Medicine::findOrFail($id);
        $medicine->delete();

        return redirect()->route('medicine.admin.index')->with('success', 'Medicine deleted successfully.');
    }
    public function adminIndex()
{
    $medicines = Medicine::all();
    return view('medicines.index', compact('medicines'));
}

}
