<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showlogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
        ]);
        
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('/home');
        }
        return redirect()->back();
}
}