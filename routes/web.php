<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Main\CoursesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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

Route::middleware('auth')->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        });
        Route::resource('products', ProductController::class)->except('create');
        Route::resource('courses', CourseController::class)->except('create');
        Route::delete('courses/{course}/images/{image}', [CourseController::class, 'destroyImage'])->name('image.destroy');
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class)->except('show');
    });
    Route::get('/', [MainController::class, 'showProducts'])->name('show_products');
    Route::get('/shop', [MainController::class, 'showProducts'])->name('shop');
    Route::get('product/show-product/{product}', [MainController::class, 'show'])->name('showProduct');
    Route::get('course/show-course/{course}', [CoursesController::class, 'show'])->name('showCourse');
    Route::get('/course', [CoursesController::class, 'index'])->name('courses');



});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



require __DIR__.'/auth.php';


