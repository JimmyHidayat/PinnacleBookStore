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

    public function callbackGoogle() {
        try{
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->id)->first();

            if(!$user) {
                
                $newUser = User::create([
                    'username' => $google_user->name,
                    'email' => $google_user->email,
                    'google_id'=> $google_user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');

            } else {

                Auth::login($user);

                return redirect()->intended('dashboard');
                
            }

        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
