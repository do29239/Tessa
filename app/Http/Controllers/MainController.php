<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;

class MainController extends Controller
{
    public function showProducts(Request $request)
    {
        //below im using eager-loading(need more info about this)....
        $brands = Brand::with('products')->get();
        $categories = Category::with('products')->get();

        if ($request->route()->getName() === 'shop') {
            $products = Product::latest()->paginate(10);
            return view('main.shop.shop', compact('brands', 'categories', 'products'));
        }
        elseif ($request->route()->getName() === 'show_products')
        $products = Product::latest()->paginate(3);
        return view('main.home.index', compact('brands', 'categories', 'products'));
    }



    public function show(Product $product)
    {
        $relatedProducts = Product::with('image')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();
        return view('main.show-product', compact('product','relatedProducts'));
    }

    public function getProductsByBrand(Brand $brand)
    {
        $products = Product::where('brand_id', '=', $brand->id)->paginate(6);

        $brands=Brand::all();
        $categories=Category::all();

        return view('main.shop.shop', compact('products','categories','brands'));
    }
    public function getProductsByCategory(Category $category)
    {
        $products = Product::where('category_id', '=', $category->id)->paginate(6);

        $brands=Brand::all();
        $categories=Category::all();

        return view('main.shop.shop', compact('products','categories','brands'));
    }

    public function loadProducts()
    {
        return view('livewire/load-products');
    }



}
