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

// Auth::routes();
Route::resource('/', 'HomeController');

Route::resource('/contact', 'ContactUSController');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::redirect('register', 'login', 301);

    Route::resource('/dashboard', 'AdminController');
    
    Route::get('/dashboard/{$id}', 'AdminController@show');
});
