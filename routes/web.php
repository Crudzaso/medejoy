<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserController as ControllersUserController;

// Rutas protegidas para el Administrador
Route::middleware(['auth', 'can:manage-users'])->group(function () {
    Route::resource('admin/users', UserController::class);
});

// Rutas generales
Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/{id}', [UserController::class, 'show'])->name('usuarios.show');
Route::delete('usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
Route::get('usuarios/editar/{id}', [UserController::class,  'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::get('user/create', [UserController::class, 'create'])->name('usuarios.create');
Route::post('user/store', [UserController::class, 'store'])->name('usuarios.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/main', function () {
        return view('main');
    })->name('main');
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
