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

Route::get('/portafolio', function () {
    return view('portafolio');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/portafolio', 'Admin\ProjectsController@index')->name('admin.portafolio.index'); //index es el metodo del controlador que se llamara

Route::post('/admin/portafolio/store', 'Admin\ProjectsController@store')->name('admin.portafolio.store'); //store es el metodo del controlador que se llamara



