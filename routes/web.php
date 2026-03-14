<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/agendar-cita', [PageController::class, 'agendarCita'])->name('agendar-cita');
Route::get('/veterinarios', [PageController::class, 'veterinarios'])->name('veterinarios');
Route::get('/recomendaciones', [PageController::class, 'recomendaciones'])->name('recomendaciones');
Route::get('/testimonios', [PageController::class, 'testimonios'])->name('testimonios');
Route::get('/chat-en-vivo', [PageController::class, 'chat'])->name('chat');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');