<?php

use Illuminate\Support\Facades\Route;

/*
| Admin unauthenticated APIs routes.
*/

Route::group([
    'prefix' => 'admin',
    'middleware' => [],
    'namespace' => 'App\Http\Controllers\LaravelAdmin',
    'controller' => 'AdminAuthenticateController',
], function () {
    Route::get('register', 'registerTemplate')->name('adminRegisterTemplate');
    Route::post('register', 'register')->name('adminRegister');

    Route::get('login', 'loginTemplate')->name('adminLoginTemplate');
    Route::post('login', 'login')->name('adminLogin');
});

/*
| Admin authenticated APIs routes.
*/

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
    'namespace' => 'App\Http\Controllers\LaravelAdmin',
    'controller' => 'AdminAuthenticateController',
], function () {
    Route::get('dashboard', 'dashboardTemplate')->name('adminDashboardTemplate');
    Route::post('logout', 'logout')->name('adminLogout');
});
