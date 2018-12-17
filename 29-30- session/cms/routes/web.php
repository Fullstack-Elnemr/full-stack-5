<?php

/**
 * Routers Web view pages
 */
Route::get('/', function () {
    $sliders = \App\Slider::all();

    return view('front.home', compact('sliders'));
});
Route::get('/about', function () {
    return view('front.about');
});

/**
 * Routers auth pages
 */
Auth::routes();// login , register,

/*
 * Routers Admin pages
 */
// Admin Roles Routes...
//Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
Route::prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin');
    Route::get('/user', 'Admin\UsersAdminController@index')->name('users');
    Route::get('/slider', 'Admin\HomePageController@slider')->name('slider');
    Route::get('/menu', 'Admin\HomePageController@menu')->name('menu');
    Route::resource('/sliders', 'Admin\SliderController');
});