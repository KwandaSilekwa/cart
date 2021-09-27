<?php

use Illuminate\Http\Request;
Use App\Http\Controllers\CartController;
Use App\Http\Controllers\MenuController;
Use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);

// Route::group(['middleware' => 'auth:api'], function() {
// Route::get('/', 'MenuController@index')->name('home');
// Route::post('add-to-cart', 'CartController@addToCart');
// Route::post('remove-from-cart', 'CartController@removeFromCart');
// Route::post('cart-item-quantity-set', 'CartController@cartItemQuantitySet');
// Route::post('increment-cart-item', 'CartController@incrementCartItem');
// Route::post('decrement-cart-item', 'CartController@decrementCartItem');
// Route::post('apply-discount', 'CartController@applyDiscount');
// Route::post('register', 'Auth\RegisterController@register');
// Route::post('logout', 'Auth\LoginController@logout');
// });

// Route::middleware('auth:api')
//     ->get('/user', function (Request $request) {
//         return $request->user();
//     });