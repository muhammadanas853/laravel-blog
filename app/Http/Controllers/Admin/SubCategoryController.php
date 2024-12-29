<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    // Display a list of all subcategories
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    // Show the form for creating a new subcategory
    public function create()
    {
        $categories = Category::all(); // All categories to assign to subcategory
        return view('admin.subcategories.create', compact('categories'));
    }

    // Store a newly created subcategory in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subcategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.subcategories.index')->with('success', 'Subcategory created successfully!');
    }

    // Show the details of a specific subcategory
    public function show($id)
    {
        $subcategory = Subcategory::with('category')->findOrFail($id);
        return view('admin.subcategories.show', compact('subcategory'));
    }

    // Show the form for editing an existing subcategory
    public function edit($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $categories = Category::all();
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    // Update the specified subcategory in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $subcategory = Subcategory::findOrFail($id);
        $subcategory->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.subcategories.index')->with('success', 'Subcategory updated successfully!');
    }

    // Delete the specified subcategory from the database
    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('admin.subcategories.index')->with('success', 'Subcategory deleted successfully!');
    }
}
