<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        // Get current sales with product information
        $sales = Sale::with('product')
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->get();

        return view('main.sales.index', compact('sales'));
    }
}
