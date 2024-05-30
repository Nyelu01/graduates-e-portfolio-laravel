<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('Home.home');
    }

    public function about()
    {
        return view('pages.about');
    }


    public function login()
    {
        return view('Auth.login');
    }

    public function register_candidate()
    {
        return view('Auth.candidate-register');
    }

    public function register_employer()
    {
        return view('Auth.employer-register');
    }

    public function userRegister(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        // Redirect based on user role
        if ($user->role == 'candidate') {
            return redirect()->route('projects.index')->with('success', 'Logged in successfully');
        } elseif ($user->role == 'employer') {
            return redirect()->route('employer.home')->with('success', 'Logged in successfully');
        }

        // Default fallback if role is not set correctly
        return redirect()->route('home')->with('success', 'Logged in successfully');
    }




    public function userlogin(LoginRequest $request)
    {
        $user = $request->validated();
        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {

            // delete old user token
            $user->tokens()->delete();

            // creating new token
            $token = $user->createToken('user_token')->plainTextToken;

            // log in the user
            Auth::login($user);

            if (auth()->user()->role == 'candidate') {
                return redirect()->route('projects.index')->with('success', 'Logged in successfully');
            } else if (auth()->user()->role == 'employer') {
                return redirect()->route('employer.home')->with('success', 'Logged in successfully');
            }
        }

        return redirect()->route('login')->withErrors(['email' => 'No matching user found with the provided email or password']);
    }


    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete(); // Deletes all tokens for the user

        Auth::logout(); // Logs out the user


        //return response()->json(['message' => "Logged out successfully"], 200);
        return redirect('/login/form')->with('success', 'Logged out successfully'); // Redirect to login page
    }
}

