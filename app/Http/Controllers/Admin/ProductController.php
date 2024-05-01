<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use Intervention\Image\Facades\Image as Images;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $data = $this->productService->listProducts();
        return view('admin.product', $data);
    }

    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        // Middleware updates the 'image' input to be the new webp filename.
        if ($request->has('image')) {
            $imageName = $request->input('image'); // Get the .webp image name updated by middleware

            try {
                $this->productService->storeProduct($validatedData, $imageName); // Pass imageName directly
                return redirect()->back()->with('success', 'Product added successfully!');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error adding product: ' . $e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Image file is required');
        }
    }
    public function update(ProductRequest $request, Product $product)
    {
        $validatedData = $request->validated();
        if ($request->has('image')) {
            $imageName = $request->input('image');
        }
        $this->productService->updateProduct($product, $validatedData, $imageName);

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }

    public function show(Product $product)
    {
        return view('admin.show-product', compact('product'));
    }

    public function edit(Product $product)
    {
        $data = $this->productService->listProducts();
        $data['product'] = $product;
        return view('admin.edit-product', $data);
    }



    public function destroy(Product $product)
    {
        $this->productService->deleteProduct($product);
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
