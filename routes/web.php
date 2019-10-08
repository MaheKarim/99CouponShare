<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Password Update
Route::get('/change/password','HomeController@showChangePasswordForm')->name('passwordupdate');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

 
    // User Controller
    Route::get('/user/profile','UserController@index')->name('viewUserProfile');


    // Add area
    Route::get('/add/area', 'AreaController@index')->name('addArea');
    Route::post('/store-area','AreaController@store');
    Route::get('/show/area','AreaController@show')->name('showArea');
    Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
    Route::post('/update-area','AreaController@update')->name('updateArea');
    Route::get('/delete-area/{id}','AreaController@deleteMe')->name('deleteArea');


Route::prefix('api/v1.3')->group(function () {
    // Logout Route
    Route::post('/logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

    // About category
    Route::get('/add/category','CategoryController@index')->name('addCategory');
    Route::post('/store-category','CategoryController@store');
    Route::get('/show/category','CategoryController@show')->name('showCategory');
    Route::get('/category/edit/{category}','CategoryController@edit')->name('editCategory');
    Route::post('/update-category','CategoryController@update')->name('updateCategory');
    Route::get('/delete/category/{id}','CategoryController@delete')->name('deleteCategory');