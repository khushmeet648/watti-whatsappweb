<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class AuthController extends Controller
{
   public function login(){
       return view('Auth.login');
   }

   public function register(){
    return view('Auth.Register');
}

public function loginPost(Request $request){
    // $request->validate([
    //     // these email,password pass are name= "" given in login view
    //     'email'=>'required',
    //     'password'=> 'required'
    // ]);

   
    // $credentials = $request->only('email','password');
  
    // if(Auth::attempt($credentials)){

    //     return redirect()->intended(route('inbox'))->with("success","Login Successfully");
    // }
    // return redirect(route('login'))->with("error","Login details invalid");
     // error is the key and LDI is the Value

    if(Auth::attempt([ 'email' => $request-> email, 'password' => $request->password]))
    { 
     $user = Auth:: User();
     Session::put('name', $user->name);
     Session::put('email', $user->email);
     Session::put('password', $user->password);
     return redirect()->intended(route('inbox'))->with("success","Login Successfully"); 
}
 return redirect(route('login'))->with("error","Login details invalid");
}

public function registerPost(Request $request){
    $request->validate([

        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=> 'required'
    ]);
  
   
    if( $request->type =='Admin'){
        $role = 1;
    }
    else{
        $role = 2;
    }

   
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['role'] = $request->type;
    $data['password'] = Hash::make($request->password);


    $users= User::create($data);
    if(!$users){
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
