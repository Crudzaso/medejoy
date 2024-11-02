<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

// Rutas protegidas para el Administrador
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('admin/users', UserController::class);
});

// Rutas generales
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/main', function () {
        return view('main');
    })->name('main');
});
