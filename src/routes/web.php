<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\CategoryController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);


//Route::get('/admin', [AuthController::class, 'find']);
//Route::post('/admin', [AuthController::class, 'search']);
//Route::get('/auth/{auth}', [AuthController::class, 'bind']);