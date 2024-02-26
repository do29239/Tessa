<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClearCouponSession
{
    public function handle(Request $request, Closure $next)
    {
// Example of a more flexible check
        if (!$request->is('checkout', 'checkout/*', 'apply-coupon')) {
            session()->forget(['applied_coupon_code', 'applied_coupon_discount']);
        }


        return $next($request);
    }
}


