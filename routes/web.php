<?php

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
    return view('client.index');
})->name('index');

Route::get('/login',function(){
    return view('client.layouts.partials.login');
})->name('login');

Route::get('/shop',function(){
    return view('client.layouts.partials.shop');
})->name('shop');

Route::get('/my-account',function(){
    return view('client.layouts.partials.my-account');
})->name('my-account');

Route::get('/checkout',function(){
    return view('client.layouts.partials.checkout');
})->name('checkout');

Route::get('/404',function(){
    return view('client.layouts.partials.404');
})->name('404');

Route::get('/wishlist',function(){
    return view('client.layouts.partials.wishlist');
})->name('wishlist');

Route::get('/compare',function(){
    return view('client.layouts.partials.compare');
})->name('compare');

Route::get('/cart',function(){
    return view('client.layouts.partials.cart');
})->name('cart');

Route::get('/register',function(){
    return view('client.layouts.partials.register');
})->name('register');

Route::get('/about',function(){
    return view('client.layouts.partials.about');
})->name('about');

Route::get('/contact',function(){
    return view('client.layouts.partials.contact');
})->name('contact');

Route::get('/blog-detail',function(){
    return view('client.layouts.partials.blog-detail');
})->name('blog-detail');

Route::get('/blog',function(){
    return view('client.layouts.partials.blog');
})->name('blog');

Route::get('/product-detail-affiliate',function(){
    return view('client.layouts.partials.product-detail-affiliate');
})->name('product-detail-affiliate');

Route::get('/product-detail',function(){
    return view('client.layouts.partials.product-detail');
})->name('product-detail');

Route::get('/shop-list',function(){
    return view('client.layouts.partials.shop-list');
})->name('shop-list');

Route::get('/forgot-password',function(){
    return view('client.layouts.partials.forgot-password');
})->name('forgot-password');
