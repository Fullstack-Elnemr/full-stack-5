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
//Route::get('/', function (){
//
//    return view('main');
//});


Route::get('/home', function (){
    return view('home');
})->name('home');

/*Route::get('/users/{name?}', function (string $name = 'name'){
    return view('users', compact('name'));
})->where('name', '[A-Za-z]*');*/


Route::prefix('admin')->group(function (){
    Route::get('users/{id?}', 'UserController@index')->name('users');

    Route::get('/', function (){
        return view('main');
    })->name('main');
});

Route::resource('students', 'StudentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
