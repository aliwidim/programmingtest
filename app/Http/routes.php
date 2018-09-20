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



//Route::group(['middleware' => ['web']], function() {
	Route::get('buku','BukuController@index')->name('home');
	Route::get('buku/create','BukuController@create');
	Route::get('buku/{buku}/edit','BukuController@edit');
	Route::get('buku/{buku}','BukuController@show');
	Route::post('buku','BukuController@store');
	Route::patch('buku/{buku}','BukuController@update');
	Route::delete('buku/{buku}','BukuController@destroy');
//});

Route::get('/', function () {
    return redirect()->route('home');
});