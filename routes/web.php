<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopsisController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[AuthController::class, 'register']);
Route::post('/register',[AuthController::class, 'register']);

Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'login']);

Route::get('/topsis', [TopsisController::class, 'index']);
Route::post('/topsis', [TopsisController::class, 'index']);


Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::post('/dashboard', [DashboardController::class, 'dashboard']);

