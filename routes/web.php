<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::view('/dorm-room', 'songs.dorm');
Route::view('/studio', 'songs.studio');
Route::view('/remix', 'songs.remix');
