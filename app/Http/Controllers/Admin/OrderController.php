<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        $orders = $this->orderService->getAllOrdersByStatus(0);
        $orderItems = $this->orderService->getOrderItems();
        return view('admin.order', compact('orders', 'orderItems'));
    }

    public function history()
    {
        $orders = $this->orderService->getAllOrdersByStatus(1);
        $orderItems = $this->orderService->getOrderItems();
        return view('admin.order-history', compact('orders', 'orderItems'));
    }
    public function show(string $id)
    {
        $result = $this->orderService->getOrderById($id);
        $order = $result['order'];
        return view('admin.show-order', compact('order'));
    }


    public function update(Request $request, string $id)
    {
        $this->orderService->updateOrderStatus($id, $request->order_status);
        return redirect()->back()->with('message', 'Order updated successfully');
    }
}

