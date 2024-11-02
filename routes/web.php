<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Route untuk menampilkan daftar item dan form input
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// Route untuk menyimpan item baru dari form
Route::post('/items', [ItemController::class, 'store'])->name('items.store');