<?php

Auth::routes();

Route::get('/', 'DashboardController@index')->middleware('auth');
