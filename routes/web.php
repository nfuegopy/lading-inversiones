<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return Inertia::render('Landing');
})->name('home');

Route::post('/enviar-contacto', [ContactController::class, 'enviar'])->name('contacto.enviar');
