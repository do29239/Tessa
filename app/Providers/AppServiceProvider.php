<?php

namespace App\Providers;

use App\Livewire\ProductFilter;
use App\Livewire\LoadProducts;
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
    }
}
