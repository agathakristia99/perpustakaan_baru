<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route Buku
Route::get('/books', [BookController::class, 'index']);

// Route Kategori
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

// Route Anggota
Route::get('/members', [MemberController::class, 'index']);
