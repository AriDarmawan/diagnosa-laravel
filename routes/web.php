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

Route::post('/test', 'VerdictController@getVerdict')->name('test');

Route::post('/diagnosa', 'VerdictController@diagnosa')->name('diagnosa');

Route::get('/testV', function () {
    return view('test');
});

