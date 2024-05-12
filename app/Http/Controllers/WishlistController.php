<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function showWishlist()
    {
        $wishlistedProducts = auth()->user()->products()->get(); // Assuming 'wishlistedProducts' returns the products in the wishlist

        return view('main.wishlist.show-wishlist', compact('wishlistedProducts'));
    }

}
