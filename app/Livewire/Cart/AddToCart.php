<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $quantityCount = 1;
    public $productId;
    protected $listeners = ['cartCheck'=>'checkCartCount'];



    public function addToCart()
    {
        if (!Auth::check()) {
            // Redirect to the login page
            return redirect()->route('login');
        }

        $cartItem = Cart::firstOrNew([
            'user_id' => auth()->id(),
            'product_id' => $this->productId,
            'completed' => false,
        ]);

        $cartItem->quantity += $this->quantityCount;

        // Calculate the total based on user role
        $cartItem->total = $this->calculateTotal($cartItem);

        $cartItem->save();
        $this->checkCartCount();
        $this->reset('quantityCount'); // Reset the quantity input
    }

    private function calculateTotal($cartItem)
    {
        $productPrice = $cartItem->product->price;
        if (auth()->user()->role == 2) { // Assuming role 2 is for stylists
            $productPrice = $cartItem->product->stylist_price;
        }
        return $cartItem->quantity * $productPrice;
    }

    public function mount($product_id)
    {
        $this->productId = $product_id;
    }

    public function checkCartCount()
    {
        $this->dispatch('cart_updated'); // in CartCounter
        $this->dispatch('load_cart'); //in ShowCart
    }
    public function decrementQuantity()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function incrementQuantity()
    {
        $this->quantityCount++;
    }

    public function render()
    {

        return view('livewire.cart.add-to-cart');
    }
}
