<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_jenis_administrasi;
use DB;
use Input;
class ControlJenisAdministrasi extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_jenis_administrasi::all();
        return view('Master_data/data_jenis_administrasi/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_jenis_administrasi::max('id_jenis');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        return view('Master_data/data_jenis_administrasi/tambah', compact('kode_otomatis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Nama Jenis Sudah Terdata..?',
        ];
        $this->validate($request,[
            'jenis' => 'required|unique:tb_jenis_administrasis',
        ], $pesan);
        tb_jenis_administrasi::create([
            'id_jenis' => $request->id_jenis,
            'jenis' => $request->jenis,
            'biaya' => $request->biaya,
        ]);    
        return redirect('Jenis_administrasi')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_jenis_administrasi::findorFail($id);
        return view('Master_data/data_jenis_administrasi/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_jenis_administrasi::findorFail($id);
        $edit_data->update([
            'id_jenis' => $request->id_jenis,
            'jenis' => $request->jenis,
            'biaya' => $request->biaya,
        ]);
    
        return redirect('Jenis_administrasi')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = tb_jenis_administrasi::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Jenis_administrasi')->with('delete','Data Berhasil Di Hapus.?');
    } 
}
