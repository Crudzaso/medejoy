<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\OrganizerController;

// Rutas para todos los visitantes (rol "guest")
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas protegidas para usuarios autenticados (rol "client")
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:client|organizer|admin', // Roles permitidos: client, organizer, admin
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user/profile', function () {
        return view('profile');
    })->name('profile');

    // Opciones de clientes para comprar rifas (ejemplo)
    Route::get('/buy-raffles', function () {
        return view('buy-raffles');
    })->name('buy.raffles');
});

// Rutas protegidas para organizadores (rol "organizer")
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:organizer|admin', // Roles permitidos: organizer, admin
])->group(function () {
    Route::get('/dashboard/organizer', [OrganizerController::class, 'dashboard'])->name('panel.organizer');

    // Opciones específicas para organizadores
    Route::get('/raffles/create', [OrganizerController::class, 'create'])->name('raffles.create');
    Route::post('/raffles/store', [OrganizerController::class, 'store'])->name('raffles.store');
    Route::get('/raffles', [OrganizerController::class, 'index'])->name('raffles.index');
    Route::get('/raffles/{id}/edit', [OrganizerController::class, 'edit'])->name('raffles.edit');
    Route::put('/raffles/{id}', [OrganizerController::class, 'update'])->name('raffles.update');
    Route::delete('/raffles/{id}', [OrganizerController::class, 'destroy'])->name('raffles.destroy');
});

// Rutas protegidas para el administrador (rol "admin")
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin', // Solo el rol admin tiene acceso
])->group(function () {
    // Gestión de usuarios
    Route::resource('admin/users', UserController::class);

    // Panel de administración
    Route::get('/admin/panel', function () {
        return view('admin.panel');
    })->name('admin.panel');
});

// Rutas generales (sin restricciones de roles)
Route::get('sobre-nosotros', [AboutController::class, 'index'])->name('about');

// Rutas de autenticación con Socialite
Route::get('/auth/redirect/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/auth/redirect/github', [SocialiteController::class, 'redirectToGitHub'])->name('github.login');
Route::get('/auth/callback/github', [SocialiteController::class, 'handleGitHubCallback'])->name('github.callback');
