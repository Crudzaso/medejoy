<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

// Rutas protegidas para el Administrador
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('admin/users', UserController::class);
});

// Rutas generales
Route::get('/', function () {
    return view('main');
});

use App\Http\Controllers\Auth\SocialiteController;

Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
Route::get('/auth/discord', [SocialiteController::class, 'redirectToDiscord'])->name('auth.discord');
Route::get('/auth/discord/callback', [SocialiteController::class, 'handleDiscordCallback']);
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/main', function () {
//        return view('main');
//    })->name('main');
//});
