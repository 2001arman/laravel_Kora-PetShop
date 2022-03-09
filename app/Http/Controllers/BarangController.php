<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        //mengambil data dari table barang
        $barang = DB::table('barang')->get();

        // mengirim data barang ke halaman admin
        return view('/admin/admin', ['barang' => $barang]);
    }

    public function tambah(){

        // memanggil view tambah
        return view('/admin/tambah');
    }

    public function store(Request $request){
        try {
            DB::table('barang')->insert([
                'nama' => $request->nama,
                'gambar' => $request->gambar,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'jenis' => $request->jenis,
            ]);
            $request->session()->flash('barangSuccess', 'Berhasil menambahkan data barang');
            return redirect('/admin');
        } catch (\Throwable $th) {
            $request->session()->flash('barangError', 'Gagal menambahkan data barang!');
            return redirect('/admin/tambah');
        }
    }

    public function edit($id){
        // mengambil data barang
        $barang = DB::table('barang')->where('id', $id)->get();

        // passing data barang ke view edit
        return view('/admin/edit',['barang' => $barang]);
    }

    public function update(Request $request){
        // update data barang
        try {
            DB::table('barang')->where('id', $request->id)->update([
                'nama' => $request->nama,
                'gambar' => $request->gambar,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'jenis' => $request->jenis,
            ]);
            $request->session()->flash('barangSuccess', 'Berhasil mengubah data barang');
            return redirect('/admin');
        } catch (\Throwable $th) {
            $request->session()->flash('barangError', 'gagal mengubah data barang');
            return redirect('/admin');
        }
        
    }

    public function hapus($id){
        DB::table('barang')->where('id', $id)->delete();

        return redirect('/admin');
    }

    public function makanan(){
        //mengambil data dari table barang
        $barang = DB::table('barang')->where('jenis', 'makanan')->get();

        // mengirim data barang makanan ke halaman makanan
        return view('/barang/makanan', ['barang' => $barang]);
    }

    public function obat(){
        //mengambil data dari table barang
        $barang = DB::table('barang')->where('jenis', 'obat')->get();

        // mengirim data barang obat ke halaman obat
        return view('/barang/obat', ['barang' => $barang]);
    }

    public function perlengkapan(){
        //mengambil data dari table barang
        $barang = DB::table('barang')->where('jenis', 'perlengkapan')->get();

        // mengirim data barang perlengkapan ke halaman perlengkapan
        return view('/barang/perlengkapan', ['barang' => $barang]);
    }
}
