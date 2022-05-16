<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PesananController extends Controller
{
    protected function pesanBarang(Request $data){
        try {
            $idUser = session()->get('user')['id'];
            $total = $data['total'];
            for ($i = 0; $i < $total; $i++){
                $idBarang = $data["id_barang$i"];
                $jumlah = $data["jumlah$i"];
                DB::table('pesanan')->insert([
                    'id_barang' => $idBarang,
                    'id_user' => $idUser,
                    'jumlah' => $jumlah,
                ]);
                DB::table('keranjang')->where([
                    ['id_barang', '=', $idBarang],
                    ['id_user', '=', $idUser],
                ])->delete();
            }
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
            } else{
                session()->forget('jumlah');
                session()->forget('total');
            }
            $allBarang = new Collection();
            for($i = 0; $i < $total; $i++){
                $idBarang = $data["id_barang$i"];
                $jumlah = $data["jumlah$i"];
                $barangPesanan = DB::table('barang')->where([
                    'id' => $idBarang,
                ])->get();
                $allBarang = $allBarang->merge($barangPesanan);
                session()->put("jumlahBarang$idBarang", $jumlah);
            }
            session()->put('allBarang', $allBarang);
            return redirect('/pesanan');
        } catch (\Throwable $th) {
            $data->session()->flash('error', $th->getMessage());
            return redirect('/keranjang');
        }
        
    }

    protected function getPesananTadi(){
        $allBarang = session()->get('allBarang');
        return view('barang/pesanan', ['allBarang' => $allBarang]);
    }

    protected function downloadPesanan($id){
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        $allBarang = DB::table('barang')->where('id', $pesanan[0]->id_barang)->get();
        session()->put($allBarang[0]->id, $pesanan[0]->jumlah);
        return view('barang/pesanan', ['allBarang' => $allBarang]);
    }
}
