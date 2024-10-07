<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_kategori;
use DB;
use Input;
class ControlKategori extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_kategori::all();
        return view('Master_data/data_kategori/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_kategori::max('nomor');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        return view('Master_data/data_kategori/tambah', compact('kode_otomatis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Nama Kategori Sudah Terdata..?',
        ];
        $this->validate($request,[
            'kategori' => 'required|unique:tb_kategoris',
        ], $pesan);
        tb_kategori::create([
            'nomor' => $request->nomor,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);    
        return redirect('Kategori')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_kategori::findorFail($id);
        return view('Master_data/data_kategori/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_kategori::findorFail($id);
        $edit_data->update([
            'nomor' => $request->nomor,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);
    
        return redirect('Kategori')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = tb_kategori::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Kategori')->with('delete','Data Berhasil Di Hapus.?');
    }
}
