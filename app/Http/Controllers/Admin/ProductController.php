<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $brands = Brand::all();
      $categories = Category::all();
      $products = Product::all();

        //$products = Product::query()->with(['category','brand']);
        return view('admin.product', compact('brands', 'categories', 'products'));
//        return view('admin.product', 'products');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        // Create a new product with validated input data
        //$product = Product::create($validatedData);
       $product = Product::query()->make($validatedData);

        // Handle photo upload
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->storeAs( 'public/images', $imageName);

            // Create a new image record in the database and associate it with the product
            //$image = new Image(['name'=> $imageName]);
            $image = new Image();
            $image->name = $imageName;

            DB::beginTransaction();
            try {
                $product->save();
                $product->image()->save($image);
                DB::commit();
            }
            catch (\Exception $e){
                DB::rollBack();

                throw $e;
            }


        }

        return redirect()->back()->with('message', 'Product Added Successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.show-product', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.edit-product', compact('product','brands','categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $validatedData = $request->validated();

        // Update the product with validated input data
        $product->update($validatedData);

        // Handle photo upload
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->storeAs('public/images', $imageName);

            // Update the associated image record in the database
            $image = $product->image;
            $image->name = $imageName;
            $image->save();
        }

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
