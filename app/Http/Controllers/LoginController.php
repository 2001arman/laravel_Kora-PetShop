<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                    $idUser = $user['id'];
                    $isExist = DB::table('keranjang')->where('id_user', $idUser)->exists();
                    if($isExist){
                        $keranjang = DB::table('keranjang')->where('id_user', $idUser)->get();    
                        $jumlah = 0;
                        $total = 0;
                        foreach($keranjang as $k){
                            $jumlah = $jumlah + $k->jumlah;
                            $barang = DB::table('barang')->where('id', $k->id_barang)->get();
                            foreach($barang as $b){
                                $total = $total + $b->harga * $k->jumlah;
                            }
                            
                        }
                        session()->put('jumlah', $jumlah);
                        session()->put('total', $total);
                    }
                    view('index',['user' => $user]);
                    return redirect('/');
                }
                elseif( $data['email'] == 'admin' && $data['password'] == 'admin' ){
                    session()->put('admin', 'admin');
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
        session()->flush();
        return redirect('/');
    }
}
