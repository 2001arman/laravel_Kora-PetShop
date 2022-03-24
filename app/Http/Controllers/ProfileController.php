<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getUser(){
        $id = session()->get('user')['id'];
        $user = DB::table('users')->where('id', $id)->get();
        $idUser = $user[0]->id;
        $isPesananExist = DB::table('pesanan')->where('id_user', $idUser)->exists();
        if($isPesananExist){
            $jenisBarang = [];
            $hargabarang = [];
            $pesanan = DB::table('pesanan')->where('id_user', $idUser)->get();
            foreach($pesanan as $p){
                $id = $p->id_barang;
                $barang = DB::table('barang')->where('id', $id)->get();
                array_push($jenisBarang, $barang[0]->jenis);
                array_push($hargabarang, $barang[0]->harga);
            }
            session()->put('adaPesanan', true);
            return view('/profile/profile', ['user' => $user, 'pesanan' => $pesanan, 'allBarang' =>$jenisBarang, 'hargaBarang' => $hargabarang]);
        } else{
            return view('/profile/profile', ['user' => $user]);
        }
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
