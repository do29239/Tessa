<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Services\BrandService;
use Illuminate\Http\Request;

class ShopByBrandController extends Controller
{
    protected $brandService;
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }
    public function shopByBrand($brandName)
    {
            session(['brandId' => $this->brandService->getBrandByName($brandName)]);

            return redirect('/shop');
    }
}
