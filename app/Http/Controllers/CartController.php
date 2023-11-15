<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        return view('main.cart.cart');
    }

    public function Checkout()
    {
        $cartItems = Cart::all()->where('user_id', auth()->id());
        return view('main.cart.checkout', compact('cartItems'));

    }

}
