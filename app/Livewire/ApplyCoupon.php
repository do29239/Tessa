<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ApplyCoupon extends Component
{
        public $couponCode;
        public $discount = 0;

        public function applyCoupon()
        {
            $userId = Auth::id();
            $coupon = $this->getCoupon();

            $cartTotal = $this->getCartTotal($userId);
            $this->discount = $this->calculateDiscount($coupon, $cartTotal);

            $this->dispatch('couponApplied', $this->discount);

        }

    public function getCoupon()
    {
        $coupon = Coupon::where('code', $this->couponCode)
            ->where('expiration_date', '>=', now())
            ->first();
        if(!$coupon){
            $coupon = null;
            return $coupon;
        }
        else{
        return $coupon;
        }
    }
    private function getCartTotal($userId)
    {
        $cartItems = Cart::where('user_id', $userId)->get();
        return $cartItems->sum(function ($cartItem) {
            return $cartItem->price * $cartItem->quantity;
        });
    }

    private function calculateDiscount($coupon, $total)
    {
        if ($coupon->type === 'percentage') {
            $discount = ($total * $coupon->value) / 100;
        } else if ($coupon->type === 'fixed') {
            $discount = $coupon->value;
        } else {
            $discount = 0;
        }
        return min($discount, $total); // Ensure discount does not exceed the order total
    }

    public function render()
    {
        return view('livewire.coupon');
    }
}
