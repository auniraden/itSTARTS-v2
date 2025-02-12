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
    public function checkEmail(Request $request)
    {
        $request->validate(['email' => 'required' | 'email']);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json(['exists' => true, 'message' => 'Nice! Email found!'], 200);
        } else {
            return response()->json(['exists' => false, 'message' => 'Email not found.', 200]);
        }
    }

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
