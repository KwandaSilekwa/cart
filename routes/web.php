<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MenuController;

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

// Route::get('/', 'MenuController@index')->name('home');
// Route::post('add-to-cart', 'CartController@addToCart');
// Route::post('remove-from-cart', 'CartController@removeFromCart');
// Route::post('cart-item-quantity-set', 'CartController@cartItemQuantitySet');
// Route::post('increment-cart-item', 'CartController@incrementCartItem');
// Route::post('decrement-cart-item', 'CartController@decrementCartItem');
// Route::post('apply-discount', 'CartController@applyDiscount');

// Route::get('/', 'MenuController@index')->name('home');
Route::post('add-to-cart', 'CartController@addToCart');
Route::post('remove-from-cart', 'CartController@removeFromCart');
Route::post('cart-item-quantity-set', 'CartController@cartItemQuantitySet');
Route::post('increment-cart-item', 'CartController@incrementCartItem');
Route::post('decrement-cart-item', 'CartController@decrementCartItem');
Route::post('apply-discount', 'CartController@applyDiscount');
Route::get('dashboard', [MenuController::class, 'index']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');