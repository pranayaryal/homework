<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{

    public function index()
    {
        return $this->showCategories();
    }

    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $category = new Category();
        $category->create($request->all());

        return $this->showCategories();
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $category->update($request->all());

        return $this->showCategories();
    }

    public function destroy(Category $category, Request $request)
    {
        $category->delete();

        return $this->showCategories();
    }

    /**
     * @return mixed
     */
    protected function showCategories()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
}
