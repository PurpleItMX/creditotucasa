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

Route::name('welcome')->get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/inmuebles', 'PageController@index')->name('index');

/*Route::get('/', function () {
    return view('inmuebles');
});*/

Route::get('/vivienda', function () {
    return view('vivienda');
});

Route::get('/invierte', function () {
    return view('invierte');
});

Route::get('/unete', function () {
    return view('unete');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/contacto', function () {
    return view('contacto');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/houses', 'HouseController@index')->name('index');
Route::get('/house', 'HouseController@create')->name('create');
Route::get('/house/{id}', 'HouseController@update')->name('update');
Route::post('/house/save', 'HouseController@save')->name('save');
Route::get('/house/delete/{id}', 'HouseController@delete')->name('delete');
Route::post('/house/search', 'HouseController@search')->name('search');
Route::post('/house/search-img/{id}', 'HouseController@searchImg')->name('searchImg');
Route::post('/house/save-image', 'HouseController@saveImage')->name('saveImage');

Route::get('/credit-types', 'CreditTypeController@index')->name('index');
Route::get('/credit-type', 'CreditTypeController@create')->name('create');
Route::get('/credit-type/{id}', 'CreditTypeController@update')->name('update');
Route::post('/credit-type/save', 'CreditTypeController@save')->name('save');
Route::get('/credit-type/delete/{id}', 'CreditTypeController@delete')->name('delete');
Route::post('/credit-type/search', 'CreditTypeController@search')->name('search');

Route::get('/states', 'StateController@index')->name('index');
Route::get('/state', 'StateController@create')->name('create');
Route::get('/state/{id}', 'StateController@update')->name('update');
Route::post('/state/save', 'StateController@save')->name('save');
Route::get('/state/delete/{id}', 'StateController@delete')->name('delete');
Route::post('/state/search', 'StateController@search')->name('search');

//users
Route::get('/users', 'UserController@index')->name('index');
Route::get('/user', 'UserController@create')->name('create');
Route::get('/user/{id}', 'UserController@update')->name('update');
Route::post('/user/save', 'UserController@save')->name('save');
Route::post('/user/reset-password', 'UserController@resetPassword')->name('resetPassword');
Route::get('/user/delete/{id}', 'UserController@delete')->name('delete');
Route::post('/user/search', 'UserController@search')->name('search');
