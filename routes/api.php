<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//products
Route::get('/products', 'ProductsController@all')->name('products.all');
Route::post('/products', 'ProductsController@store')->name('products.store');
Route::get('/products/{product_id}', 'ProductsController@show')->name('products.show');
Route::put('/products/{product_id}', 'ProductsController@update')->name('products.update');
Route::delete('/products/{product_id}', 'ProductsController@destory')->name('products.destroy');
