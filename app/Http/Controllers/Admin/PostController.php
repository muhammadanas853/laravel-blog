<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Display a list of all posts
    public function index()
    {
        $posts = Post::with('category', 'subcategory')->get();
        return view('admin.posts.index', compact('posts'));
    }

    // Show the form for creating a new post
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.posts.create', compact('categories', 'subcategories'));
    }

    // Store a newly created post in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meta_tags' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'image' => 'nullable|image|max:2048',
        ], [
            'category_id.required' => 'Please select a category.',
            'subcategory_id.exists' => 'The selected subcategory is invalid.',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'meta_tags' => $request->meta_tags,
            'meta_description' => $request->meta_description,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully!');
    }

    // Show the details of a specific post
    public function show($id)
    {
        $post = Post::with('category', 'subcategory')->findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    // Show the form for editing an existing post
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id', $post->category_id)->get();
        return view('admin.posts.edit', compact('post', 'categories', 'subcategories'));
    }

    // Update the specified post in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meta_tags' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'image' => 'nullable|image|max:2048',
        ], [
            'category_id.required' => 'Please select a category.',
            'subcategory_id.exists' => 'The selected subcategory is invalid.',
        ]);

        $post = Post::findOrFail($id);

        // Handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $imagePath = $request->file('image')->store('post_images', 'public');
        } else {
            $imagePath = $post->image;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'meta_tags' => $request->meta_tags,
            'meta_description' => $request->meta_description,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully!');
    }

    // Delete the specified post from the database
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Delete the associated image if it exists
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully!');
    }

    // Fetch subcategories based on category selection (for dynamic subcategory dropdown)
    public function getSubcategoriesByCategory($categoryId)
    {
        $subcategories = Subcategory::where('category_id', $categoryId)->get();
        return response()->json($subcategories);
    }
}
