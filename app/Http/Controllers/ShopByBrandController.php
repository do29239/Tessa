<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class ShopByBrandController extends Controller
{
    public function shopByBrand($brandName)
    {
        $brand = Brand::where('name', $brandName)->first();

        // Check if the brand was found to avoid null reference errors.
        if ($brand) {
            // Store the brand's ID in the session.
            session(['brandId' => $brand->id]);

            // Redirect to the shop page (adjust the URL as needed).
            return redirect('/shop');
        } else {
            // Optional: Handle the case where no brand was found.
            // You could redirect to the shop page with a session message indicating the brand was not found,
            // or redirect back with an error message.
            return redirect('/shop')->with('error', 'Brand not found.');
        }
    }
}
