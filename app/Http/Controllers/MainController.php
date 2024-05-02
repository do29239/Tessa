<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Models\Brand;

class MainController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function showProducts(Request $request)
    {
            $products = Product::latest()->paginate(3);
            return view('main.home.index',
                ['products'=>$this->productService->latestProducts()]
            );
    }

    public function shop()
    {
        return view('main.shop.shop');
    }





    public function show(Product $product)
    {
        return view('main.show-product', compact('product'));
    }

}
