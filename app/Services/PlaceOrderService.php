<?php

namespace App\Services;

use App\Jobs\SendAdminOrderNotification;
use App\Jobs\SendOrderConfirmationEmail;
use App\Mail\OrderConfirmation;
use App\Models\Order;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PlaceOrderService
{
    public function placeOrder($user, $cartItems, $finalTotal, $couponId)
    {
        $cartService=new CartService();
        if (empty($cartItems)) {
            throw new \Exception('Your cart is empty.');
        }

        if ($finalTotal <= 0) {
            throw new \Exception('The order total cannot be zero. Please review your cart and discounts.');
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id' => $user->id,
                'total' => $finalTotal,
                'coupon_id' => $couponId,
            ]);

            $itemsData = [];
            foreach ($cartItems as $item) {
                $itemsData[] = [
                    'product_id' => $item->product_id,
                    'order_id' => $order->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            if ($couponId) {
                $user->coupons()->attach($couponId, ['used_at' => now()]);
            }

            Item::insert($itemsData);  // Perform a bulk insert

            $cartService->deleteCart($user);
            DB::commit();
//            Mail::to($user->email)->send(new OrderConfirmation($order->id, $order->total));
//            SendOrderConfirmationEmail::dispatch($order->id, $finalTotal, $user->email, $user->address);
            SendAdminOrderNotification::dispatch($order)->delay(now()->addSeconds(60));;
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Order Placement Error: {$e->getMessage()}", ['userId' => $user->id]);
            throw $e;
        }
    }
}

