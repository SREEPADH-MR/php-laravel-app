<?php

use Illuminate\Support\Facades\Route;

/*
| Admin templates APIs routes.
*/

Route::group([
    'prefix' => 'templates',
    'middleware' => ['auth'],
], function () {
    Route::get('alerts', function () {
        return view('LaravelAdmin.templates.Components.alerts');
    })->name('adminAlerts');

    Route::get('accordion', function () {
        return view('LaravelAdmin.templates.Components.accordion');
    })->name('adminAccordion');

    Route::get('badges', function () {
        return view('LaravelAdmin.templates.Components.badges');
    })->name('adminBadges');

    Route::get('breadcrumbs', function () {
        return view('LaravelAdmin.templates.Components.breadcrumbs');
    })->name('adminBreadcrumbs');

    Route::get('buttons', function () {
        return view('LaravelAdmin.templates.Components.buttons');
    })->name('adminButtons');

    Route::get('cards', function () {
        return view('LaravelAdmin.templates.Components.cards');
    })->name('adminCards');

    Route::get('carousel', function () {
        return view('LaravelAdmin.templates.Components.carousel');
    })->name('adminCarousel');

    Route::get('listGroup', function () {
        return view('LaravelAdmin.templates.Components.listGroup');
    })->name('adminListGroup');

    Route::get('modal', function () {
        return view('LaravelAdmin.templates.Components.modal');
    })->name('adminModal');

    Route::get('tabs', function () {
        return view('LaravelAdmin.templates.Components.tabs');
    })->name('adminTabs');

    Route::get('pagination', function () {
        return view('LaravelAdmin.templates.Components.pagination');
    })->name('adminPagination');

    Route::get('progress', function () {
        return view('LaravelAdmin.templates.Components.progress');
    })->name('adminProgress');

    Route::get('spinners', function () {
        return view('LaravelAdmin.templates.Components.spinners');
    })->name('adminSpinners');

    Route::get('tooltips', function () {
        return view('LaravelAdmin.templates.Components.tooltips');
    })->name('adminTooltips');

    Route::get('elements', function () {
        return view('LaravelAdmin.templates.Forms.elements');
    })->name('adminElements');

    Route::get('layouts', function () {
        return view('LaravelAdmin.templates.Forms.layouts');
    })->name('adminLayouts');

    Route::get('editors', function () {
        return view('LaravelAdmin.templates.Forms.editors');
    })->name('adminEditors');

    Route::get('validation', function () {
        return view('LaravelAdmin.templates.Forms.validation');
    })->name('adminValidation');

    Route::get('validation', function () {
        return view('LaravelAdmin.templates.Forms.validation');
    })->name('adminValidation');

    Route::get('tablesGeneral', function () {
        return view('LaravelAdmin.templates.Tables.tablesGeneral');
    })->name('adminTablesGeneral');

    Route::get('tablesData', function () {
        return view('LaravelAdmin.templates.Tables.tablesData');
    })->name('adminTablesData');

    Route::get('chartjs', function () {
        return view('LaravelAdmin.templates.Charts.chartjs');
    })->name('adminChartjs');

    Route::get('apexcharts', function () {
        return view('LaravelAdmin.templates.Charts.apexcharts');
    })->name('adminApexcharts');

    Route::get('echarts', function () {
        return view('LaravelAdmin.templates.Charts.echarts');
    })->name('adminEcharts');

    Route::get('iconsBootstrap', function () {
        return view('LaravelAdmin.templates.Icons.iconsBootstrap');
    })->name('adminIconsBootstrap');

    Route::get('iconsRemix', function () {
        return view('LaravelAdmin.templates.Icons.iconsRemix');
    })->name('adminIconsRemix');

    Route::get('iconsBoxicons', function () {
        return view('LaravelAdmin.templates.Icons.iconsBoxicons');
    })->name('adminIconsBoxicons');
});
