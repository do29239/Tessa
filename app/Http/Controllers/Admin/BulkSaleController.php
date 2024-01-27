<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BulkSaleController extends Controller
{
    public function createBulkSale()
    {
        $brands = Brand::all(); // Assuming you have a Brand model
        return view('admin.bulk-sale', compact('brands'));
    }

    public function storeBulkSale(Request $request)
    {
        $products = Product::whereHas('category', function ($query) {
            $query->where('name', 'Elise Robel');
        })
            ->whereHas('brand', function ($query) use ($request) {
                $query->where('id', $request->brand_id);
            })
            ->get();

        $salesData = $products->map(function ($product) use ($request) {
            return [
                'product_id' => $product->id,
                'sale_price' => $request->sale_price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ];
        })->toArray();

        DB::beginTransaction();
        try {
            Sale::upsert($salesData, ['product_id'], ['sale_price', 'start_date', 'end_date', 'updated_at']);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception (log it, notify user, etc.)
            return back()->withError('An error occurred: ' . $e->getMessage());
        }

        return redirect()->route('sales.index')->with('success', 'Hair Color products successfully added to sale.');
    }


    public function showProductsForBulkSale(Request $request)
    {
        $brands = Brand::all();
        $selectedBrand = $request->brand;
        $products = Product::where('category', 'Hair Color')
            ->where('brand', $selectedBrand)
            ->get();

        return view('admin.bulk-sale', compact('brands', 'products', 'selectedBrand'));
    }
}
