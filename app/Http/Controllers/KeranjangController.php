<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    protected function store($barang, $user){
        // masukkan data ke db keranjang
        try {
            $isExist = DB::table('keranjang')->where([
                ['id_barang', '=', $barang],
                ['id_user', '=', $user],
                ])->exists();
            if($isExist != true){
                try {
                    DB::table('keranjang')->insert([
                        'id_barang' => $barang,
                        'id_user' => $user,
                        'jumlah' => 1,
                    ]);
                    $dataBarang = DB::table('barang')->where('id', $barang)->get();
                    if(session()->has('jumlah')){
                        $jumlah = session()->get('jumlah') + 1;
                        $total = session()->get('total');
                        foreach($dataBarang as $b){
                            $total = $total + $b->harga;
                        }
                        session()->put('jumlah', $jumlah);
                        session()->put('total', $total);
                    } else{
                        $jumlah = 1;
                        foreach($dataBarang as $b){
                            $total = $b->harga;
                        }
                        session()->put('jumlah', $jumlah);
                        session()->put('total', $total);
                    }
                    session()->flash('berhasil', 'Berhasil memasukkan barang ke keranjang');
                    return redirect("/detail/$barang");
                } catch (\Throwable $th) {
                    session()->flash('error', $th->getMessage());
                    return redirect("/detail/$barang");
                }
                
            } else{
                $tambahJumlah = DB::table('keranjang')->where([
                    ['id_barang', '=', $barang],
                    ['id_user', '=', $user],
                    ])->get();
                foreach($tambahJumlah as $tambah){
                    $jumlah = $tambah->jumlah;
                    DB::table('keranjang')->where([
                        ['id_barang', '=', $barang],
                        ['id_user', '=', $user],
                        ])->update(['jumlah' => $jumlah+1 ]);
                }
                session()->flash('berhasil', 'Berhasil menambahkan jumlah barang');
                return redirect("/detail/$barang");
            }
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return redirect("/detail/$barang");
        }
    }

    protected function getData(){
        $idUser = session()->get('user')['id'];
        $keranjang = DB::table('keranjang')->where('id_user', $idUser)->get();
        $allBarang= new Collection();
        foreach($keranjang as $k){
            $barang = DB::table('barang')->where('id', $k->id_barang)->get();
            $allBarang = $allBarang->merge($barang);
        }
        return view('barang/keranjang', ['keranjang' => $keranjang, 'allBarang' => $allBarang]);
    }
}
