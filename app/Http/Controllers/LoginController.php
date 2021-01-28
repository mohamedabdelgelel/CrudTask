<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {


        return view('auth.login');
    }

    public function postLogin(LoginPostRequest $request)
    {

            $user = User::where('email', $request->input('email'))->first();
            if ($user == null) {
                return redirect()->back()->with('error', 'email or password is incorrect');
            }


            else {
                if (!Hash::check($request->input('password'), $user->password)) {
                    return redirect()->back()->with('error', 'email or password is incorrect');

                } else {
                    Auth::login($user);



                    return redirect('/dashboard');
                }
            }

    }

}
