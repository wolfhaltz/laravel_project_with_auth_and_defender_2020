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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Admin', 'middleware' => ['auth', 'needsRole:admin'] ], function() {

    Route::get('/', 'HomeController@index')->name('home');

});

Route::group(['prefix' => 'welcome', 'middleware' => ['auth', 'needsRole:user'] ], function() {
    Route::get('/', function() {
        return 'Yes I am an user!';
    });
});
