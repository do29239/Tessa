<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // Retrieve validated data from the request
        $validatedData = $request->validated();

        // Create a new category with the validated data
        $category = Category::create($validatedData);


        return redirect()->route('admin.category')->with('success', 'Category created successfully');
    }

    // Method to update an existing category
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // Retrieve validated data from the request
        $validatedData = $request->validated();

        // Update the category with the validated data
        $category->update($validatedData);

        // Optionally, you can redirect the user to a success page or return a JSON response
        // For example:
        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
