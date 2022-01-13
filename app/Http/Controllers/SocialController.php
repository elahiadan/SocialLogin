<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    ////////     LOGIN WITH GOOGLE     ///////////

    public function RedirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function CallbackFromGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'provider_id' => 1,
                    'provider' => 'Goolge',
                    'remember_token' => $user->token,
                    'password' => Hash::make($user->name . '@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }



    ////////     LOGIN WITH FACEBOOK     ///////////

    public function RedirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function CallbackFromFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'provider_id' => 2,
                    'provider' => 'Facebook',
                    'remember_token' => $user->token,
                    'password' => Hash::make($user->name . '@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }



    ////////     LOGIN WITH LINKEDIN     ///////////

    public function RedirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function CallbackFromLinkedIn()
    {
        try {

            $user = Socialite::driver('linkedin')->user();
            $isUser = User::where('linkedin_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id' => $user->id,
                    'provider_id' => 3,
                    'provider' => 'LinkedIn',
                    'remember_token' => $user->token,
                    'password' => Hash::make($user->name . '@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }



    ////////     LOGIN WITH GITHUB     ///////////

    public function RedirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function CallbackFromGithub()
    {
        try {

            $user = Socialite::driver('github')->user();
            $isUser = User::where('github_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'provider_id' => 4,
                    'provider' => 'Github',
                    'remember_token' => $user->token,
                    'password' => Hash::make($user->name . '@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }



    ////////     LOGIN WITH TWITER     ///////////

    public function RedirectToTwiter()
    {
        return Socialite::driver('twiter')->redirect();
    }

    public function CallbackFromTwiter()
    {
        try {

            $user = Socialite::driver('twiter')->user();
            $isUser = User::where('twiter_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                return redirect('/home');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twiter_id' => $user->id,
                    'provider_id' => 5,
                    'provider' => 'Twiter',
                    'remember_token' => $user->token,
                    'password' => Hash::make($user->name . '@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
