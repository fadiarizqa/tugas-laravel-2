<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuanganController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
});


