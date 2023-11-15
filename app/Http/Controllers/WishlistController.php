<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function showWishlist()
    {
        $items = Wishlist::all()->where('user_id', auth()->id());
        return view('main.wishlist.show-wishlist', compact('items'));
    }

}
