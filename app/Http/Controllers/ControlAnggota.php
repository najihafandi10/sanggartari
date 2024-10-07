<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_anggota;
use App\Models\tb_jenis_kelompok;
use DB;
use Input;

class ControlAnggota extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
    public function tampil_data(){
        $tampil_data = DB::table('tb_anggotas')
        ->orderBy('id','DESC')->get();
        return view('Master_data/data_anggota/tabel', compact('tampil_data'));
    }
    public function edit_data($id){             
        $edit_data = tb_anggota::findorFail($id);
        $select_jenis = tb_jenis_kelompok::all();
        return view('Master_data/data_anggota/edit', compact('edit_data','select_jenis'));
    }
    public function aksi_edit_data_anggota(Request $request, $id){
        $edit_data = tb_anggota::findorFail($id);
        $edit_data->update([
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'jumlah_anggota' => $request->jumlah_anggota,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'provensi' => $request->provensi,
            'kabupaten' => $request->kabupaten,
            'kelompok_tari' => $request->kelompok_tari,
        ]);
    
        return redirect('Anggota')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_anggota::where('id_anggota', $request->id_anggota)
        ->update([
            'status' => $request->status,
        ]);
    
        return redirect('Anggota')->with('success','Data Berhasil Di Edit.?');
    }


    public function hapus_data($id){
        $hapus_data = tb_anggota::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Anggota')->with('delete','Data Berhasil Di Hapus.?');
    } 
}
