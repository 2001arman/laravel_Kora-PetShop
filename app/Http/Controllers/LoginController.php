<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()){
            return redirect('welcome');
        } else{
            return view('login');
        }
    }
    public function actionlogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)){
            return redirect('/admin');
        } else{
            $request->session()->flash('error', 'email atau password salah');
            return redirect('/masuk');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}
