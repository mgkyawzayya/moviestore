<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MovieController@index');
Route::get('movies', 'MovieController@movies');
Route::get('series', 'MovieController@series');

Route::get('/movies/detail/{id}', 'MovieController@detail');

Route::get('{movie}/category', 'CategoryController@index');
Route::get('{movie}/category/{category}', 'CategoryController@show');
Route::get('{movie}/year', 'YearController@index');
Route::get('{movie}/year/{year}', 'YearController@show');
Route::get('{movie}/country', 'CountryController@index');
Route::get('{movie}/country/{country}', 'CountryController@show');


Route::get('{series}/category', 'CategoryController@index');
Route::get('{series}/category/{category}', 'CategoryController@show');
Route::get('{series}/year', 'YearController@index');
Route::get('{series}/year/{year}', 'YearController@show');
Route::get('series/country', 'CountryController@index');
Route::get('{series}/country/{country}', 'CountryController@show');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('dashboard/create', 'AdminController@create');

Route::get('/movies/edit/{id}', 'AdminController@edit');
Route::post('movies/store', 'AdminController@store');
Route::post('/movies/update', 'MovieController@update');
Route::get('/movies/delete/{id}', 'MovieController@destroy');

Route::any('/search', 'MovieController@search');

Auth::routes(['register' => false]);
