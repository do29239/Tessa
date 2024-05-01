<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class PlaceOrder extends Component
{
    public $discount = 0;
    public $cartItems = [];
    public $finalTotal = 0;
    public $couponId = null;

    protected $listeners = ['couponApplied'];

    public function mount()
    {
        $this->cartItems = $this->fetchCartItems();
        $this->finalTotal = $this->calculateTotal();
    }

    public function render()
    {
        return view('livewire.place-order', [
            'finalTotal' => $this->finalTotal,
        ]);
    }

    private function fetchCartItems()
    {
        return Cart::where('user_id', Auth::id())->get();
    }

    private function calculateTotal()
    {
        $total = $this->cartItems->sum(function ($cartItem) {
            return $cartItem->price * $cartItem->quantity;
        });

        return max(0, $total - $this->discount);
    }

    public function placeOrder()
    {
        if (empty($this->cartItems)) {
            session()->flash('error', 'Your cart is empty.');
            return redirect()->back();
        }

        // Check if final total is zero or less (could happen with discounts)
        if ($this->finalTotal <= 0) {
            session()->flash('error', 'The order total cannot be zero. Please review your cart and discounts.');
            return redirect()->back();
        }
        DB::beginTransaction();

        try {
            $user = Auth::user();
            $order = Order::create([
                'user_id' => $user->id,
                'total' => $this->finalTotal,
                'coupon_id' => $this->couponId,
            ]);

            $itemsData = [];
            foreach ($this->cartItems as $cartItem) {
                $itemsData[] = [
                    'product_id' => $cartItem->product_id,
                    'order_id' => $order->id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->price,
                    'created_at' => now(), // Ensure you're setting timestamps if your table uses them
                    'updated_at' => now(),
                ];
            }
            if ($this->couponId) {
                // Directly attach the coupon to the user using the existing relationship
                $user->coupons()->attach($this->couponId, ['used_at' => now()]);
            }
            // Perform a bulk insert
            Item::insert($itemsData);


            Cart::where('user_id', $user->id)->delete();
            DB::commit();

            session()->flash('success', 'Order placed successfully.');
            return redirect()->route('my.orders');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Order Placement Error: {$e->getMessage()}", ['userId' => $user->id]);
            session()->flash('error', 'Error placing order.');
            return redirect()->back();
        }
    }

    public function couponApplied($discount, $couponId)
    {
        $this->discount = $discount;
        $this->couponId = $couponId;
        $this->finalTotal = $this->calculateTotal();
    }
}
