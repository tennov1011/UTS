<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GoogleAuthController extends Controller

{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback()
    {
        try {
            $google_user = Socialite ::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);

                Auth::login($new_user);
                return redirect()->intended('dashboard');
            } else{
                Auth::login($user);
                return redirect()->intended('dashboard');
            }

        } catch (\Exception $e) {
            // return redirect()->to('/login');
            return redirect()->route('login')->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
   
    protected function _registerOrLoginUser($data)
    {
        $user = User::where('google_id', $data->id)->first();
        if (!$user) {
            $user = new User();
            $user->first_name = $data->name;
            $user->email = $data->email;
            $user->google_id = $data->id;
            $user->save();
        }
        Auth::login($user);
    }
}
