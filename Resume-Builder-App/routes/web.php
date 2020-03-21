<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ResumeController@index');
Route::post('/create', 'ResumeController@create')->name('create');
Route::get('/resume/{id}', 'ResumeController@resume')->name('resume');
Route::get('/manager', 'ManagerController@index')->name('manager.index');
Route::get('/manager/edit/{id}', 'ManagerController@edit')->name('manager.edit');
Route::post('/manager/editItem/{id}', 'ManagerController@editSubmit')->name('manager.editItem');
Route::get('/manager/resumes', 'ManagerController@resumes')->name('manager.resumes');
Route::delete('/manager/delete/{id}', 'ManagerController@destroy')->name('manager.delete');