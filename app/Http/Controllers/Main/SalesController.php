<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller; // Correct the namespace

use App\Models\Sale;
use App\Services\ProductService;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $productsOnSale = $this->productService->getProductsOnSale();
        return view('main.sales.index', ['products' => $productsOnSale]);
    }
}
