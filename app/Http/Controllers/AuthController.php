<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\e;

class AuthController extends Controller
{
    public function index(){
        if(!session('berhasil_login')){
        return view('auth.login');
    }else{
        // return redirect('/dashboard');
        echo '/dashboard';
    } 
}
    //

    // public function login(){
    //     echo('berhasil');
    // }
    
public function login(Request $request){
if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
    session(['berhasil_login' => true]);
    return redirect('/');
    // echo('berhasil');
    }
        return redirect('/')->with('message','Email atau Password Salah');
        // echo('gagal');
}

public function logout(Request $request){
    //Auth::logout();
    $request->session()->flush();
    $id_user = Auth::user()->id;
    // return redirect('/');
    echo('berhasil');
}

public function get_user(){
	echo "user";
}
}
