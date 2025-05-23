<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/agendamentos', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/servicos', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/', [HomeController::class, 'index'])->name('home');

   
});

Route::middleware(['auth', 'role:admin,user'])->group(function () {
    Route::get('/agendamentos', [AppointmentController::class, 'index'])->name('appointments.index');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    // Rotas protegidas para administradores
    Route::get('/admin', [AdminController::class, 'index']);
});


Route::middleware(['auth', 'role:user'])->group(function () {
    // Rotas protegidas para usuários
    Route::get('/user', [UserController::class, 'index']);
});


require __DIR__.'/auth.php';
