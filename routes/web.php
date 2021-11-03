<?php

Route::get('user','UserController@index');

Route::get('user/add','UserController@add');
Route::post('user/add','UserController@create');

Route::get('reserve','ReserveController@index');
