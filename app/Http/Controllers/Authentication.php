<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class Authentication extends Controller
{
    //do the login
    public function userLogin(Request $request){
        $authvalid = auth()->attempt([
            'username' => $request->user_username,
            'password' => $request -> user_password
        ]);
        if(!$authvalid){
            return redirect()->back()->withErrors(new MessageBag(['Username or password is incorrect.']));
        }

        if($request->remember_me){
            Cookie::queue('cookie_username',$request->user_username);
            Cookie::queue('cookie_password',$request->user_password);
            // Session::put('session_info', 'user_username');
        }
        else{
            Cookie::queue(Cookie::forget('cookie_username'));
            Cookie::queue(Cookie::forget('cookie_password'));
        }
        return redirect('/');
    }

    //do the logout
    public function userLogout(){
        Auth::logout();
        // Session::flush();
        return redirect('/');
    }
}
