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

Route::get('/', function () {return redirect('/testtasks');});

Route::get('/testtasks', 'TesttaskController@index');

Route::post('/testtasks', 'TesttaskController@store');
Route::delete('/testtasks/{id}', 'TesttaskController@destroy');
\URL::forceScheme('https');