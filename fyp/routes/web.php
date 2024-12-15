<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Static Pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Portfolio and Blog Routes
Route::get('/portfolio', function () {
    return view('portfolio.grid');
})->name('portfolio.grid');

Route::get('/portfolio/{id}', function ($id) {
    return view('portfolio.details', ['id' => $id]);
})->name('portfolio.details');

Route::get('/blog', function () {
    return view('blog.grid');
})->name('blog.grid');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.details', ['slug' => $slug]);
})->name('blog.details');

// Shop Routes
Route::get('/shop', function () {
    return view('shop.grid');
})->name('shop.grid');

Route::get('/product/{id}', function ($id) {
    return view('shop.product-details', ['id' => $id]);
})->name('product.details');

Route::get('/cart', function () {
    return view('shop.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('shop.checkout');
})->name('checkout');

// Newsletter Subscription
Route::post('/subscribe', function (Request $request) {
    // Add logic here to handle newsletter subscriptions
    return redirect()->back()->with('success', 'Thank you for subscribing!');
})->name('subscribe');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fallback Route for 404
Route::fallback(function () {
    return view('errors.404');
});

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');


require __DIR__.'/auth.php';
