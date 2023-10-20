<?php

namespace App\Http\Controllers;

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
        return view('main.cart.checkout');

    }

}
