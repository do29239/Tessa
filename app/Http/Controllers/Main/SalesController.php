<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Admin\Controller; // Correct the namespace

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
        // Get current sales with product information


        return view('main.sales.index', ['sales'=>$this->productService->getProductsOnSale()]);
    }
}
