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

// Route::get('/', function () {
//     $data['resume-items'] = DB::table('resume_items')->get();
//     //dd($data['resume-items']);
//     //dd(DB::table('resume_items')->get());
//     return view('index', ['data' => $data]);
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ResumeController@index');
Route::post('/create', 'ResumeController@create')->name('create');
Route::get('/resume', 'ResumeController@resume')->name('resume');