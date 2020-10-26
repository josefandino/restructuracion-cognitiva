<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'pensamientos', 'middleware' =>  ['auth']], function() {
    Route::get('/', 'ThoughtController@index')->name('thought'); 
    Route::get('/create', 'ThoughtController@create')->name('thought.create');
    Route::get('/{thought}', 'ThoughtController@show')->name('thought.show');
    Route::post('/', 'ThoughtController@store')->name('thought.store');
    Route::get('/{thought}/edit', 'ThoughtController@edit')->name('thought.edit');
    Route::patch('/{thought}', 'ThoughtController@update')->name('thought.update');
    Route::delete('/{thought}', 'ThoughtController@destroy')->name('thought.destroy');
});
