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
        if ($request->route()->getName() === 'shop') {
            return view('main.shop.shop');
        } elseif ($request->route()->getName() === 'show_products') {
            $products = Product::latest()->paginate(3);
            return view('main.home.index', compact('products'));
        }
    }





    public function show(Product $product)
    {
//        $product$relatedProducts = Product::with('image')
//            ->where('category_id', $product->category_id)
//            ->where('id', '!=', $product->id)
//            ->get();
        $relatedProducts = Product::query()
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->with('image')
            ->get();

        return view('main.show-product', compact('product','relatedProducts'));
    }

}
