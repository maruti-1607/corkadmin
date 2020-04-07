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
Route::get('verify-otp', 'Auth\OtpVerificationController@show');
Route::post('verify-otp', 'Auth\OtpVerificationController@store')->name('verify.otp');

Route::get('profile', 'Auth\ProfileController@show');
Route::post('profile', 'Auth\ProfileController@store')->name('profile');

Route::group(['middleware' => [ 'auth']], function () {


    Route::group(['middleware' => ['permission:read-admin-panel']], function () {
        //Route::group(['middleware' => ['menu.admin']], function () {
            Route::get('/', 'Dashboard@show')->name('dashboard');
        //});
    });




});


Route::group(['prefix' => 'auth'], function () {

    Route::resource('users', 'Auth\Users');

    Route::resource('roles', 'Auth\Roles');

    Route::resource('permissions', 'Auth\Permissions');
});
