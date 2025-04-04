<?php

use Laravel\Passport\Http\Controllers\AccessTokenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Token generate karne ke liye
Route::post('/oauth/token', [AccessTokenController::class, 'issueToken'])
    ->middleware(['throttle']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);