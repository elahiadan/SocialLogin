<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// LOGIN WITH GOOGLE
Route::get('login/google', [SocialController::class,'RedirectToGoogle']);
Route::get('login/google/callback',[SocialController::class,'CallbackFromGoogle']);

// LOGIN WITH LINKEDIN
Route::get('login/linkedin', [SocialController::class,'RedirectToLinkedIn']);
Route::get('login/linkedin/callback',[SocialController::class,'CallbackFromLinkedIn']);

// LOGIN WITH GITHUB
Route::get('login/github', [SocialController::class,'RedirectToGithub']);
Route::get('login/github/callback',[SocialController::class,'CallbackFromGithub']);

// LOGIN WITH FACEBOOK
Route::get('login/facebook', [SocialController::class,'RedirectToFacebook']);
Route::get('login/facebook/callback',[SocialController::class,'CallbackFromFacebook']);

// LOGIN WITH TWITER
Route::get('login/twiter', [SocialController::class,'RedirectToTwiter']);
Route::get('login/twiter/callback',[SocialController::class,'CallbackFromTwiter']);
