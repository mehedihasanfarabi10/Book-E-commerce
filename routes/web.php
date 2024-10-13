<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('lang/{locale}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Home Page
Route::get('/', [HomeController::class, 'HomePage'])->name('home');
Route::get('/by-category', [CategoryController::class, 'ByCategoryPage']);

Route::get('/login', [HomeController::class, 'LoginPage'])->name('login');
Route::get('/register', [HomeController::class, 'RegisterPage'])->name('register');
Route::get('/forgot-password', [HomeController::class, 'forgotPassword'])->name('forgot.password');
Route::get('/shop-cart', [HomeController::class, 'shopCart'])->name('shop.cart');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/term-condition', [HomeController::class, 'termCondition'])->name('term.condition');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

//user profile
Route::get('/my-account', [ProfileController::class, 'myAccount'])->name('my.account');



//Product 
Route::get('/product-list', [ProductController::class, 'productList'])->name('product.list');
Route::get('/product-detail', [ProductController::class, 'productDetail'])->name('product.detail');
