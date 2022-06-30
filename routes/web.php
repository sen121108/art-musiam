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

Route::get('/','artController@index');
Route::get('/explain','artController@explain');
Route::get('/quiz','artController@quiz');
Route::get('/manage','artController@manage');

Route::post('/posts', 'artController@posts');