<?php

namespace App\Http\Controllers;

use App\Models\User; // Ensure you import the correct model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Show the login form.
     */
    public function index()
    {
        return view('Auth.login');
    }

    /**
     * Show the registration form.
     */
    public function create()
    {
        return view('Auth.signup');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'kcfapicode' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'phone_number' => 'required|string|max:15',
            'role' => 'required|string|in:admin,unit-manager,fraternal-counselor,family-member',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'kcfapicode' => $request->kcfapicode,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            'password' => Hash::make($request->password), // Hashing the password
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully.');
    }
}
