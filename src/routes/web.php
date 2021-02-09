<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Ubitcorp\DebugHost\Http\Controllers'], function() {
    Route::get('logs', 'LogsController@index')->name('logs');
    Route::post('logs', 'LogsController@post');
});