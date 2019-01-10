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

Route::group(['prefix' => '/offers'], function() {
    Route::get('/', 'OfferController@index')->name('offer.index');
    Route::get('/add', 'OfferController@add')->name('offer.add');
    Route::get('/{id}/edit', 'OfferController@edit')->name('offer.edit')->middleware('BlocOfferEdit');
    Route::post('/{id}/edit', 'OfferController@update')->name('offer.update');
    Route::get('/{id}/delete', 'OfferController@delete')->name('offer.delete')/*->middleware('BlocOfferEdit')*/;
    Route::post('/add', 'OfferController@submit');
});


Route::group(['prefix' => '/users'], function() {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/{id}/delete', 'UserController@delete')->name('user.delete')->middleware('BlocUserEdit');
    Route::get('/{id}/edit', 'UserController@edit')->name('user.edit')->middleware('BlocUserEdit');
    Route::post('/{id}/edit', 'UserController@update');
});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/addType', 'TypePriceController@index')->middleware('AdminPanel')->name('typePrice');
Route::post('/addType', 'TypePriceController@addType');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
