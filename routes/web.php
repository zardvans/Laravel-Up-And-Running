<?php

use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('dashboard')->group(function () {
//     Route::get('/', function () {
//         return 'Path is /dashboard';
//     });
//     Route::get('users', function () {
//         return 'Path is /dashboard/users';
//     });
// });

// Route::domain('api.laravel-up-and-running.test')->group(function () {
//     Route::get('/', function () {
//         return 'API Users';
//     });
// });
// Route::domain('{account}.laravel-up-and-running.test')->group(function () {
//     Route::get('/', function ($account) {
//         return "Account Name: $account";
//     });
//     Route::get('/users/{id}', function ($account, $id) {
//         return "Account Name: $account, User ID: $id";
//     });
// });

// Route::name('users.')->prefix('users')->group(function () {
//     Route::name('comments')->prefix('comments')->group(function () {
//         Route::get('{id}', function ($id) {
//             return 'this is user.comments.show with id: ' . $id;
//         })->name('show');
//         Route::delete('/{id}', function ($id) {
//             return "this is user.comments.destroy with id: $id";
//         })->name('destroy');
//     });
// });

// Route::controller(UserController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('/{id}', 'show');
// });

// Route::fallback(function () {
//     return 'This is a fallback route.';
// });

// Route::get('invitations/{invitation}/{answer}', InvitationController::class)->name('invitations')->middleware('signed');

Route::prefix('tasks')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/', 'store');
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
