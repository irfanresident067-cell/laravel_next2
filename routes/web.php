<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // tampilkan form login
Route::post('/login', [AuthController::class, 'login']); // proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // proses logout

Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->middleware('auth');

Route::get('/user/dashboard', function () {
    return view('dashboard.user');
})->middleware('auth');

use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});
