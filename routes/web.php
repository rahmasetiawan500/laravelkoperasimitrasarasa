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

Route::get('/', 'HomeController@index')->name('home');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function()
    {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('member', 'MemberController');



    });
    Route::resource('registration', 'RegistrationController');
    Route::get('/registration/create/success', 'RegistrationController@success')->name('registration.success');