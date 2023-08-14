<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MyAccountController;

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



// route show page home
Route::get('/', [HomeController::class, 'index'])->name("home.index");

// route show page about
Route::get('/about', [HomeController::class, 'about'])->name("home.about");

//route show all products 
Route::get('/products', [ProductController::class, 'index'])->name("product.index");

// route show single product specific id 
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");

//route show all products in cart
Route::get('/cart', [CartController::class, 'index'])->name("cart.index");

// route to delete product in cart
Route::get('/cart/delete', [CartController::class, 'delete'])->name("cart.delete");

// route to add product to cart
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name("cart.add");

// ======================================================
Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', [CartController::class, 'purchase'])->name("cart.purchase");
    Route::get('/my-account/orders', [MyAccountController::class, 'orders'])->name("myaccount.orders");
});
// =======================================================

// protected to access to all admin routes or page
Route::middleware('admin')->group(function () {
    
// route show admin page
Route::get('/admin', [AdminHomeController::class, 'index'])->name("admin.home.index");

// route show admin/products page
Route::get('/admin/products', [AdminProductController::class, 'index'])->name("admin.product.index");

// route create a new product 
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name("admin.product.store");

// route to delete a product in database
Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name("admin.product.delete");

// route to show update page by id product
Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name("admin.product.edit");

// route to update a product in database
Route::put('/admin/products/{id}/update', [AdminProductController::class, 'update'])->name("admin.product.update");

});

Route::get('/cart/check',[HomeController::class, 'check'])->name('cart.check');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
