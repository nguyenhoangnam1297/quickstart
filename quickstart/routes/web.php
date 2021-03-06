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

    Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {
		Route::get('/', 'TaskController@task')->name('task');
		Route::post('/task', 'TaskController@postTask')->name('postTask');
		Route::get('/delete/{id}', 'TaskController@deleteTask');
		Route::post('/lang', [
		          'as' => 'switchLang',
		          'uses' => 'TaskController@postLang',
		      ]);
	});
