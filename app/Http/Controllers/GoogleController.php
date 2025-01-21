<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class GoogleController extends Controller
{
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function handleGoogleCallback()
    // {
    //     try {
    //         $googleUser = Socialite::driver('google')->stateless()->user();
    //         $user = User::firstOrCreate(
    //             ['email' => $googleUser->getEmail()],
    //             [
    //                 'name' => $googleUser->getName(),
    //                 'google_id' => $googleUser->getId(),
    //                 'password' => bcrypt('password'), // Default password
    //                 'role_id' => 3,
    //             ]
    //         );

    //         Auth::login($user);

    //         return redirect('/user/dashboard');
    //     } catch (\Exception $e) {
    //         return redirect('/user/dashboard')->with('error', 'Unable to login using Google.');
    //     }
    // }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
{
    try {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'email_verified_at' => now(),
                'password' => bcrypt('default_password'), // Optional
            ]
        );

        Auth::login($user);

        return "<script>window.close(); window.opener.location.reload();</script>";
    } catch (\Exception $e) {
        return "<script>window.close(); alert('Google login failed. Please try again.');</script>";
    }
}

}

