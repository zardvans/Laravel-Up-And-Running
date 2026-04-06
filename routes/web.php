<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = new User([
        'name' => 'Admin User',
        'email' => 'admin@example.com'
    ]);

    return view('home', ['pageName' => 'home', 'user' => $user]);
});
