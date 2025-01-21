<?php

namespace App;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\CustommerController;
use App\Models\Product;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\NowPaymentsController;



Route::get('/payment', function () {
    return view('frontend.crypto');
})->name('payment.form');
Route::post('/create-charge', [PaymentController::class, 'createCharge'])->name('create.charge');
Route::post('/webhook', [PaymentController::class, 'handleWebhook']);
Route::get('/check-auth-status', function () {
    return response()->json(['is_guest' => !auth()->check()]);
})->name('frontend.check-auth-status');
Auth::routes();
Route::get('/clear', [DashboardController::class, 'cache'])->name('cache');
//socialite
// Route::group(['as' => 'login.', 'prefix' => 'login'], function () {
//     Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
//     Route::get('/{provider}/callback', [LoginController::class, 'redirectToProviderCallback'])->name('providercallback');
// });


//Multi language
Route::get('test', function(){
    dd('test');
})->name('language.english');


Route::get('language/english', [LanguageController::class, 'English'])->name('language.english');
Route::get('language/bangla',  [LanguageController::class, 'Bangla'])->name('language.bangla');

// Custommer
Route::get('/user/login', [CustommerController::class, 'login'])->name('user.login');
Route::get('/user/register', [CustommerController::class, 'register'])->name('user.register');
Route::post('/user/register', [CustommerController::class, 'store'])->name('user.store');
Route::get('/user/dashboard', [CustommerController::class, 'index'])->middleware('auth')->name('user.index');
Route::get('/user/wishlist', [CustommerController::class, 'wishlistdata'])->name('user.wishlistdata')->middleware('auth');
Route::post('/user/wishlist/data', [CustommerController::class, 'wishlistdataget'])->name('user.wishlistdataget')->middleware('auth');
Route::post('/user/wishlist/store/{product_id}', [CustommerController::class, 'wishlist'])->name('user.wishlist.store');
Route::post('/wishlist/product-remove/{product_id}', [CustommerController::class, 'RemoveWishlist'])->middleware('auth');
Route::post('/user/coupon/apply', [CustommerController::class, 'applyCoupon']);
Route::get('/coupons/calculate', [CustommerController::class, 'calculateCoupon']);
Route::get('/user/coupon-remove', [CustommerController::class, 'couponRemove']);


Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('frontend/login', [HomeController::class, 'login'])->name('frontend.login');
Route::get('frontend/register', [HomeController::class, 'register'])->name('frontend.register');
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware'=>'auth'], function () {
    Route::get('user/account', [HomeController::class, 'account'])->name('account');
    Route::get('wishlist/', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/cart', [CustommerController::class, 'cart'])->name('cart');
    Route::post('/cart/data/store/{product_id}', [CustommerController::class, 'addToCart'])->name('cart.store');
    Route::post('order/sinlge', [CustommerController::class, 'orderSingle'])->name('order.single');
    Route::post('order/index', [CustommerController::class, 'orderSingle'])->name('orders.index');

});
Route::get('product/details/{slug}', [HomeController::class, 'productDetails'])->name('frontend.product.details');
Route::get('product/checkout/{slug}', [HomeController::class, 'chekoutProduct'])->name('frontend.product.checkout');

Route::get('/bn/details/{category}/{slug}', [HomeController::class, 'detailsbn'])->name('frontend.detailsbn');
Route::get('/en/details/{category}/{slug}', [HomeController::class, 'detailsen'])->name('frontend.detailsen');

Route::get('/en/product-list', [HomeController::class, 'productList'])->name('frontend.product_list');


// Comming Soon
Route::get('/shop/comming/soon', [HomeController::class, 'commingsoon'])->name('frontend.commingSoon');


//Poduct View modal with ajax
Route::get('/product/view/modal/{id}', [HomeController::class, 'viewProduct']);
Route::get('/product/cart/content/', [CartController::class, 'content']);

//  mini cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);
Route::get('/cart-increment/{rowId}', [CartController::class, 'CartIncrement']);
Route::get('/cart-decrement/{rowId}', [CartController::class, 'CartDecrement']);


// MyCart

Route::post('/add/cart', [CartController::class, 'addCart'])->name('cart.add');
Route::get('/shop/cart', [CartController::class, 'myCart'])->name('myCart');

//=========Category wise product===========//

Route::get('/en/{category}', [HomeController::class, 'categoryproductsen'])->name('categoryproductsen');
Route::get('/bn/{category}', [HomeController::class, 'categoryproductsbn'])->name('categoryproductsbn');
Route::get('/en/{category}/{subcategory}', [HomeController::class, 'subcategoryproductsen'])->name('subcategoryproductsen');
Route::get('/bn/{category}/{subcategory}', [HomeController::class, 'subcategoryproductsbn'])->name('subcategoryproductsbn');
// Subcategory wise product
Route::get('/en/{category}/{subcategory}/{subsubcategory}', [HomeController::class, 'subsubcategoryproductsen'])->name('subsubcategoryproductsen');
Route::get('/bn/{category}/{subcategory}/{subsubcategory}', [HomeController::class, 'subsubcategoryproductsbn'])->name('subsubcategoryproductsbn');


//============ Filter ==============//
// Brand
Route::get('/products/brand/{brandid}', [HomeController::class, 'brandsProduct']);

view()->composer('frontend.index', function ($view) {
    $category = Category::where('status', 1)->inRandomOrder()->first();
    $allProducts = Product::where('status', 1)->inRandomOrder(10)->orderBy('discount')->take(10)->get();
    $hotDealsProducts = Product::where(['hot_deals'=>1,'status'=>1])->inRandomOrder()->orderBy('hot_deals')->take(12)->get();
    $featuredProducts = Product::where(['featured'=>1,'status'=>1])->inRandomOrder()->take(12)->get();
    $view->with('category', $category);
    $view->with('allProducts', $allProducts);
    $view->with('featuredProducts', $featuredProducts);
    $view->with('hotDealsProducts', $hotDealsProducts);
});

view()->composer('frontend.partials.header', function ($view) {
    $categories = Category::where('status', 1)->latest('id')->get();
    $category = Category::where('status', 1)->inRandomOrder()->first();
    $view->with('categories', $categories);
    $view->with('category', $category);
});

view()->composer('frontend.partials.mobile_menu', function ($view) {
    $categories = Category::where('status', 1)->latest('id')->get();
    $category = Category::where('status', 1)->inRandomOrder()->first();
    $view->with('categories', $categories);
    $view->with('category', $category);
});


view()->composer('frontend.partials.minicart', function ($view) {
    $carts = Cart::content();
    $view->with('carts', $carts);
});

view()->composer('frontend.shop.category', function ($view) {
    $brands = Brand::where('status', 1)->get();
    $view->with('brands', $brands);
});

view()->composer('frontend.partials.footer', function ($view) {
    $categoriesfooter = Category::where('status', 1)->inRandomOrder()->take(5)->get();
    $view->with('categoriesfooter', $categoriesfooter);
});




//Custome Page
Route::get('{slug}', [PageController::class, 'index'])->name('page');

// social login
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::post('/payments/create', [PaymentController::class, 'createPayment'])->name('payment.create');
Route::post('/payments/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');
Route::get('/payment/form', [NowPaymentsController::class, 'form'])->name('payment.form');
Route::get('/payment/list', [NowPaymentsController::class, 'fetchCurrencies'])->name('payment.list');

Route::post('/nowpayments/invoice', [NowPaymentsController::class, 'createInvoice'])->name('nowpayments.create');
Route::post('/nowpayments/ipn', [NowPaymentsController::class, 'ipn'])->name('nowpayments.ipn');
Route::get('/nowpayments/success', [NowPaymentsController::class, 'success'])->name('nowpayments.success');
Route::get('/nowpayments/cancel', [NowPaymentsController::class, 'cancel'])->name('nowpayments.cancel');

// Example routes for handling redirects:
Route::get('/payment/success', function () { return view('payment.success'); })->name('payment.success');
Route::get('/payment/cancel', function () { return view('payment.cancel'); })->name('payment.cancel');


Route::get('/list', [NowPaymentsController::class, 'fetchCurrencies'])->name('fetch.currencies');
Route::post('/process-payment', [NowPaymentsController::class, 'processPayment'])->name('process.payment');
