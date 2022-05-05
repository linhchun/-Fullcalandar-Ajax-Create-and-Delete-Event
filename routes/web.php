<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\EventController;

Route::get('/getevent', 'EventController@getEvent')->name('getevent');
// Route::post('/createevent','EventController@createEvent')->name('createevent');

Route::post('/createevent','EventController@createEvent')->name('createevent');
Route::post('/deleteevent','EventController@deleteEvent')->name('deleteevent');


