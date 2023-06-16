<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.brand')->with('brands', Brand::all());
    }

    public function store(BrandRequest $request)
    {
        Brand::create($request->validated());
        return redirect()->route('brands.index')->with('success', 'Brand created successfully');
    }



    // Method to update an existing category
    public function update(BrandRequest $request, Brand $brand)
    {
        $validatedData = $request->validated();

        $brand->update($validatedData);

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.edit-brand', compact('brand'));
    }
    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully');
    }
}
