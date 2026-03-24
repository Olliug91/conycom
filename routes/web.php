<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'home'])->name('home');
Route::get('/quienes-somos', [PageController::class, 'quienesSomos'])->name('quienes-somos');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');
Route::get('/proyectos', [ProjectController::class, 'index'])->name('proyectos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [PageController::class, 'enviarContacto'])->name('contacto.enviar');

// Rutas Legales
Route::get('/aviso-legal', [\App\Http\Controllers\LegalController::class, 'avisoLegal'])->name('legal.aviso');
Route::get('/politica-privacidad', [\App\Http\Controllers\LegalController::class, 'privacidad'])->name('legal.privacidad');
Route::get('/politica-cookies', [\App\Http\Controllers\LegalController::class, 'cookies'])->name('legal.cookies');
