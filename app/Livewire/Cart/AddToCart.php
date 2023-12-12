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
        $cartItem->save();
        $this->checkCartCount();


        $this->reset('quantityCount'); // Reset the quantity input

    }
    public function mount($product_id)
    {
        $this->productId = $product_id;
    }

    public function checkCartCount()
    {
        $cartCount = Cart::where('user_id', auth()->id())
            ->where('completed', false)
            ->count();
        $this->dispatch('cart_updated', $cartCount); // in CartCounter
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
