<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('addprices', function() {
	for ($i = 5; $i <= 1000; $i = $i + 5) { 
		DB::table('guest_post_prices')->insert([
			'price' => $i,
		]);
	}

	return 'Success!';
});*/

Route::get('/', function () {
    return view('welcome');
});

//PRINCIPAL ROUTES

Route::get('sell-guest-posts', function() {
	return view('pages.sellGuestPosts');
})->name('sell-guest-posts');

Route::get('marketplace', [BuyController::class, 'index'])->name('marketplace');

Route::get('guest-posting-services', function() {
	return view('pages.guestPostingServices');
})->name('guest-posting-services');

Route::get('da-dr-increase-service', function() {
	return view('pages.da-dr');
})->name('da-dr-increase-service');

//END PRINCIPAL ROUTES

Route::get('cart', [BuyController::class, 'cart'])->middleware('auth')->name('cart');

Route::delete('cart/{name}', [CartController::class, 'destroy'])->middleware('auth')->name('cart.destroy');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('faqs', function() {
	return view('subpages.faqs');
})->name('faqs');

Route::get('term', function() {
	return view('subpages.term');
})->name('term');

Route::get('privacy', function() {
	return view('subpages.privacy');
})->name('privacy');

Route::get('refound-policy', function() {
	return view('subpages.refoundPolicy');
})->name('refound-policy');

Route::get('publisher', [PublisherController::class, 'index'])->middleware('auth')->name('publisher.index');

Route::get('publisher/add', [PublisherController::class, 'websiteAdd'])->middleware('auth')->name('publisher.add');

Route::get('publisher/websites', [PublisherController::class, 'websites'])->middleware('auth')->name('publisher.websites');

Route::get('publisher/orders', [PublisherController::class, 'orders'])->middleware('auth')->name('publisher.orders');

Route::get('publisher/earning', [PublisherController::class, 'earning'])->middleware('auth')->name('publisher.earning');

Route::get('advertiser', [AdvertiserController::class, 'index'])->middleware('auth')->name('advertiser.index');

Route::get('account', [UserController::class, 'edit'])->middleware('auth')->name('user.edit');

Route::get('buy/{category}', [BuyController::class, 'show'])->middleware('auth')->name('buy.category');

Route::get('buy', [BuyController::class, 'marketplace'])->name('buy.marketplace');

Route::get('search', [CategoryController::class, 'search'])->name('search');

Auth::routes();

Route::post('paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('payWithPayPal');

Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal.success');

Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal.cancel');

Route::get('paypal/status', [PaymentController::class, 'payPalStatus'])->name('payPalStatus');

Route::post('stripe/pay', [PaymentController::class, 'payWithStripe'])->name('payWithStripe');

Route::get('stripe/checkout-success', function() {
	return view('stripe.success');
})->name('stripe.success');

Route::get('stripe/checkout-cancel', function() {
	return view('stripe.cancel');
})->name('stripe.cancel');

Route::post('paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('payWithPayPal');

Route::get('paypal/checkout-success', function() {
	return view('paypal.success');
})->name('paypal.success');

Route::get('paypal/checkout-cancel', function() {
	return view('paypal.cancel');
})->name('paypal.cancel');

Route::resource('websites', App\Http\Controllers\WebsiteController::class);

//Route::resource('carts', App\Http\Controllers\CartController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('status', App\Http\Controllers\StatuController::class);

Route::resource('tlds', App\Http\Controllers\TldController::class);

Route::resource('languages', App\Http\Controllers\LanguageController::class);