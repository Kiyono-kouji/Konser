<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tickets');
});

Route::get('/tickets', function () {
    return view('tickets');
});
