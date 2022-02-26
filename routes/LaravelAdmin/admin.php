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
    Route::get('register', 'AdminAuthenticateController@registerTemplate')->name('adminRegister');

    Route::get('login', 'AdminAuthenticateController@loginTemplate')->name('adminLogin');
});
