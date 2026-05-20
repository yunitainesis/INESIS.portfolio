<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Rute Utama (Tampilan tetap sama)
Route::get('/', [PortfolioController::class, 'index']);

// Rute Baru untuk fitur kontak (Controller baru)
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

// Rute sementara untuk seeding database di production (Railway)
Route::get('/run-seeder', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'ProjectSeeder']);
        return 'Database seeded successfully! Please check your projects section.';
    } catch (\Exception $e) {
        return 'Error seeding database: ' . $e->getMessage();
    }
});
