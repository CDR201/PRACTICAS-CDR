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

Route::get('/Principal','Controller@Principal')->name('Principal');
Route::get('/Layout','Controller@Layout')->name('Layout');
Route::get('/miprimerarray','Controller@getmaestro')->name('maestro');

Route::resource('/Helloworld','CDR');