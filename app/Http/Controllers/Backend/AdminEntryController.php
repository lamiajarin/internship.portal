<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminEntryController extends Controller
{
    //
    public function login()
    {
        return view('backend.users.login');
    }
    public function login_post(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $login_info=$request->except(['_token']);

//        dd(Auth::attempt($login_info));

        if (Auth::attempt($login_info)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }

    public function logout()
    {
        //logout here
        Auth::logout();
        return redirect()->route('login');


    }
}
