<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DistributorController;
use App\Http\Controllers\Admin\InvitationCodeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RequestStylistController;
use App\Http\Controllers\Admin\StylistController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Main\CartController;
use App\Http\Controllers\Main\CoursesController;
use App\Http\Controllers\Main\HairColorController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Main\OrderController;
use App\Http\Controllers\Main\SalesController;
use App\Http\Controllers\Main\ShopByBrandController;
use App\Http\Controllers\Main\WishlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\Distributor;
use App\Http\Middleware\DistributorAccess;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
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

// Publicly accessible routes
Route::middleware(DistributorAccess::class)->group(function () {
    Route::get('/', [MainController::class, 'showProducts'])->name('main');
    Route::get('/shop', [MainController::class, 'shop'])->name('shop');
    Route::get('product/show-product/{product}', [MainController::class, 'show'])->name('showProduct');
    Route::view('/about', 'main/about/about')->name('about');
    Route::view('/contact', 'main/contact/contact')->name('contact');
    Route::get('/set-language/{lang}', [\App\Http\Controllers\Main\LanguageController::class, 'set'])->name('set.language');
    Route::get('/hair-color/{brandName}', [HairColorController::class, 'showHairColors'])->name('hair.colors');
    Route::get('/sale', [SalesController::class, 'index'])->name('sales');
    Route::get('/shop/{brandName}', [ShopByBrandController::class, 'shopByBrand'])->name('shop.brand');
    Route::get('/shop/search/{searchTerm}', [ShopByBrandController::class, 'shopSearch'])->name('shop.search');

    Route::get('course/show-course/{course}', [CoursesController::class, 'show'])->name('showCourse');
    Route::get('/course', [CoursesController::class, 'index'])->name('courses');
    Route::view('/about', 'main/about/about');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    Route::view('/treatments','main/treatments')->name('treatments');
    Route::post('/save-shop-state', [MainController::class, 'saveState']);
});


// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::middleware(\App\Http\Middleware\Admin::class)->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('adminDashboard');
        Route::resource('products', ProductController::class)->except('create')->middleware('convertToWebp');
        Route::resource('courses', CourseController::class)->except('create')->middleware('convertToWebp');
        Route::delete('courses/{course}/images/{image}', [CourseController::class, 'destroyImage'])->name('image.destroy');
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class)->except('show');
        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
        Route::get('order-history', [\App\Http\Controllers\Admin\OrderController::class, 'history'])->name('history');
        Route::resource('requests', RequestStylistController::class)->except(['create','store']);
        Route::get('/users', [UserController::class, 'index'])->name('show_users');
        Route::get('/user/{user}', [UserController::class, 'show'])->name('show_user');
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('/stylists', [StylistController::class, 'index'])->name('show_stylists');
        Route::get('/stylist/{stylist}', [StylistController::class, 'show'])->name('show_stylist');
        Route::delete('stylists/{stylist}', [StylistController::class, 'destroy'])->name('stylist.destroy');
        Route::get('/sales/create/{product}', [\App\Http\Controllers\Admin\SalesController::class, 'create'])->name('sales.create');
        Route::resource('/sales', \App\Http\Controllers\Admin\SalesController::class)->except('create');
        Route::resource('coupons', CouponController::class)->except('create');
        Route::post('/coupons/store', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/user/{user}/orders', [\App\Http\Controllers\Admin\OrderController::class, 'userOrders'])->name('user.orders');



        Route::get('/bulk-sale', [\App\Http\Controllers\Admin\BulkSaleController::class, 'createBulkSale'])->name('admin.bulkSale.create');

        Route::post('/bulk-sale/store', [\App\Http\Controllers\Admin\BulkSaleController::class, 'storeBulkSale'])->name('admin.bulkSale.store');

        Route::get('/bulk-sale/show-products', [\App\Http\Controllers\Admin\BulkSaleController::class, 'showProductsForBulkSale'])->name('admin.bulkSale.showProducts');
        Route::get('/search', [\App\Http\Controllers\Admin\SearchController::class, 'search'])->name('search');
        Route::resource('codes',InvitationCodeController::class)->except('create','edit','update');
        Route::resource('distributors',DistributorController::class)->except('create');
    });

    Route::middleware(DistributorAccess::class)->group(function () {
        Route::resource('requests', RequestStylistController::class)->only('store');
        Route::view('/request_form', 'main/request_stylist/request_form')->middleware('stylist');


        // Routes for authenticated users only
        Route::get('/cart', [CartController::class, 'showCart'])->name('Cart');
        Route::get('/checkout', [CartController::class, 'Checkout'])->name('Checkout');
        Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('my.orders');
        Route::get('/order-details/{order_id}', [OrderController::class, 'orderDetails'])->name('order.details');
        Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('show.wishlist');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::middleware(Distributor::class)->group(function () {
        Route::get('/generate-stylist-code/{distributorId}', [RequestStylistController::class, 'createCode'])->name('generate.stylist.code');
        Route::view('/generateCode', 'Distributor/index')->name('distributor.code');
    });


});


require __DIR__.'/auth.php';;

