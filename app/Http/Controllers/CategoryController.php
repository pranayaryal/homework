<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{


    /**
     * Shows all categories
     * 
     * @return mixed
     */
    public function index()
    {
        return $this->showCategories();
    }


    /**
     * Show the form to create a category
     * @return mixed
     */
    public function create()
    {
        return view('categories.create');
    }


    /**
     * Store the newly created category
     * 
     * @param Request $request
     * 
     * @return mixed
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->create($request->all());

        return $this->showCategories();
    }


    /**
     * Edit a given category
     * 
     * @param Category $category
     * 
     * @return mixed
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }


    /**
     * Update a given category
     * 
     * @param Category $category
     * 
     * @param Request $request
     * 
     * @return mixed
     */
    public function update(Category $category, Request $request)
    {
        $category->update($request->all());

        return $this->showCategories();
    }


    /**
     * Delete a given category
     * 
     * @param Category $category
     * 
     * @param Request $request
     * 
     * @return mixed
     *
     */
    public function destroy(Category $category, Request $request)
    {
        $category->delete();

        return $this->showCategories();
    }

    /**
     * Show all the categories
     * 
     * @return mixed
     */
    protected function showCategories()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
}
