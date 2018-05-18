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

Route::view('/', 'index')->name('home');
Route::view('token', 'token')->name('token');
Route::view('cloud', 'cloud')->name('cloud');
Route::view('core', 'core')->name('core');
Route::view('team', 'team')->name('team');
Route::view('timeline', 'timeline')->name('timeline');
Route::view('resources', 'resources')->name('resources');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy', 'privacy')->name('privacy');
