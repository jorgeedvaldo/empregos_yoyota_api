<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/categories', 'Api\CategoryController@get');
Route::get('/categories/{id}', 'Api\CategoryController@getById');

Route::get('/jobs', 'Api\JobController@get');
Route::get('/jobs/{id}', 'Api\JobController@getById');
