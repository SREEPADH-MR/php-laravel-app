<?php

use Illuminate\Support\Facades\Route;

/*
| Admin authenticate APIs routes.
*/

Route::group([
    // 'prefix' => 'admin',
    // 'middleware' => 'jwt.verify',
    'namespace' => 'App\Http\Controllers\LaravelAdmin',
], function () {
    Route::get('register', 'AdminAuthenticateController@registerTemplate')->name('adminRegisterTemplate');
    Route::post('register', 'AdminAuthenticateController@register')->name('adminRegister');

    Route::get('login', 'AdminAuthenticateController@loginTemplate')->name('adminLoginTemplate');
    Route::post('login', 'AdminAuthenticateController@login')->name('adminLogin');

    Route::get('dashboard', 'AdminAuthenticateController@dashboardTemplate')->name('adminDashboardTemplate');
});
