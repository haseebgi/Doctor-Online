<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineCategory;

class MedicineCategoryController extends Controller
{
  public function create()
{
    return view('medcategories.create'); // View file path
}

public function store(Request $r)
{
    $r->validate([
        'company_name' => 'required',
        'brand_name' => 'required',
    ]);

    \App\Models\MedicineCategory::create($r->only('company_name', 'brand_name'));

 return redirect()->route('medcategories.index')->with('success', 'Category saved successfully!');

}
public function index()
{
    $categories = \App\Models\MedicineCategory::all();
    return view('medcategories.index', compact('categories'));
}
 public function edit($id)
{
    $category = \App\Models\MedicineCategory::findOrFail($id);
    return view('medcategories.edit', compact('category'));
}

public function update(Request $r, $id)
{
    $r->validate(['company_name'=>'required', 'brand_name'=>'required']);
    $cat = \App\Models\MedicineCategory::findOrFail($id);
    $cat->update($r->only('company_name', 'brand_name'));
    return redirect()->route('medcategories.index')->with('ok', 'Updated');
}

public function destroy($id)
{
    \App\Models\MedicineCategory::destroy($id);
    return back()->with('ok', 'Deleted');
}


}
