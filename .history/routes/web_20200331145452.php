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

Auth::routes();


Route::group(['middleware' => 'auth'], function () {


    //Route::group(['middleware' => ['permission:read-admin-panel']], function () {
        //Route::group(['middleware' => ['menu.admin']], function () {
            Route::get('/', 'Dashboard@show')->name('dashboard');
        //});




});


//
//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'common'], function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::get('logout', 'Auth\Login@destroy')->name('logout');

    });
});
