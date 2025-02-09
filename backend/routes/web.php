<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//To send email verification link
Route::post('email/verify', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return response()->json(['message' => 'Verification email sent!']);
})->middleware(['auth:sanctum', 'throttle:6,1'])->name('verification.send');

//When user clicks on the email verification link
Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return response()->json(['message' => 'Email verified!']);
})->middleware(['auth:sanctum', 'signed'])->name('verification.verify');

//To check if user is verified
Route::get('email/check', function (Request $request) {
    return response()->json(['verified' => $request->user()->hasVerifiedEmail()], 200);
})->middleware(['auth:sanctum'])->name('verification.check');
