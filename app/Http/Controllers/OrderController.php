<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
//    public function placeOrder(Request $request)
//    {
//
//        // Initialize the total to 0
//        $total = 0;
//
//        // Get the user's ID
//        $userId = auth()->id();
//
//        // Create the order
//        $order = Order::create([
//            'user_id' => $userId,
//            'items_id' => 0,
//            'total' => $total, // Set it to 0 initially
//        ]);
//
//        // Get cart items for the user
//        $cartItems = Cart::where('user_id', $userId)->get();
//
//        foreach ($cartItems as $cartItem) {
//            // Create an item for each cart item
//            $orderItems = Item::create([
//                'product_id' => $cartItem->product_id,
//                'order_id' => $order->id,
//                'quantity' => $cartItem->quantity, // Fix the typo
//                'price' => $cartItem->total,
//            ]);
//
//            // Update the total for this order
//            $total += $cartItem->total;
//        }
//
//        // Update the order's total after processing all cart items
//        $order->update(['total' => $total]);
//        Cart::destroy($cartItems);
////        Mail::to($order->user->email)->send(new OrderPlaced([
////            'byername' => $order->user->name,
////            'buyersurname'=>$order->user->email,
////            'orderid'=>$order->id,
////            'orderdate'=>$order->created_at,
////            'products' => $order->item->product,
////            'address' => $order->user->profile->address
////
////        ]));
//        return redirect()->route('my.orders');
//    }


    public function placeOrder(Request $request)
    {
        // Start a database transaction
        DB::beginTransaction();

        try {
            // Get the user's ID
            $userId = auth()->id();

            // Create the order with initial total of 0
            $order = Order::create([
                'user_id' => $userId,
                'items_id' => 0,
                'total' => 0,
            ]);

            // Get cart items for the user
            $cartItems = Cart::where('user_id', $userId)->get();

            // Create items for each cart item and sum the total
            $total = $cartItems->sum(function ($cartItem) use ($order) {
                Item::create([
                    'product_id' => $cartItem->product_id,
                    'order_id' => $order->id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->price, // Assuming 'price' is the unit price and 'total' is the total for that item
                ]);

                return $cartItem->price * $cartItem->quantity; // Calculate the total for each cart item
            });

            // Update the order's total after processing all cart items
            $order->update(['total' => $total]);

            // Empty the cart
            Cart::where('user_id', $userId)->delete();

            // Commit the transaction
            DB::commit();

            // Redirect to the orders page with a success message
            return redirect()->route('my.orders')->with('success', 'Order placed successfully');
        } catch (Exception $e) {
            // An error occurred; rollback the transaction
            DB::rollBack();

            // Log the error
            \Log::error($e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'Error placing order: ' . $e->getMessage());
        }
    }


    public function placeOrderV2(Request $request)
    {

        $total = 0;

        $userId = auth()->id();

        // Create the order
        $order = Order::query()->make([
            'user_id' => $userId,
            'items_id' => 0,
            'total' => $total, // Set it to 0 initially
        ]);

        // Get cart items for the user
        $cartItems = Cart::where('user_id', $userId)->get();


        $orderItems = collect([]);
        foreach ($cartItems as $cartItem) {
            // Create an item for each cart item
            $orderItems->push(Item::query()->make([
                'product_id' => $cartItem->product_id,
                'order_id' => $order->id,
                'quantity' => $cartItem->quantity, // Fix the typo
                'price' => $cartItem->total,

            ]));

            // Update the total for this order
            $total += $cartItem->total;
        }

        $order->update(['total' => $total]);
        Cart::destroy($cartItems);

        DB::beginTransaction();
        try {
            $order->save();
            $order->item->upsert($orderItems->toArray(), $orderItems->id);
            DB::commit();
        }catch(\Exception$e){
            DB::rollBack();
        }
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
