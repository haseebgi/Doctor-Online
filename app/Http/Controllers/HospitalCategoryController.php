<?php
// app/Http/Controllers/HospitalCategoryController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HospitalCategory;

class HospitalCategoryController extends Controller
{
    public function index()
    {
        $categories = HospitalCategory::all();
        return view('hospital_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('hospital_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        HospitalCategory::create($request->only('title'));
        return redirect()->route('hospital_categories.index')->with('success', 'Category created');
    }

    public function edit($id)
    {
        $category = HospitalCategory::findOrFail($id);
        return view('hospital_categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $category = HospitalCategory::findOrFail($id);
        $category->update($request->only('title'));
        return redirect()->route('hospital_categories.index')->with('success', 'Category updated');
    }

    public function destroy($id)
    {
        $category = HospitalCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('hospital_categories.index')->with('success', 'Category deleted');
    }
}
