<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sales', 'MainController@sales')->name('sales');
Route::get('/inventory', 'MainController@inventory')->name('inventory');
Route::get('/clients', 'MainController@clients')->name('clients');
Route::get('/reports', 'MainController@reports')->name('reports');
Route::get('/users', 'MainController@users')->name('users');
Route::get('/idProcessing', 'MainController@idProcessing')->name('id_processing');
Route::post('/importExcel', 'MainController@importExcel');
