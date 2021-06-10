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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','ProjectController@index');
//Route::get('/about','ProjectController@about');
Route::get('/signup','ProjectController@signup');

Route::get('login','ProjectController@login');
Route::any('check','ProjectController@check');
Route::any('login_success','ProjectController@ura');
Route::any('logout','ProjectController@logout');

Route::get("showall",'ImagesController@showall');
Route::get("image",'ImagesController@index');
Route::any("store",'ImagesController@store');
Route::get("show/{id}",'ImagesController@show');
Route::get("edit/{id}",'ImagesController@edit');
Route::any("update/{id}",'ImagesController@update');
Route::get("delete/{id}",'ImagesController@delete');

Route::any("about",'ProcedureController@index');
Route::any('search', 'ProjectController@search');