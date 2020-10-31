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

Route::get('/{any}', function () { return view('main'); })->where('any', '.*');

// Route::get('/register', 'AuthController@registrationForm');

// Route::post('/register', 'AuthController@register');
// Route::post('/login', 'AuthController@login');

// Route::get('/home', 'PagesController@home');
// Route::get('/asset', 'PagesController@asset');
// Route::get('/session', 'PagesController@session');
// Route::get('/report', 'PagesController@report');

// Route::post('/delete_asset/{id}', 'AssetsController@destroy');

// Route::get('/report/assets', 'ReportsController@assetReport');
// Route::get('/report/complete', 'ReportsController@complete');
// Route::get('/report/incomplete', 'ReportsController@incomplete');

// Route::post('/asset/upload', 'AssetsController@store');

// Route::get('/logout', 'AuthController@logout');