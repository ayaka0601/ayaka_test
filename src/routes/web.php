<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

Route::get('/top', [AuthController::class, 'top']);
Route::post('/top', [AuthController::class, 'top']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'index']);
Route::get('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::get('/contacts', [ContactController::class, 'store']);
Route::post('/contacts', [ContactController::class, 'store']);
