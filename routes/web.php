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
    return view('storehome');
});



Route::get('/storehome', 'HomeController@index')->name('storehome');

Route::resource('shop','shopController');

Route::resource('product-details','shopController');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart', 'CartController@store')->name('cart');


Route::get('empty', function(){

Cart::destroy();

});

























Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
