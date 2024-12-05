<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/contacts', [ContactController::class, 'store']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);