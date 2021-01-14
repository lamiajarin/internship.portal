<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEntry extends Controller
{
    //

    public function user_registration()
    {
        return view('frontend.users.registration');
    }

    public function user_registration_post(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|min:2',
            'lname' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'phone' => "required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/",
            'password' => 'required'
        ]);


        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect()->back()->with('message', 'User Registration Successful.');

    }

    public function user_login()
    {
        return view('frontend.users.login');
    }

    public function user_login_post(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $login_info = $request->except(['_token']);

        if (\auth()->attempt($login_info)) {

            $role = \auth()->user()->role;

            if ($role == 'employee') {
                return redirect()->intended(route('employee'));

            } elseif ($role == 'candidate') {
                return redirect()->intended(route('candidate'));
            }
        }

        return redirect()->route('user_login')->withErrors('Invalid Credentials');

    }

    public function user_logout()
    {
        //logout here
        Auth::logout();
        return redirect()->route('user_login');


    }
}
