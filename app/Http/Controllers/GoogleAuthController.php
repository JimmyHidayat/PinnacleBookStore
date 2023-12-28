<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }


    public function index()
    {
        return view('register.google');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirmPassword' => 'required|same:password'
        ]);

        $validateData['google_id'] = $request['google_id'];
        $validateData['password'] = bcrypt($validateData['password']);

        if (User::where('email', $validateData['email'])->value('google_id')) {
            return redirect('/login')->with('error', 'Email already registered with Google!');
        }

        User::create($validateData);

        return redirect('/login')->with('success', 'Register Success with Google!');
    }


    public function callbackGoogle() {
        // try{
            // $google_user = Socialite::driver('google')->stateless()->user();
            // $checkUser = User::where('email', $google_user->getEmail())->first();

                // $newUser = User::create([
                //     'username' => $google_user->getName(),
                //     'email' => $google_user->getEmail(),
                //     'google_id'=> $google_user->getId(),
                //     'password' => encrypt('123456dummy')
                // ]);

                // Auth::login($newUser);

                // return redirect()->intended('dashboard');

                $google_user = Socialite::driver('google')->user();
                $findUser = User::where('google_id', $google_user->getId())->first();
            

            if($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');

            } else {

                $newUser = User::create([
                    'username' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id'=> $google_user->getId(),
                    'password' => bcrypt('123456')
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');

                // Auth::login($newUser);

                // return redirect()->intended('dashboard');

                // Auth::login($checkUser);

                // return redirect()->intended('dashboard');

            }

        // } catch (\Exception $e) {
        //     return redirect('/login');
        //     dd($e->getMessage());
        // }
    }
}
