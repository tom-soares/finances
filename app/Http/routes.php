<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/entry', 'EntryController@index');
Route::post('/entry', 'EntryController@store');
Route::get('/list', ['as'=>'entries.list', 'uses'=> 'EntryController@list']);
Route::get('/entry/{id}/destroy', ['as'=>'entries.destroy', 'uses'=>'EntryController@destroy']);
Route::get('/entry/{id}/edit', ['as'=>'entries.edit', 'uses'=>'EntryController@editView']);
Route::post('entry/edit', 'EntryController@edit');

Route::get('/categories', 'CategoriesController@index');
