<?php

use Illuminate\Support\Facades\Route;

// Home page (index.html)
Route::get('/', function () {
    return view('templates.index');
})->name('home');

// Blog pages
Route::get('/blog', function () {
    return view('templates.blog');
})->name('blog');

Route::get('/blog-2cols', function () {
    return view('templates.blog-2cols');
})->name('blog.2cols');

Route::get('/blog-3cols', function () {
    return view('templates.blog-3cols');
})->name('blog.3cols');

Route::get('/blog-4cols', function () {
    return view('templates.blog-4cols');
})->name('blog.4cols');

Route::get('/blog-classic', function () {
    return view('templates.blog-classic');
})->name('blog.classic');

Route::get('/blog-author', function () {
    return view('templates.blog-author');
})->name('blog.author');

Route::get('/blog-category', function () {
    return view('templates.blog-category');
})->name('blog.category');

Route::get('/blog-details', function () {
    return view('templates.blog-details');
})->name('blog.details');

Route::get('/blog-details-2', function () {
    return view('templates.blog-details-2');
})->name('blog.details.2');

Route::get('/blog-details-3', function () {
    return view('templates.blog-details-3');
})->name('blog.details.3');

// Shop pages
Route::get('/shop', function () {
    return view('templates.shop');
})->name('shop');

Route::get('/shop-2', function () {
    return view('templates.shop-2');
})->name('shop.2');

Route::get('/shop-3', function () {
    return view('templates.shop-3');
})->name('shop.3');

Route::get('/shop-sidebar', function () {
    return view('templates.shop-sidebar');
})->name('shop.sidebar');

Route::get('/shop-category', function () {
    return view('templates.shop-category');
})->name('shop.category');

Route::get('/shop-product-detail', function () {
    return view('templates.shop-product-detail');
})->name('shop.product.detail');

Route::get('/shop-product-detail-2', function () {
    return view('templates.shop-product-detail-2');
})->name('shop.product.detail.2');

Route::get('/shop-cart', function () {
    return view('templates.shop-cart');
})->name('shop.cart');

Route::get('/shop-cart-2', function () {
    return view('templates.shop-cart-2');
})->name('shop.cart.2');

Route::get('/shop-checkout', function () {
    return view('templates.shop-checkout');
})->name('shop.checkout');

Route::get('/shop-checkout-2', function () {
    return view('templates.shop-checkout-2');
})->name('shop.checkout.2');

Route::get('/shop-order', function () {
    return view('templates.shop-order');
})->name('shop.order');

// Auth pages
Route::get('/sign-in', function () {
    return view('templates.sign-in');
})->name('sign.in');

Route::get('/sign-up', function () {
    return view('templates.sign-up');
})->name('sign.up');

Route::get('/reset-password', function () {
    return view('templates.reset-password');
})->name('reset.password');

// Utility pages
Route::get('/page-faq', function () {
    return view('templates.page-faq');
})->name('page.faq');

Route::get('/page-privacy', function () {
    return view('templates.page-privacy');
})->name('page.privacy');

Route::get('/page-terms', function () {
    return view('templates.page-terms');
})->name('page.terms');

Route::get('/coming-soon', function () {
    return view('templates.coming-soon');
})->name('coming.soon');

// 404 page
Route::fallback(function () {
    return view('templates.404', [], 404);
});
