<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticable;
use Auth;

class UserController extends Controller
{
    public function getSignup()
    {
        return view('users.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'email | required | unique:users',
            'password'=>'required | min:4'
        ]);

    $user = new User([ 
        'name'=>$request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
     ]);
    $user->save();

    Auth::login($user);

    return redirect()->route('home');

    }

    public function getSignin()
    {
        return view('users.signin');
    }

    public function postSignin(Request $request)
    {

        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('users.profile');
        }

    return redirect()->back();

    }

    public function getProfile()
    {
        return view('users.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('pages.index');
    }


}
