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
    return view('index');
});

// Pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/show/{id}', 'PertanyaanController@show');

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');

Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');

// Jawaban
Route::get('/jawaban/{id}', 'JawabanController@index');
Route::post('/jawaban/{id}', 'JawabanController@store');