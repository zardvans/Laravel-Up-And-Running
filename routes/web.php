<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello-world');
});

Route::post('/', function() {
    return 'This is a post route';
});


Route::put('/', function() {
    return 'This is a put route';
});


Route::delete('/', function() {
    return 'This is a delete route';
});

Route::any('/', function() {
    return 'This is any route';
});

Route::match(['get', 'post'], '/', function() {
    return 'This is a match route';
});