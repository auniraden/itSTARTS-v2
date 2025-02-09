<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Verified;
use App\Models\User;
use Carbon\Carbon;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $user = User::where('email', $request->query('email'))->first();

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }
        if ($user->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email verified.'], 200);
        }

        //Mark email as verified
        $user->markEmailAsVerified();
        event(new Verified($user));

        return redirect()->to(env('FRONTEND_URL') . '/register?email=' . $user->email);
    }
}
