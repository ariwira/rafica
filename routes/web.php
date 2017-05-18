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

Route::get('/', 'DataController@landing')->name('landing');

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');

Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('logout','Auth\LoginController@logout')->name('GetLogout');

Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.email');
Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')
    ->name('password.request');
Route::post('/password/reset','Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')
    ->name('password.reset');

Route::group(['middleware' => 'auth'],function (){
    Route::group(['middleware' => 'role:admin'],function () {
        Route::resource('/cabang','CabangController');
        Route::resource('/user','UserController');
    });
    Route::group(['middleware' => 'role:user'],function () {
        Route::resource('/input','DataInputController');
    });
    Route::resource('/input','DataInputController');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/change-password','UserController@changePassword')->name('change-password');
    Route::post('/change-password','UserController@postChangePassword');
});
