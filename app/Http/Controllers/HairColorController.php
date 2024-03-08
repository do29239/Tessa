<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HairColorController extends Controller
{
    public function showHairColors($brandName)
    {
        // Assuming 'category' and 'brand' are direct columns in your `products` table.
        $products = Product::whereHas('category', function ($query) {
            $query->where('name', 'Color');
        })->whereHas('brand', function ($query) use ($brandName) {
            $query->where('name', $brandName);
        })->get();

        return view('main.hair-color.index', compact('products'));
    }
}
