<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Rute Utama (Tampilan tetap sama)
Route::get('/', [PortfolioController::class, 'index']);

// Rute Baru untuk fitur kontak (Controller baru)
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');
