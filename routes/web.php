<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\RecomendacionController;

// Public pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/agendar-cita', [PageController::class, 'agendarCita'])->name('agendar-cita');
Route::get('/veterinarios', [PageController::class, 'veterinarios'])->name('veterinarios');
Route::get('/recomendaciones', [PageController::class, 'recomendaciones'])->name('recomendaciones');
Route::get('/recomendaciones/{recomendacion:slug}', [RecomendacionController::class, 'show'])->name('recomendaciones.show');
Route::get('/testimonios', [PageController::class, 'testimonios'])->name('testimonios');
Route::post('/testimonios', [TestimonioController::class, 'store'])->name('testimonios.store');
Route::get('/chat-en-vivo', [PageController::class, 'chat'])->name('chat');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
