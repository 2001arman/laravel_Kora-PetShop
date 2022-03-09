<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected function create(Request $data){
        try {
            if($data['password'] == $data['confirm-password']){
                User::create([
                    'nama' => $data['name'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'alamat' => $data['alamat'],
                    'no_hp' => $data['no_hp'],
                    'password' => Hash::make($data['password']),
                ]);
                session('berhasil', 'berhasil daftar');
                return redirect('/masuk');
            } else{
                $data->session()->flash('error', 'Password dan Konfirmasi Password tidak sama');
                return redirect('/daftar');
            }
        } catch (\Throwable $th) {
            if($th->getCode() == 23000){
                $data->session()->flash('error', 'username atau email sudah ada');
                    return redirect('/daftar');
            } else{
                $data->session()->flash('error', $th->getMessage());
                    return redirect('/daftar');
            }
        }
        
    }
}
