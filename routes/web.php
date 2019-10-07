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
    return view('welcome');
});

Auth::routes();
// Logout route
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

// Add area

Route::get('/add/area', 'AreaController@index')->name('addArea');
// Route::get('/add/area/form','AreaController@show');
