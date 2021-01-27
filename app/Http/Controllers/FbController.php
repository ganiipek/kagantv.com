<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class FbController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        try {
            /*
            $fb = new \Facebook\Facebook([
                'app_id' => env('FACEBOOK_CLIENT_ID'),
                'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
                'default_graph_version' => 'v3.3',
                //'default_access_token' => '{access-token}', // optional
              ]);
            */
            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();
            
            //dd($fb->get('/246300306942742/likes', $user->token));

            if ($facebookId) {
                Auth::login($facebookId);
                return redirect('dashboard');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('john123'),
                    'profile_photo_path' => $user->avatar,
                ]);

                Auth::login($createUser);
                return redirect('dashboard');
            }
        } catch (Exception $exception) {
            //return redirect('/');
            dd($exception->getMessage());
        }
    }
}
