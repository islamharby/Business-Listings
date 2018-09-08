<?php


Route::get('/','ListingsController@index' );

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::resource('listings','ListingsController');
