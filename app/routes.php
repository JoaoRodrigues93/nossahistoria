<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('/registo','RegistoController@showRegisto');
Route::post('/registo','RegistoController@registar');
Route::post('/','LoginController@entrar');
Route::get('/nossahistoria','NossaHistoriaController@showJogo');
Route::post('/nossahistoria','NossaHistoriaController@doPergunta');