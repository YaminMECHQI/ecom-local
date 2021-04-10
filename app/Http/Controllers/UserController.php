<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade as Debugbar;

class UserController extends Controller
{
    public function index(){

        $user = User::find(1);
        //Debugbar::info($user->profile);

        $profile = Profile::find(1);
        //Debugbar::info($profile->user);

        $user = User::find(1); // Lazy
        Debugbar::info($user);

        $user = User::with('profile')->find(1); // Eager
        Debugbar::info($user);

        return view('users.index');
    }
}
