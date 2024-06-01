<?php

use App\Http\Controllers\Backend\Auth\AuthLoginController;
use App\Http\Controllers\Backend\Auth\AuthLogoutController;
use App\Http\Controllers\Backend\Branding\BrandingController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Color\ColorController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Homepage\BestSellerController;
use App\Http\Controllers\Backend\Size\SizeController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\Customers\CustomerInformationController;
use App\Http\Controllers\Frontend\Customers\SignInController;
use App\Http\Controllers\Frontend\Customers\SignOutController;
use App\Http\Controllers\Frontend\Customers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PaymentMethodController;
use App\Http\Controllers\Frontend\PaymentWithCardController;
use App\Http\Controllers\Frontend\PaymentWithQrKhmerController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShoppingCartController;
use App\Models\Size;

// Front_End
Route::get('/', [HomeController::class, 'index'])->name('home.show');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop.show');
Route::get('/about', [AboutController::class, 'about'])->name('about.show');
Route::get('/shopping_cart', [ShoppingCartController::class, 'shoppingcart'])->name('shoppingcart.show');
Route::get('/check_out', [CheckOutController::class, 'checkout'])->name('checkout.show');
Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts.show');

// Customers Controller
Route::prefix('customer')->group(function () {
    Route::get('/signup', [SignUpController::class, 'signup'])->name('signup.show');
    Route::post('/signup/submit', [SignUpController::class, 'signupsubmit'])->name('signup.submit');
    Route::get('/signin', [SignInController::class, 'signin'])->name('signin.show');
    Route::post('/signin/submit', [SignInController::class, 'signinsubmit'])->name('signin.submit');
    Route::post('/signout', [SignOutController::class, 'customerlogout'])->name('signout');
    Route::get('/information/myprofile', [CustomerInformationController::class, 'showinfocustomer'])->name('customer.information')->middleware('auth.customer');
    Route::get('/information/customerorderdetail', [CustomerInformationController::class, 'customerorderdetail'])->name('customer.customerorderdetail');
    Route::get('/payment/method/card', [PaymentWithCardController::class, 'paymentwithcard'])->name('paymentwithcard.show');
    Route::get('/payment/method/QrKhmer', [PaymentWithQrKhmerController::class, 'paymentwithqrkhmer'])->name('paymentwithqrkhmer.show');
});


//Back_End
Route::prefix('admin')->group(function () {
    Route::get('/auth/login', [AuthLoginController::class, 'authloginform'])->name('authlogin.show');
    Route::post('/auth/login/submit', [AuthLoginController::class, 'authloginsubmit'])->name('authlogin.submit');
    Route::get('/auth/logout', [AuthLogoutController::class, 'authlogout'])->name('auth.logout');
});
Route::prefix('admin')->middleware('auth.admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard.show');

    Route::get('/userprofile', [UserController::class, 'user_profile'])->name('admin.userprofile.show');
    Route::get('/create/admin', [UserController::class, 'create'])->name('admin.create.show');
    Route::post('/store/admin', [UserController::class, 'store'])->name('admin.create.store');
    Route::get('/show/admin', [UserController::class, 'inform'])->name('admin.create.inform');
    Route::get('/edit/admin/{id}', [UserController::class, 'edit'])->name('admin.create.edit');
    Route::post('/update/admin/{id}', [UserController::class, 'update'])->name('admin.create.update');
    Route::delete('/delete/admin/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/category/information', [CategoryController::class, 'index'])->name('admin.category.show');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('admin.category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::post('/size/store', [SizeController::class, 'store'])->name('admin.size.store');
    Route::get('/size/show', [SizeController::class, 'index'])->name('admin.size.show');
    Route::get('/size/create', [SizeController::class, 'create'])->name('admin.size.create');
    Route::get('/size/{id}/edit', [SizeController::class, 'edit'])->name('admin.size.edit');
    Route::put('/size/update/{id}', [SizeController::class,'update'])->name('admin.size.update');
    Route::delete('/size/{id}', [SizeController::class, 'destroy'])->name('admin.size.destroy');

    Route::get('/branding/information/', [BrandingController::class, 'index'])->name('admin.branding.show');
    Route::post('/branding/store/', [BrandingController::class, 'store'])->name('admin.branding.store');
    Route::get('/branding/create', [BrandingController::class, 'create'])->name('admin.branding.create');
    Route::get('/branding/{id}/edit', [BrandingController::class, 'edit'])->name('admin.branding.edit');
    Route::put('/branding/update/{id}', [BrandingController::class,'update'])->name('admin.branding.update');
    Route::delete('/branding/{id}', [BrandingController::class, 'destroy'])->name('admin.branding.destroy');

    Route::post('/color/store/', [ColorController::class, 'store'])->name('admin.color.store');
    Route::get('/color/show/', [ColorController::class, 'show'])->name('admin.color.show');
    Route::get('/color/create/', [ColorController::class, 'create'])->name('admin.color.create');
    Route::get('/color/{id}/edit/', [ColorController::class, 'edit'])->name('admin.color.edit');
    Route::put('/color/update/{id}/', [ColorController::class,'update'])->name('admin.color.update');
    Route::delete('/color/{id}/', [ColorController::class, 'destroy'])->name('admin.color.destroy');

});
//product home page management
Route::prefix('admin')->middleware('auth.admin')->group(function () {
    Route::get('/product/bestseller/show',[BestSellerController::class, 'show'])->name('bestseller.show');
});

