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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return view('welcome');
    });
});

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

    Route::post('/login', 'Auth\LoginController@login')->name('do_login');

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});
