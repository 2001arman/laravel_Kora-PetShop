<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $user = Auth::user();
            session()->put('user', $user);
            $request->session()->flash('updateSuccess', 'Berhasil mengubah data profile');
            return redirect('/profile/edit');
        } catch (\Throwable $th) {
            $request->session()->flash('updateError', 'gagal mengubah data profile');
            return redirect('/profile/edit');
        }
    }
}
