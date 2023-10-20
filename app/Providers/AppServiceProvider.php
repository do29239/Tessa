<?php

namespace App\Providers;

use App\Livewire\Cart\AddToCart;
use App\Livewire\Product\LoadProducts;
use App\Livewire\Product\ProductFilter;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot()
    {

        Livewire::component('product-filter', ProductFilter::class);
        Livewire::component('load-products', LoadProducts::class);
        Livewire::component('add-to-cart', AddToCart::class);

    }
}
