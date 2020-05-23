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

Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/categories/{id}', 'JobController@getByCategoryId');
//Route::match(['get','post'], '/contact', 'ContactController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/save', 'ContactController@store');
Route::get('/jobs', 'JobController@index');
Route::get('/jobs/{id}', 'JobController@getById');
