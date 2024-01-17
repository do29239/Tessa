<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $productId;
    protected $listeners = ['cartCheck'=>'checkCartCount'];

    public function mount($product_id)
    {
        $this->productId = $product_id;
    }

    public function addToCart($quantity)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect if not authenticated
        }

        // Retrieve or create the cart item
        $cartItem = Cart::firstOrNew([
            'user_id' => auth()->id(),
            'product_id' => $this->productId,
        ]);

        // Update the quantity with the passed value
        $cartItem->quantity += $quantity;
        $cartItem->price = $this->checkPrice($cartItem);

        $cartItem->save(); // Save the changes to the database
        $this->checkCartCount(); // Update the cart count
    }

    private function checkPrice($cartItem)
    {

        if (auth()->user()->role == 2) { // Assuming role 2 is for stylists
            $productPrice = $cartItem->product->stylist_price;
        }
        else{
            $productPrice = $cartItem->product->price;
        }
        return  $productPrice;
    }


    public function checkCartCount()
    {
        $this->dispatch('cart_updated'); // in CartCounter
        $this->dispatch('load_cart'); //in ShowCart
    }


    public function render()
    {

        return view('livewire.cart.add-to-cart');
    }
}
