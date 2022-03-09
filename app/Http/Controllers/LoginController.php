<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()){
            $user = Auth::user();
            session()->put('user', 'user');
            return view('index',['user' => $user]);
        } else{
            return null;
        }
    }
    public function actionlogin(Request $request){
        if (Auth::check()){
            $user = Auth::user();
            session()->put('user', 'user');
            return view('index',['user' => $user]);
        } else{ 
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];

            try {
                if (Auth::attempt($data)){
                    $user = Auth::user();
                    session()->put('user', $user);
                    view('index',['user' => $user]);
                    return redirect('/');
                }
                elseif( $data['email'] == 'admin' && $data['password'] == 'admin' ){
                    return redirect('/admin');
                }
                else{
                    $request->session()->flash('error', 'email atau password salah');
                    return redirect('/masuk');
                }
            } catch (\Throwable $th) {
                $request->session()->flash('error', $th);
                return redirect('/masuk');
            }
        }
    }

    public function actionlogout(){
        Auth::logout();
        session()->forget('user');
        return redirect('/');
    }
}
