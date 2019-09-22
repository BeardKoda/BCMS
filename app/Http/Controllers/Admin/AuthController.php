<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Login Page
    */
    public function loginForm(){
        return view('admin.auth.login');
    }

    /*
    *Login Admin
    */
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            ]);
        if (\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password])
        ){
            return redirect(route('admin.dashboard'));
        }
        return redirect(route('admin.login'))->with('error', 'Invalid Email address or Password');
    }

    /*
    *Logout Admin
    */ 
    public function logout(Request $request)
    {
        if(\Auth::check())
        {
            \Auth::logout();
            $request->session()->invalidate();
        }
        return  redirect(route('admin.login'));
    }

}
