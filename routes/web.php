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

Route::get('/', function () {
    return view('welcome', ['hash' => '', 'query' => '']);
});

Route::get('/options', 'TestJsqlController@refreshOptions');
Route::post('/hash', 'TestJsqlController@deHashQueries');
Route::post('/query', 'TestJsqlController@hashQueries');
