<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'username' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',
            'confirmPassword' => 'required|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['confirmPassword'] = bcrypt($validatedData['confirmPassword']);

        
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please Login');

       
        return redirect('/login')->with('success', 'Registration Successfull! Please Login!');
        
        // return redirect('/register')->with('failed', 'Passwords must be the same');
       
        
        
        
        
     

    }
}
