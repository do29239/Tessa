<?php

namespace App\Livewire\Cart;

use Livewire\Component;
use App\Models\Cart;

class ShowCart extends Component
{
    public $view;
    public $Subtotal = 0;
    public $cartItems;
    protected $listeners = ['load_cart' => 'loadCart'];

    public function loadCart()
    {
        $this->cartItems = Cart::where('user_id', auth()->id())->get();
        $this->updateCart();
        $this->calculateTotal();


    }

    public function updateCart()
    {
        $this->dispatch('cart_updated', $this->cartItems->count());
    }
    public function calculateTotal()
    {
        $this->Subtotal = 0;
        foreach ($this->cartItems as $cartItem) {
            $cartItem->total = $cartItem->product->price * $cartItem->quantity;
            $cartItem->save();
            $this->Subtotal += $cartItem->total;
        }

    }
    public function deleteItem($cartItemId)
    {

        $cartItem = Cart::find($cartItemId)->delete();



    }

    public function incrementQuantity($cartItemId)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->save();
        }
    }

    public function decrementQuantity($cartItemId)
    {
        $cartItem = Cart::find($cartItemId);
        if ($cartItem && $cartItem->quantity > 1) {
            $cartItem->quantity--;
            $cartItem->save();
        }
    }



    public function render()
    {
        $this->loadCart();
        if($this->view == 'show-cart-modal')
        {
            return view('livewire/cart/show-cart-modal');
        }
        elseif ($this->view == 'show-cart')
        {
            return view('livewire/cart/show-cart');
        }
    }
}
