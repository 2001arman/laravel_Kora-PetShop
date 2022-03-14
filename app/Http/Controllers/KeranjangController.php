<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    protected function store($barang, $user){
        // masukkan data ke db keranjang
        try {
            $isExist = DB::table('keranjang')->where([
                ['id-barang', '=', $barang],
                ['id-user', '=', $user],
                ])->exists();
            if($isExist != true){
                try {
                    DB::table('keranjang')->insert([
                        'id-barang' => $barang,
                        'id-user' => $user,
                        'jumlah' => 1,
                    ]);
                    session()->flash('error', 'data kosong berhasil masukin data');
                    return redirect("/detail/$barang");
                } catch (\Throwable $th) {
                    session()->flash('error', $th->getMessage());
                    return redirect("/detail/$barang");
                }
                
            } else{
                session()->flash('error', $isExist);
                return redirect("/detail/$barang");
            }
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return redirect("/detail/$barang");
        }
    }
}
