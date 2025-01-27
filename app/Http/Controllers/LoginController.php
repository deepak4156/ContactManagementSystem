<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }
    
    function login(){
        return view('login');
    }

    function loginPost(Request $request){
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            // Return validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the user exists
        $user = Admin::where('email', $request->input('email'))->first();

        if($user){
            // Check if the password is correct
            if(Hash::check($request->input('password'), $user->password)){
                // Log the user in
                $request->session()->put('user', $user);
                return redirect()->route('welcome');
            }
        }

        return redirect()->back()->withErrors(['error' => 'Invalid email or password.']);
    }

    function register(){
        return view('registration');
    }

    function registerPost(Request $request){
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            // Return validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

            // Create and save the user
            $user = Admin::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            if($user){
                return redirect()->route('login');
            }

            return redirect()->back()->withErrors(['error' => 'Registration failed.']);
    }
}
