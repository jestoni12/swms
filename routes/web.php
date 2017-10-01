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
	if (\Auth::check()){
    	return redirect()->route('home');
	}
	else{
		return view('welcome');
	}
});

Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('trucks', 'TruckController');
    Route::get('/record/userlogs', 'RecordController@user_index')->name('userlogs');
    Route::get('/record/userlogs/mylogs', 'RecordController@mylogs')->name('mylogs');
    Route::get('/record/userlogs/printlogs', 'RecordController@printlogs')->name('printlogs');
    Route::get('/record/userlogs/show_logs', 'RecordController@show_logs')->name('show_logs');
    Route::get('/record/fertilizer/index', 'RecordController@fertilizer')->name('fertilizer');
    Route::get('/record/fertilizer/create_fertilizer', 'RecordController@create_fertilizer')->name('create_fertilizer');
    Route::post('/record/fertilizer/create_fertilizer', 'RecordController@store_fertilizer')->name('store_fertilizer');

    Route::get('/record/garbage/index', 'RecordController@garbage')->name('garbage');
    Route::get('/record/garbage/create_garbage', 'RecordController@create_garbage')->name('create_garbage');
    Route::post('/record/garbage/create_garbage', 'RecordController@store_garbage')->name('store_garbage');
});
