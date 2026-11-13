<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute Login & Logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Materials (Wajib Login sebagai Clerk)
Route::middleware(['auth', 'clerk'])->group(function () {
    Route::resource('materials', MaterialController::class)
         ->only(['index', 'store', 'update', 'destroy']);
});