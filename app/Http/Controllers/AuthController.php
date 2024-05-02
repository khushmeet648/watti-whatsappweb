<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(){
       return view('Auth.login');
   }

   public function register(){
    return view('Auth.Register');
}

public function loginPost(Request $request){
    $request->validate([
        // these email,password pass are name= "" given in login view
        'email'=>'required',
        'password'=> 'required'
    ]);
   
    $credentials = $request->only('email','password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route('inbox'))->with("success","Login Successfully");
    }
    return redirect(route('login'))->with("error","Login details invalid");
     // error is the key and LDI is the Value
}

public function registerPost(Request $request){
    $request->validate([

        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=> 'required'
    ]);
  
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    $user= User::create($data);
    if(!$user){
        return redirect(route('register'))->with("error","Registration failed");
    }
    return redirect(route('login'))->with("success","Registration Success");
}

public function logout(){
    //    Session::flush();
       Auth::logout(); 
       return redirect(route('login'));
}


}
