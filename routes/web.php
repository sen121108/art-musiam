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
Route::get('/explain/{art}','artController@explain');

Route::get('/manage','artController@manage');

Route::post('/posts', 'artController@posts');
Route::delete('/del/{art}', 'artController@delite');