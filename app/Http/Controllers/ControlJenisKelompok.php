<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_jenis_kelompok;
use DB;
use Input;
class ControlJenisKelompok extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_jenis_kelompok::all();
        return view('Master_data/data_jenis/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_jenis_kelompok::max('nomor');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        return view('Master_data/data_jenis/tambah', compact('kode_otomatis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Nama Jenis Sudah Terdata..?',
        ];
        $this->validate($request,[
            'nama_kelompok' => 'required|unique:tb_jenis_kelompoks',
        ], $pesan);
        tb_jenis_kelompok::create([
            'nomor' => $request->nomor,
            'nama_kelompok' => $request->nama_kelompok,
            'keterangan' => $request->keterangan,
        ]);    
        return redirect('Jenis')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_jenis_kelompok::findorFail($id);
        return view('Master_data/data_jenis/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_jenis_kelompok::findorFail($id);
        $edit_data->update([
            'nomor' => $request->nomor,
            'nama_kelompok' => $request->nama_kelompok,
            'keterangan' => $request->keterangan,
        ]);
    
        return redirect('Jenis')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = tb_jenis_kelompok::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Jenis')->with('delete','Data Berhasil Di Hapus.?');
    } 
}
