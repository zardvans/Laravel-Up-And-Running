<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return 'Path is /dashboard';
    });
    Route::get('users', function () {
        return 'Path is /dashboard/users';
    });
});

Route::domain('api.laravel-up-and-running.test')->group(function () {
    Route::get('/', function () {
        return 'API Users';
    });
});
Route::domain('{account}.laravel-up-and-running.test')->group(function () {
    Route::get('/', function ($account) {
        return "Account Name: $account";
    });
    Route::get('/users/{id}', function ($account, $id) {
        return "Account Name: $account, User ID: $id";
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
