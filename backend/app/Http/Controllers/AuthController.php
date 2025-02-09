<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Mail\VerificationEmail;
use App\Models\User;


class AuthController extends Controller
{
    public function sendVerificationEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|unique:users, email']);

        $user = User::create([
            'email' => $request->email,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            ['email' => $user->email]
        );

        Mail::to($user->email)->send(new VerificationEmail($verificationUrl));

        return response()->json(['message' => 'Verification email sent! Please check your email.']);
    }
}
