<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloWorldController::class, 'index']);

// Route::post('/', function() {
//     return 'This is a post route';
// });


// Route::put('/', function() {
//     return 'This is a put route';
// });


// Route::delete('/', function() {
//     return 'This is a delete route';
// });

// Route::any('/', function() {
//     return 'This is any route';
// });

// Route::match(['get', 'post'], '/', function() {
//     return 'This is a match route';
// });