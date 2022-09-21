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
Route::get('/','WelcomeController@index');
Route::get('/rents','RentController@index');
Route::get('/rents/create','RentController@create');
Route::post('/rents/create','RentController@store');
Route::resource('floors','FloorController');
Route::resource('offices','OfficeController');
Route::resource('renters','RenterController');
Route::resource('rooms','RoomController');
Route::resource('ex_typs','ExpenseTypesController');
Route::resource('expenses','ExpenseController');
Route::resource('homes','HomeController');