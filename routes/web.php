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

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/typography.html', function () {
    return view('typography');
});

Route::get('/tooltip.html', function () {
    return view('tooltip');
});

Route::get('/tabs.html', function () {
    return view('tabs');
});

Route::get('/sample-page.html', function () {
    return view('sample-page');
});

Route::get('/progress-bar.html', function () {
    return view('progress-bar');
});

Route::get('/notification.html', function () {
    return view('notification');
});

Route::get('/map-google.html', function () {
    return view('map-google');
});

Route::get('/label-badge.html', function () {
    return view('label-badge');
});

Route::get('/icon-themify.html', function () {
    return view('icon-themify');
});

Route::get('/form-elements-component.html', function () {
    return view('form-elements-component');
});

Route::get('/color.html', function () {
    return view('color');
});

Route::get('/chart.html', function () {
    return view('chart');
});

Route::get('/button.html', function () {
    return view('button');
});

Route::get('/bs-basic-table.html', function () {
    return view('bs-basic-table');
});

Route::get('/breadcrumb.html', function () {
    return view('breadcrumb');
});

Route::get('/auth-sign-up.html', function () {
    return view('auth-sign-up');
});

Route::get('/auth-normal-sign-in.html', function () {
    return view('auth-normal-sign-in');
});

Route::get('/accordion.html', function () {
    return view('accordion');
});