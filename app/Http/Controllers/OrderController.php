<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {

        // Initialize the total to 0
        $total = 0;

        // Get the user's ID
        $userId = auth()->id();

        // Create the order
        $order = Order::create([
            'user_id' => $userId,
            'items_id'=>0,
            'total' => $total, // Set it to 0 initially
        ]);

        // Get cart items for the user
        $cartItems = Cart::where('user_id', $userId)->get();

        foreach ($cartItems as $cartItem) {
            // Create an item for each cart item
            $orderItems= Item::create([
                'product_id' => $cartItem->product_id,
                'order_id' => $order->id,
                'quantity' => $cartItem->quantity, // Fix the typo
                'price' => $cartItem->total,
            ]);

            // Update the total for this order
            $total += $cartItem->total;
        }

        // Update the order's total after processing all cart items
        $order->update(['total' => $total]);
        Cart::destroy($cartItems);
//        Mail::to($order->user->email)->send(new OrderPlaced([
//            'byername' => $order->user->name,
//            'buyersurname'=>$order->user->email,
//            'orderid'=>$order->id,
//            'orderdate'=>$order->created_at,
//            'products' => $order->item->product,
//            'address' => $order->user->profile->address
//
//        ]));
        return redirect()->route('my.orders');
    }

    public function orderDetails($order_id)
    {
        $order = Order::find($order_id);

        return view('main.order.order-details', ['order' => $order]);
    }

    public function myOrders()
    {
        $orders = Order::where('user_id', auth()->id())->get();

        return view('main.order.my-orders', compact('orders'));
    }

}
