<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function test()
    {
        return view('test');
    }


    public function login()
    {
        return view('login');
    }

    public function save_user(Request $request)
    {
        $user = new User;
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back();
    }
    public function login_user(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($request->password == $user->password) {
                echo "Welcome!";
                $request->session()->put('user', $user);
            } else {
                echo "Password incorrect";
            }
        } else {
            echo "User does not exists";
        }
    }
}
