<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/twos', function () {
    return view('twos');
});

Route::get('/threes', function () {
    return view('threes');
});

Route::get('/fourths', function () {
    return view('fourths');
});


