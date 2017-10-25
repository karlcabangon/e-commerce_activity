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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/addtocart/{id}', 'HomeController@addtocart');
route::get('/removetocart/{id}', 'HomeController@removetocart');
route::get('/mycart', 'HomeController@mycart');
route::get('/viewcart','HomeController@itemsoncart');
route::get('/checkout','HomeController@checkout');
route::get('/backtocart','HomeController@backtocart');
route::get('/shippinginfo','HomeController@shipping_info');
route::get('/invoice','HomeController@invoice');
