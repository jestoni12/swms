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
	if (\Auth::check()){
    	return redirect()->route('home');
	}
	else{
		return view('welcome');
	}
});
*/
Route::get('/', 'EmployeesLogsController@display_view')->name('display_view');
Route::post('/', 'EmployeesLogsController@managelogs')->name('managelogs');

Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('trucks', 'TruckController');
    Route::get('/record/userlogs', 'RecordController@user_index')->name('userlogs');
    Route::get('/record/userlogs/printlogs', 'RecordController@printlogs')->name('printlogs');
    Route::get('/record/userlogs/show_logs', 'RecordController@show_logs')->name('show_logs');
    Route::get('/users/print/user/list', 'UserController@print')->name('print_user');
    Route::get('/users/print/user/list_barcode', 'UserController@print2')->name('print_user_barcode');
    
    Route::get('/record/fertilizer/index', 'RecordController@fertilizer')->name('fertilizer');
    Route::delete('/record/fertilizer/delete={id}', 'RecordController@delete_fertilizer')->name('delete_fertilizer');
    Route::get('/record/fertilizer/create_fertilizer', 'RecordController@create_fertilizer')->name('create_fertilizer');
    Route::post('/record/fertilizer/create_fertilizer', 'RecordController@store_fertilizer')->name('store_fertilizer');
    Route::get('/record/fertilizer/edit_fertilizer={id}', 'RecordController@edit_fertilizer')->name('edit_fertilizer');
    Route::put('/record/fertilizer/edit_fertilizer={id}', 'RecordController@action_edit_fertilizer')->name('action_edit_fertilizer');

    Route::get('/record/garbage/index', 'RecordController@garbage')->name('garbage');
    Route::delete('/record/garbage/delete={id}', 'RecordController@delete_garbage')->name('delete_garbage');
    Route::get('/record/garbage/create_garbage', 'RecordController@create_garbage')->name('create_garbage');
    Route::post('/record/garbage/create_garbage', 'RecordController@store_garbage')->name('store_garbage');
    Route::get('/record/garbage/edit_garbage={id}', 'RecordController@edit_garbage')->name('edit_garbage');
    Route::put('/record/garbage/edit_garbage={id}', 'RecordController@action_edit_garbage')->name('action_edit_garbage');

    Route::get('/jobs','JobController@index')->name('jobs');
    Route::delete('/jobs/delete={id}', 'JobController@delete_job')->name('delete_job');
    Route::get('/jobs/create_job','JobController@create_job')->name('create_job');
    Route::post('/jobs/create_job','JobController@store_job')->name('store_job');
    Route::get('/jobs/edit={id}','JobController@edit_job')->name('edit_job');
    Route::put('/jobs/edit={id}','JobController@action_edit_job')->name('action_edit_job');

    Route::get('/employees','EmployeeController@index')->name('employees');
    Route::delete('/employees/delete={id}', 'EmployeeController@delete_employee')->name('delete_employee');
    Route::get('/employees/create_employee','EmployeeController@create_employee')->name('create_employee');
    Route::post('/employees/create_employee','EmployeeController@store_employee')->name('store_employee');
    Route::get('/employees/edit={id}','EmployeeController@edit_employee')->name('edit_employee');
    Route::put('/employees/edit={id}','EmployeeController@action_edit_employee')->name('action_edit_employee');
    Route::post('/employees/barcode={id}','EmployeeController@print_barcode')->name('print_barcode');

    Route::get('/reports','ReportController@index')->name('reports');
    Route::post('/reports/fertilizer','ReportController@fertilizer_report')->name('fertilizer_report');
    Route::get('/reports/garbage','ReportController@garbage_report')->name('garbage_report');
    Route::get('/reports/employee_dtr','ReportController@employee_dtr')->name('employee_dtr');
});
