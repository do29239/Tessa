<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main/home/index');
});
Route::get('/',[MainController::class, 'showProducts'])->name('main');
Route::get('/', [MainController::class, 'showProducts'])->name('show_products');
Route::get('/shop', [MainController::class, 'showProducts'])->name('shop');
Route::get('product/show-product/{product}', [MainController::class, 'show'])->name('showProduct');

Route::middleware('auth')->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        });
        Route::resource('products', ProductController::class)->except('create');
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class)->except('show');
        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
        Route::get('order-history', [\App\Http\Controllers\Admin\OrderController::class, 'history'])->name('history');
    });
    // The following routes are accessible to authenticated users only
    Route::get('/cart', [CartController::class, 'showCart'])->name('Cart');
    Route::get('/checkout', [CartController::class, 'Checkout'])->name('Checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
    Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('my.orders');
    Route::get('/order-details/{order_id}', [OrderController::class, 'orderDetails'])->name('order.details');
    Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('show.wishlist');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');






require __DIR__.'/auth.php';
