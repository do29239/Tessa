<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Item;

class OrderService
{
    public function getAllOrdersByStatus($status)
    {
        return Order::where('status', $status)->get();
    }

    public function getOrderItems()
    {
        return Item::all();
    }

    public function getOrderById($id)
    {
        $order = Order::with('user','item')->findOrFail($id);  // This ensures you get the order with the user loaded
        //$items = Item::where('order_id', $id)->get();
        return ['order' => $order];
    }

    public function getOrderByUserId($id)
    {
        return Order::where('user_id',$id)->get();
    }

    public function updateOrderStatus($id, $status)
    {
        $order = Order::find($id);
        $order->status = $status;
        $order->save();
    }
}

