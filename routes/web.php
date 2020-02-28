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
route::view('/quienes-somos','about')->name('about');

/*portafolio*/ 
route::get('/portafolio', 'ProjectController@index')->name('projects.index');
route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
route::post('/portafolio', 'ProjectController@store')->name('projects.store');
route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');




/*FORMULARIO*/

route::view('/contacto','contact')->name('contact');
Route::post('contacto', 'FormController@validar')->name('form.validar');

