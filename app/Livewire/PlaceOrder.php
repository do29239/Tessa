<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class PlaceOrder extends Component
{
    protected $listeners = ['couponApplied'];

    public $discount = 0;
    protected $total = 0;
    public function render()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $finalTotal = $this->total - $this->discount;

        return view('livewire.place-order', [
            'cartItems' => $cartItems,
            'finalTotal' => $finalTotal,
            'couponDiscount' => $this->discount,
        ]);
    }

    public function placeOrder()
    {
        DB::beginTransaction();

        try {
            $userId = Auth::id();
            $order = PlaceOrder::create([
                'user_id' => $userId,
                'total' => 0,
            ]);

            $cartItems = Cart::where('user_id', $userId)->get();


            foreach ($cartItems as $cartItem) {
                Item::create([
                    'product_id' => $cartItem->product_id,
                    'order_id' => $order->id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->price,
                ]);
                    $this->total += $cartItem->price * $cartItem->quantity;
            }
            if($this->discount == 0){
                $order->update(['total' => $this->total]);
            }
            else{
               $newTotal = $this->total - $this->discount;
                $order->update(['total' => $newTotal]);
            }


            Cart::where('user_id', $userId)->delete();
            DB::commit();

            session()->flash('success', 'PlaceOrder placed successfully');
            return redirect()->route('my.orders');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            session()->flash('error', 'Error placing order: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function couponApplied($discount)
    {
     $this->discount = $discount;

    }
}
