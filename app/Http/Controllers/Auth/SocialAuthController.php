<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    // Redirect the user to the provider's authorization page
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Handle the response from the provider and log in the user
    public function callback($provider)
    {
        // Get the user data from the provider
        $user = Socialite::driver($provider)->user();

        // Check if the user already exists in the database
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // Log in the existing user
            Auth::login($existingUser, true);
        } else {
            // Create a new user with the provider data
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(Str::random(16)),
            ]);

            // Log in the new user
            Auth::login($newUser, true);
        }

        // Redirect the user to the home page
        return redirect('/home');
    }
}
