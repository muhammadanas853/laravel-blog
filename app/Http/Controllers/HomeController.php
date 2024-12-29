<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        $categories = Category::with(['posts' => function ($query) {
            $query->latest()->take(3);
        }])->get();
        $latestone = Category::with(['posts' => function ($query) {
            $query->latest()->take(1);
        }])->get();
        return view('index', compact('categories','latestone'));
    }
}
