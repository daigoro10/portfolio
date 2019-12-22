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

Route::get('/', 'ImageController@index')->name('product.index');
Route::get('/search/', 'ImageController@search')->name('product.search');
Route::get('/mypage/', 'ImageController@mypageshow')->name('product.mypageshow');
Route::get('/changepassword/', 'ImageController@showchangepassform')->name('changepassshow');
Route::post('/changepassword/', 'ImageController@changepass')->name('changepass');
Route::get('/make_cart/', 'ImageController@make_cart')->name('product.make_cart');
Route::get('/{id}/favorite/', 'ImageController@favorite_up')->name('product.favorite_up');
Route::get('/{id}/detail/', 'ImageController@detail')->name('product.detail');
Route::get('/{id}/add/', 'ImageController@add')->name('product.add');
Route::get('/cartshow/', 'ImageController@cartshow')->name('product.cartshow');
Route::get('/purchase/{cart_id}/', 'ImageController@purchase')->name('product.purchase');
Route::get('/cartshow/{cartitem_id}/delete/', 'ImageController@delete')->name('product.delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
