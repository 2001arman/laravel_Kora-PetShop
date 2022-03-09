<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getUser(){
        $id = session()->get('user')['id'];
        $user = DB::table('users')->where('id', $id)->get();
        return view('/profile/profile', ['user' => $user]);
    }

    public function getEdit(){
        $id = session()->get('user')['id'];
        $user = DB::table('users')->where('id', $id)->get();
        return view('/profile/edit', ['user' => $user]);
    }

    public function updateProfile(Request $request){
        // update data user
        try {
            DB::table('users')->where('id', $request->id)->update([
                'username' => $request->username,
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
