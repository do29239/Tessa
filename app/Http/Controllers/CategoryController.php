<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category')->with('categories', $categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }



    // Method to update an existing category
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validatedData = $request->validated();

        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.edit-category', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
