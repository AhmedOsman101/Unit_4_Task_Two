<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    /**
     * Logs in the user with the given credentials.
     * 
     * @param Request $request - The incoming request
     * Checks if the provided email and password match a user account. 
     * If so, redirects to the appropriate dashboard based on user role.
     * If not, redirects back with an error message.
     */

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Check the role of the authenticated user
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Redirect admin to admin dashboard
                return redirect()->intended('/admin');
            } elseif ($user->role === 'user') {
                // Redirect regular user to user dashboard
                return redirect()->intended('/home');
            }
        }
        // If authentication fails, redirect back with error message
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request) {
        // Validate the user's input
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',              // Minimum length of 8 characters
                'confirmed',          // Must have a matching password confirmation field
                'regex:/[A-Z]/',      // Must contain at least one uppercase letter
                'regex:/[a-z]/',      // Must contain at least one lowercase letter
                'regex:/[0-9]/',      // Must contain at least one digit
            ],
        ]);



        // Create a new user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'type' => $request->type ? 'individual' : 'team',
        ]);

        // login the user after registration
        return $this->login($request);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
