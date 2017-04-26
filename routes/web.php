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
/*lugar que se mostrare en la vista */
Route::get('/','MainController@home');
/*por lo general retun una funcion*/

Auth::routes();

Route::get('/home', 'HomeController@index');
