<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        
        return view('categories.index', compact("categories"));
    }

    public function create()
    {
        return view('categories.form');
    }
    
    public function store(Request $request)
    {
        dd($request);
    }

    public function destroy(Category $category, Request $request)
    {
        
    }
}
