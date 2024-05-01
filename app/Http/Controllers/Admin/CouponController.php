<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{

    public function index()
    {
        $coupons=Coupon::all();

        return view('admin.coupon', compact('coupons'));
    }

    public function store(CouponRequest $request)
    {

        $validatedData = $request->validated();

        DB::beginTransaction();

        try {
            Coupon::create($validatedData);

            DB::commit();
            return redirect()->back()->with('message', 'ApplyCoupon Created Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception (e.g., log it, show an error message)
            return redirect()->back()->with('error', 'Error creating coupon');
        }
    }

    public function show(Coupon $coupon)
    {
        return view('admin.show-coupon', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.edit-coupon', compact('coupon'));
    }

    public function update(CouponRequest $request, Coupon $coupon)
    {
        $validatedData = $request->validated();

        DB::beginTransaction();

        try {
            $coupon->update($validatedData);

            DB::commit();
            return redirect()->back()->with('message', 'ApplyCoupon Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            // Handle the exception (e.g., log it, show an error message)
            return redirect()->back()->with('error', 'Error updating coupon');
        }
    }
//    public function applyCoupon(Request $request)
//    {
//        $user = Auth::user();
//        $couponCode = $request->input('coupon_code');
//        $orderId = $request->input('order_id');
//
//        $coupon = ApplyCoupon::where('code', $couponCode)
//            ->where('expiration_date', '>=', now()->toDateString())
//            ->first();
//
//        if (!$coupon) {
//            return response()->json(['message' => 'This coupon is invalid or expired.'], 404);
//        }
//
//        if ($user->coupons->contains($coupon->id)) {
//            return response()->json(['message' => 'This coupon has already been used by you.'], 400);
//        }
//
//        $order = PlaceOrder::where('id', $orderId)->where('user_id', $user->id)->first();
//
//        if (!$order) {
//            return response()->json(['message' => 'PlaceOrder not found.'], 404);
//        }
//
//        // Assuming you have logic to calculate the discount based on the coupon type and value
//        // Update the order with the coupon's discount
//        $order->coupon_id = $coupon->id;
//        $order->save();
//
//        // Record the usage of the coupon for the user
//        $user->coupons()->attach($coupon->id, ['used_at' => now()]);
//
//        return response()->json(['message' => 'ApplyCoupon applied successfully.']);
//    }


}
