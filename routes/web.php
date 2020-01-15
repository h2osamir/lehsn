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

Route::get('/livesearch', 'LiveSearch@index');
Route::get('/livesearch/action', 'LiveSearch@action')->name('livesearch.action');
Route::get('/livesearch', 'LiveSearch@search');