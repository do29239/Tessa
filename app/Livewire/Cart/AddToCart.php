<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddToCart extends Component
{
    public $productId;
    protected $listeners = ['cartCheck'=>'checkCartCount','addToCart' => 'addToCart'] ;

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
        $sale = $cartItem->product->sale;
//        dd($sale);
        // If the user is a stylist, assign stylist price unless the product is on sale
        if (auth()->user()->role == 2) {
            return $cartItem->product->stylist_price;
        }

        // If there's an active sale and the user is not a stylist, use the sale price
        if ($sale && auth()->user()->role == 0) {
            return $cartItem->product->sale->sale_price;

        }

        // If none of the above, use the regular price
        return $cartItem->product->price;
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
