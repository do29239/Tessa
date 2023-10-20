<?php

namespace App\Livewire\Cart;

use Livewire\Component;


class CartCounter extends Component
{
    public $cartCount = 0;

    protected $listeners = ['cart_updated' => 'updateCartCount'];

    public function updateCartCount($cartCount)
    {
        $this->cartCount = $cartCount;

    }

    public function render()
    {
        return view('livewire.cart.cart-counter');
    }
}

