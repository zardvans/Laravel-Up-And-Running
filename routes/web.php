<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloWorldController::class, 'index']);

Route::get('/users/{id}/friends/{friendname}', function ($id, $friendname) {
    return "User $id's friend $friendname";
})->whereNumber('id')->whereAlpha('friendname');

Route::get('/users/{name}', function ($name) {
    return "User $name";
})->whereAlphaNumeric('name');

Route::get('/users/{id}', function ($id) {
    return "User $id";
})->whereUuid('id');

Route::get('/users/{id}', function ($id) {
    return "User $id";
})->whereUlid('id');

Route::get('/friends/types/{type}', function ($type) {
    return "Friend type $type";
})->whereIn('type', ['acquaintance', 'bestie', 'frenemy']);

// Route::get('users/{id?}', function ($id = 'default') {
//     return "User $id";
// })->where('id', '[0-9]+');

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