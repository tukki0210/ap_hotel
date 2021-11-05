<?php

Route::get('user','UserController@index');

Route::get('user/add','UserController@add');
Route::post('user/add','UserController@create');

Route::get('reserve','ReserveController@index');

Route::get('roomtype','RoomTypeController@index');

Route::get('room','RoomController@index');
