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
    return view('landing');
})->name('home.index');

Route::get('/test', function () {
    return view('landing-simple');
})->name('test');

Route::get('/demo-landing-2', function () {
    return view('demo-landing-2');
})->name('demo-landing-2');
