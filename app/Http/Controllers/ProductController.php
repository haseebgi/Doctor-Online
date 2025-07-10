<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products', 'public');
            $data['image'] = 'storage/' . $image;
        }

        Product::create($data);
        return redirect('/products/create')->with('success', 'Product added successfully');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $data = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products', 'public');
            $data['image'] = 'storage/' . $image;
        }

        $product->update($data);
        return redirect('/products')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product) {
        $product->delete();
        return back()->with('success', 'Product deleted');
    }
}
