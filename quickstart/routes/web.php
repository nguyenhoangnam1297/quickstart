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
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/','Task_Controller@task')->name('task');
Route::post('/task','Task_Controller@postTask')->name('postTask');
Route::get('/delete/{id}','Task_Controller@deleteTask');
