<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\OrganizerController;

// Rutas protegidas para el Administrador
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('admin/users',UserController::class);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas generales
Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UserController::class)->except(['show']);
Route::get('usuarios/{id}', [UserController::class, 'show'])->where('id', '[0-9]+')->name('usuarios.show');
Route::get('usuarios/eliminados', [UserController::class, 'trashed'])->name('usuarios.trashed');
Route::post('usuarios/{id}/restaurar', [UserController::class, 'restore'])->name('usuarios.restore');
Route::get('usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
Route::post('usuarios', [UserController::class, 'store'])->name('usuarios.store');

// Ruta Sobre Nosotros
Route::get('sobre-nosotros', [AboutController::class, 'index'])->name('about');




Route::get('/auth/redirect/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');
// Route::get('/auth/discord', [SocialiteController::class, 'redirectToDiscord'])->name('auth.discord');
// Route::get('/auth/discord/callback', [SocialiteController::class, 'handleDiscordCallback']);



Route::get('/auth/redirect/github', [SocialiteController::class, 'redirectToGitHub'])->name('github.login');
Route::get('/auth/callback/github', [SocialiteController::class, 'handleGitHubCallback'])->name('github.callback');

Route::get('dashboard/organizer',[OrganizerController::class,'dashboard'])->name('panel.organizer');