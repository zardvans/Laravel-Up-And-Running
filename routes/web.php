<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\MembersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloWorldController::class, 'index']);

Route::get('/members/{id}', [MembersController::class, 'show'])->whereNumber('id')->name('members.show');

Route::group([],function () {
    Route::get('hello', function () {
        return "Hello";
    });

    Route::get('world', function () {
        return "World";
    });
});
