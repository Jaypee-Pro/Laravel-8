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

Route::get('/', 'FetchController@index');
Route::get('/add-data', 'FetchController@create');
Route::post('insert','FetchController@insert');
Route::get('/edit-data/{id}', 'FetchController@edit');
Route::put('update-data/{id}','FetchController@update');
Route::get('delete-data/{id}','FetchController@delete');


// how to pass value in url
// Route::get('/users/{id}','PagesController@display');
