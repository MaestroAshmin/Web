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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/logo', 'LogoController@index')->name('logo');
//Route::get('/home/logo', 'LogoController@logoUpload')->name('logo');
Route::post('/home/logo', 'LogoController@logoUploadPost')->name('logo');
//Route::post('/home/logo', 'LogoController@Update')->name('logo');
Route::get('/home/about', 'AboutController@index')->name('about');
//Route::get('/home/about', 'AboutController@create')->name('create');
Route::post('/home/about', 'AboutController@store')->name('store');
