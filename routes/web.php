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

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect('/home.html');
// });

// Auth::routes();

Route::get('/', 'Front\HomeController@home')->name('home');
Route::get('/about.html', 'Front\HomeController@about')->name('about');
Route::get('/services.html', 'Front\HomeController@services')->name('services');
Route::get('/academy.html', 'Front\HomeController@academy')->name('academy');
Route::get('/studio.html', 'Front\HomeController@studio')->name('studio');
Route::get('/contact.html', 'Front\HomeController@contact')->name('contact');
