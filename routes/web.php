<?php

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE';
});

Route::get('locale/{locale}',function($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
});


// ลงทะเบียนแอดมิน
Route::get('/register','Auth\RegisterController@ShowRegisterForm');
Route::post('/register','Auth\RegisterController@register');

Route::group(['prefix' => ''], function(){
    Route::get('/','Frontend\\FrontendsController@index');
    Route::get('/about-us','Frontend\\FrontendsController@aboutUs');
    Route::get('/contact-us','Frontend\\FrontendsController@contactUs');
    Route::post('/send-message','Frontend\\FrontendsController@sendMessage');
    Route::get('/about-us','Frontend\\FrontendsController@aboutUs');
    Route::get('/product','Frontend\\FrontendsController@product');
    Route::get('/content','Frontend\\FrontendsController@content');
});

// admin
Route::group(['prefix' => 'admin'], function(){
    // เข้าสู่ระบบแอดมิน
    Route::get('/login','Auth\LoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login','Auth\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('/product', 'Backend\AdminsController@product')->name('admin.home');
    Route::get('/create-product', 'Backend\AdminsController@createProduct');
    Route::post('/create-product', 'Backend\AdminsController@createProductPost');
    Route::get('/product-delete/{id}','Backend\\AdminsController@productDelete');
    Route::get('/edit-product/{id}', 'Backend\AdminsController@editProduct');
    Route::post('/update-product', 'Backend\AdminsController@updateProduct');
    Route::get('/contact', 'Backend\AdminsController@contact');
});