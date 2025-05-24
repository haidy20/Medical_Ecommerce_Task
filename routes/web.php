<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminOrderController;


use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\OrderController;







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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin side
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Group routes that require authentication and prefix all URLs with 'admin'
    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        // Resource routes for managing products (index, create, store, edit, update, destroy)
        Route::resource('products', ProductController::class);

        // Resource routes for managing categories
        Route::resource('categories', CategoryController::class);

        // Route to list all orders in the admin panel
        Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    });
});

// Customer Home page
Route::get('/', [HomeController::class, 'index'])->name('customer.home');
// Show all categories
Route::get('/categories', [HomeController::class, 'categories'])->name('customer.categories');
// Show products per category
Route::get('/categories/{category}', [HomeController::class, 'productsByCategory'])->name('customer.products.byCategory');

// Show cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Add item to cart
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
// Update quantity
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
// Remove item
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');



Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');


// Handle form submission for the checkout process
Route::post('/checkout/submit', [CheckoutController::class, 'submit'])->name('checkout.submit');

// Display a generic thank you page after successful checkout
Route::get('/thankyou', function () {
    return view('customer.thankyou');
})->name('thankyou');

// Show detailed order summary page for a specific order
Route::get('/order-summary/{order}', [OrderController::class, 'show'])->name('order.summary');

// Display a thank you page with order-specific details
Route::get('/thankyou/{order}', [CheckoutController::class, 'thankyou'])->name('thankyou');



require __DIR__ . '/auth.php';
