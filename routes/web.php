<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('stores', ['as' => 'stores.index', 'uses' => 'App\Http\Controllers\StoresController@index']);
    Route::get('stores/management', ['as' => 'stores.management', 'uses' => 'App\Http\Controllers\StoresController@management']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('staff', 'App\Http\Controllers\AdminHomeController@index')->name('staff');
    Route::resource('staff/users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('staff/users', 'App\Http\Controllers\UserController@index')->name('staff/users');


});
