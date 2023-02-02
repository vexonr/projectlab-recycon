<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    //Login
    //see the form
    public function seeLogin(){
        return view('login');
    }

    //Sign Up
    //see the form
    public function seeSignup(){
        return view('signup');
    }
    //do the real signup
    public function userSignup(Request $request){
        $username = $request->user_username;
        $email = $request->user_email;
        $password = bcrypt($request->user_password);
        // $password_confirmation = $request->user_password_confirmation;

        $this->validate($request,[
            'user_username' => "required | min:3 | unique:users,username",
            'user_email' => "required | unique:users,email",
            'user_password' => "required | confirmed | min:6",
        ]);

        $insertUser = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'user',
            'created_at' => NULL,
            'created_at' => NULL,
        ];

        DB::table('users')->insert($insertUser);

        return redirect()->back();

    }

    //Edit user profile
    //showing the form
    public function seeEditProfile(){
        return view('edit_profile');
    }

    //actually does the thing
    public function editProfile(Request $request){
        $username = $request->user_username;
        $email = $request->user_email;

        $this->validate($request,[
            'user_username' => "min:3",
            'user_email' => "unique:users,email",
        ]);

        $updateUser = [
            'username' => $username,
            'email' => $email,
        ];

        DB::table('users')->where('id',Auth::user()->id)->update($updateUser);
        return redirect()->back();
    }

    //Edit password
    //Showing the form
    public function seeEditPassword(){
        return view('edit_password');
    }

    //do the actual thing
    public function editPassword(Request $request){

        $authvalid = auth()->attempt([
            'username' => Auth::user()->username,
            'password' => $request -> user_password,
        ]);
        if(!$authvalid){
            return redirect()->back()->withErrors(new MessageBag(['Old password is incorrect.']));
        }

        else{
            $password = bcrypt($request->new_user_password);

            $this->validate($request,[
                'new_user_password' => "required | confirmed | min:6",
            ]);

            $updatePassword = [
                'password' => $password,
            ];

            DB::table('users')->where('id',Auth::user()->id)->update($updatePassword);
            return redirect()->back();
        }
    }



}

