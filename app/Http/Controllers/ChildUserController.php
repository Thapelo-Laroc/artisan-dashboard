<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChildUserController extends Controller
{
    // Show the custom registration form
    public function showRegistrationForm()
    {
        return view('auth.register-child');
    }

    // Handle the custom registration request
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the current authenticated user as the parent user
        $parent = Auth::user();

        // Create a new child user with the parent user's name
        $child = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'parent_name' => $parent->name,
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('home')->with('status', 'Child user registered successfully.');
    }
}
