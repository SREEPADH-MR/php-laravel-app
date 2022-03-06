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

    Route::match(['get', 'post'], 'logout', 'logout')->name('adminLogout')->middleware('auth');
});

/*
| Admin authenticated APIs routes.
*/

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
    'namespace' => 'App\Http\Controllers\LaravelAdmin',
], function () {
    Route::get('dashboard', function () {
        return view('LaravelAdmin.templates.Pages.dashboard');
    })->name('adminDashboardTemplate');

    Route::get('profile', function () {
        return view('LaravelAdmin.templates.Pages.profile');
    })->name('adminProfileTemplate');

    Route::get('faq', function () {
        return view('LaravelAdmin.templates.Pages.faq');
    })->name('adminFAQTemplate');

    Route::get('contact', function () {
        return view('LaravelAdmin.templates.Pages.contact');
    })->name('adminContactTemplate');

    Route::get('blank', function () {
        return view('LaravelAdmin.templates.Pages.blank');
    })->name('adminBlankTemplate');
});
