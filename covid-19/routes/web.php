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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index');
Route::get('/rumahsakit', 'RumahsakitController@index');
Route::get('/rumahsakit/create', 'RumahsakitController@create');
Route::post('/rumahsakit', 'RumahsakitController@store');
Route::get('/rumahsakit/{id}/edit', 'RumahsakitController@edit');
Route::patch('/rumahsakit/{id}', 'RumahsakitController@update');
Route::delete('/rumahsakit/{id}', 'RumahsakitController@destroy');
Route::get('/info', 'InfoController@index');