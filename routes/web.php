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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP */
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('pages', 'PagesController');

    Route::resource('quote-categories', 'QuoteCategoriesController')->except('show');

    Route::resource('quotes', 'QuotesController');

    Route::resource('users', 'UsersController');
});
