<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $email = $request->email;
        $password = $request->password;
      

    }
}
