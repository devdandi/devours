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
Route::get('/reviews', 'ReviewsController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/search', 'SearchController@index');
Route::get('/lapor', 'ReviewsController@report');
Route::get('/subs', 'SubsController@index');
Route::get('/tos', 'HomeController@tos');