<?php

use App\Dokan;
use App\LogoChange;

Route::get('/', function () {
   
    $data = [ ];
    $data['logochange'] = LogoChange::all();
    $data['dokans'] = Dokan::where('dokan_image')->get();
    return view('frontend.welcome', $data);
});
Route::get('/home', 'HomeController@index')->name('home');

// 404 Page
Route::get('/404','HomeController@error')->name('error404');


Auth::routes();
// Password Update
Route::get('/change/password','HomeController@showChangePasswordForm')->name('passwordupdate');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


Route::prefix('api/v1.3')->group(function () {
    // Logout Route
    Route::post('/logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

// User Controller
Route::get('/user/profile','UserController@index')->name('userprofile');


Route::middleware(['adminRouteOnly'])->group(function () {
    // About Category
    Route::get('/add/category','CategoryController@index')->name('addCategory');
    Route::post('/store-category','CategoryController@store');
    Route::get('/show/category','CategoryController@show')->name('showCategory');
    Route::get('/category/edit/{category}','CategoryController@edit')->name('editCategory');
    Route::post('/update-category','CategoryController@update')->name('updateCategory');
    Route::get('/delete/category/{id}','CategoryController@delete')->name('deleteCategory');

    // Add area
    Route::get('/add/area', 'AreaController@index')->name('addArea');
    Route::post('/store-area','AreaController@store');
    Route::get('/show/area','AreaController@show')->name('showArea');
    Route::get('/area/edit/{area}','AreaController@edit')->name('editArea');
    Route::post('/update-area','AreaController@update')->name('updateArea');
    Route::get('/delete-area/{id}','AreaController@deleteMe')->name('deleteArea');

    // Email Subscriber
    Route::post('emailSubscriber','NewsLaterController@sent');
    Route::get('/show/subscriber/mail','NewsLaterController@show')->name('showMailSubscribe');
    Route::get('/delete/subcriber/mail/{id}','NewsLaterController@delete')->name('deleteMail');

        // Logo **Change Not Working Here**
        Route::get('/change/logo','LogoChangeController@index')->name('logoChange');
        Route::post('/change/logo','LogoChangeController@imageUploadPost')->name('logoupdate');
        Route::get('/delete/logo/{id}', 'LogoChangeController@delete')->name('deleteLogo');
});

    // About Dokan
    Route::get('/show/dokan','DokanController@show')->name('showDokan');
    Route::get('/add/dokan','DokanController@index')->name('addDokan');
    Route::post('/store-dokan','DokanController@store');
    Route::get('/edit/dokan/{dokan}','DokanController@edit')->name('editDokan');
    Route::post('/update-dokan','DokanController@update')->name('updateDokan');
    Route::get('/delete/dokan/{id}', 'DokanController@delete')->name('deleteDokan');


    // Add Products
    Route::get('/show/product','ProductController@show')->name('showProduct');
    Route::get('/add/product','ProductController@add')->name('addProduct');
    Route::post('/store-products','ProductController@store');
    Route::get('/edit/products/{product}','ProductController@edit')->name('editProduct');
    Route::post('/update-product','ProductController@update')->name('updateProduct');
    Route::get('/delete-product/{id}','ProductController@delete')->name('deleteProduct');

    
Route::get('index','SearchController@search');