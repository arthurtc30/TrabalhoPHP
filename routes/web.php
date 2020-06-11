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
    return view('welcome');
});

Route::get('/hello/{text?}', 'HelloWorldController@index')->name('hello');

Route::get('trabalho', 'IndexViewController@index')->name('trabalho');

Route::match(['get', 'post'], 'criarTeste', 'IndexViewController@criarTeste')->name('criarTesteRoute');

Route::match(['get', 'post'], 'oi', 'HelloWorldController@digaOi');