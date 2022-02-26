<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    protected function create(Request $data){
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
    }
}
