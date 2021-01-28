<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\LoginController@login');

Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('postLogin', 'App\Http\Controllers\LoginController@postLogin')->name('postLogin');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('employee', 'App\Http\Controllers\EmployeeController');
    Route::get('/company/{id}/deactivate', 'App\Http\Controllers\CompanyController@deactivate')->name('company.deactivate');
    Route::get('/employee/{id}/deactivate', 'App\Http\Controllers\EmployeeController@deactivate')->name('employee.deactivate');

    Route::resource('company', 'App\Http\Controllers\CompanyController');

});
