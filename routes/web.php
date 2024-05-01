<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\Customers\SignInController;
use App\Http\Controllers\Frontend\Customers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShoppingCartController;

Route::get('/', [HomeController::class, 'index'])->name('home.show');
Route::get('/shop',[ShopController::class,'shop'])->name('shop.show');
Route::get('/about',[AboutController::class,'about'])->name('about.show');
Route::get('/shopping_cart',[ShoppingCartController::class,'shoppingcart'])->name('shoppingcart.show');
Route::get('/check_out',[CheckOutController::class,'checkout'])->name('checkout.show');
Route::get('/contacts',[ContactsController::class,'contacts'])->name('contacts.show');

// Customers Controller
Route::get('/signup',[SignUpController::class,'signup'])->name('signup.show');
Route::get('/signin',[SignInController::class,'signin'])->name('signin.show');  