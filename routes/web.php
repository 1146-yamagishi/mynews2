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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

    Route::get('XXX/AAA/BBB','XXX\AAAController@BBB');
    
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\PlofileController@add');
    Route::get('profile/edit', 'Admin\PlofileController@edit');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('gisi/create', 'Admin\gisiController@add');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
