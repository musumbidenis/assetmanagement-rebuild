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


Route::get('/login', 'AuthController@loginForm');
Route::get('/register', 'AuthController@registrationForm');

Route::get('/userDetails', 'AuthController@userDetails');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');



Route::get('/count/assets', 'DashboardController@assetCount');
Route::get('/count/users', 'DashboardController@userCount');



Route::get('/get/assets', 'AssetsController@assets');


Route::get('/{any}', function () { return view('main'); })->where('any', '.*');
// Route::get('/home', 'DashboardController@home');
// Route::get('/asset', 'DashboardController@asset');
// Route::get('/session', 'DashboardController@session');
// Route::get('/report', 'DashboardController@report');

// Route::post('/delete_asset/{id}', 'AssetsController@destroy');

// Route::get('/report/assets', 'ReportsController@assetReport');
// Route::get('/report/complete', 'ReportsController@complete');
// Route::get('/report/incomplete', 'ReportsController@incomplete');

// Route::post('/asset/upload', 'AssetsController@store');

// Route::get('/logout', 'AuthController@logout');

