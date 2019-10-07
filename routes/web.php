<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Logout route
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

// Add area
Route::get('/add/area', 'AreaController@index')->name('addArea');
Route::post('/store-area','AreaController@store');
Route::get('/show/area','AreaController@show')->name('showArea');
Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
Route::post('/update-area','AreaController@update')->name('updateArea');
Route::get('/delete-area/{id}','AreaController@deleteMe')->name('deleteArea');

