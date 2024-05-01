<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all()->filter(function ($order) {
            return $order->status === 0;
        });

        $orderItems = Item::all();
        return view('admin.order', compact('orders', 'orderItems'));
    }

    public function history()
    {
        $orders = Order::all()->where('status', 1);

        $orderItems = Item::all();
        return view('admin.order-history', compact('orders', 'orderItems'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id); // Find the order by ID
        $orderItems = Item::where('order_id', $id)->get(); // Get the items for this order

        return view('admin.show-order', compact('order', 'orderItems'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->status = $request->order_status;
        $order->update();
        return redirect()->back()->with('message','PlaceOrder Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
