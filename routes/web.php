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

/*
Route::get('/', function () {

    $nombre ="Oscar";

    return view('home', compact('nombre')); 
})->name('home');*/

route::view('/','home')->name('home');
route::view('/about','about')->name('about');
route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
route::view('/contact','contact')->name('contact');

