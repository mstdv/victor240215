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

Route::get('/', ['uses'=>'HomeController@index']);
Route::get('/login', ['uses'=>'HomeController@index']);
Route::post('/login', ['uses'=>'HomeController@login']);
Route::get('/logout', 'HomeController@logOut');

/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function(){
    Route::get('/', 'HomeController@index');

    Route::resource('users', 'UsersController');
    Route::resource('ordens', 'OrdensController');
});