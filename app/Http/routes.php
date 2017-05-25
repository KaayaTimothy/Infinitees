<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//landing page
Route::get('/', 'NavController@shop');

Route::get('/shop', [
	'as'=>'shop',
	'uses'=>'NavController@shop']);

Route::get('/userregister', [
    'as'=>'userregister',
    'uses'=>'NavController@userregister']);

Route::get('/Admin', [
    'as'=>'admin',
    'uses'=>'NavController@admin']);

Route::get('/admin/{tablename}', [
    'as'=>'table.show',
    'uses'=>'NavController@table']);

Route::get('/admin/insert/{tablename}', [
    'as'=>'table.insert',
    'uses'=>'NavController@insert']);

Route::post('admin/submit', [
    'as'=>'table.submit',
    'uses'=>'NavController@submit']);

Route::get('/shop/product/{productname}', [
	'as'=>'product.show',
	'uses'=>'ProductController@product']);

Route::get('/shop/category/{categoryname}/{subcategoryname}', [
	'as'=>'subcategory.show',
	'uses'=>'ProductController@subcategory']);

Route::get('/shop/category/{categoryname}', [
	'as'=>'category.show',
	'uses'=>'ProductController@category']);

Route::get('/shop/recently-viewed', [
	'as'=>'recently.viewed',
	'uses'=>'ProductController@recentlyviewed'
	]);

Route::get('/shop/recently-viewed24', [
    'as'=>'recently.viewed24',
    'uses'=>'ProductController@recentlyviewed24'
]);

Route::get('/shop/recently-viewedall', [
    'as'=>'recently.viewedall',
    'uses'=>'ProductController@recentlyviewedall'
]);

Route::post('/search', [
	'as'=>'search',
	'uses'=>'NavController@search']);

Route::get('/search', [
	'uses'=>'NavController@search']);

// Authentication routes...
Route::get('/logout', [ 
	'as' => 'logout',
	'uses'=>'Front@logout']);


// Registration routes...
Route::post('/register', [
	'as'=>'register',
	'uses'=>'Front@register']);


Route::post('/login', [
	'as'=>'login',
	'uses'=>'Front@login']);

Route::get('/login', [
	'as'=>'login',
	'uses'=>'Front@loginauth']);

Route::get('customer',[
	'middleware' => 'auth',
	'as'=>'customer',
	'uses'=>'Front@customer']);

Route::get('contact',[
	'as'=>'contact',
	'uses'=>'Front@contact']);


Route::post('/cart', [
	'as'=>'cart',
	'uses'=>'CartController@cart']);

Route::get('/cart/{productid}', [
	'as'=>'cart.remove',
	'uses'=>'CartController@remove']);

Route::get('/cart', [
	'as'=>'cart.show',
	'uses'=>'CartController@show']);

Route::post('/cart/upgrade', [
	'as'=>'cart.upgrade',
	'uses'=>'CartController@upgrade']);

Route::post('/checkout', [
	'middleware' => 'auth',
	'as'=>'checkout',
	'uses'=>'CartController@checkout']);

Route::get('/orderreview', [
	'middleware' => 'auth',
	'as'=>'orderreview',
	'uses'=>'CartController@orderreview']);

Route::post('/placeorder', [
	'middleware' => 'auth',
	'as'=>'placeorder',
	'uses'=>'CartController@placeorder']);

Route::get('/customer_orders', [
	'middleware' => 'auth',
	'as'=>'customerorders',
	'uses'=>'CartController@customerorders']);