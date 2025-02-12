<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\AuthController;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/email/verify', [EmailVerificationController::class, 'verify'])->name('verification.verify');

Route::post('/email-check', [AuthController::class, 'checkEmail']);
Route::post('/send-verification-email', [AuthController::class, 'sendVerificationEmail']);
