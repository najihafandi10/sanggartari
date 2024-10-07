<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_kegiatan;
use App\Models\tb_anggota;
use App\Models\tb_jenis_kelompok;
use DB;
use Input;
class ControlKegiatan extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_kegiatans')
        ->join('tb_anggotas', 'tb_kegiatans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/data_kegiatan/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_kegiatan::max('id_kegiatan');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_jenis = tb_jenis_kelompok::all();
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->where('tb_anggotas.kelompok_tari','like',"%".$cari."%")
        ->get();
        return view('Master_data/data_kegiatan/tambah', compact('kode_otomatis','tampil_data','select_jenis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Maaf Kegiatan Anggota Sudah Terdata..?',
        ];
        $this->validate($request,[
            'uraian' => 'required|unique:tb_kegiatans',
        ], $pesan);
        if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);
        tb_kegiatan::create([
            'id_kegiatan' => $request->id_kegiatan,
            'uraian' => $request->uraian,
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'keterangan' => $request->keterangan,
            'upload' => $filename,
        ]);    
        }
        return redirect('Kegiatan')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_kegiatan::findorFail($id);
        return view('Master_data/data_kegiatan/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_kegiatan::findorFail($id);
        $edit_data->update([
            'id_kegiatan' => $request->id_kegiatan,
            'uraian' => $request->uraian,
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'keterangan' => $request->keterangan,
        ]);
    
        return redirect('Kegiatan')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_foto(Request $request){
            if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);

            $edit_data = tb_kegiatan::where('id_kegiatan', $request->id_kegiatan)
            ->update([
                'upload' => $filename
            ]);
        }
    
        return redirect('Kegiatan')->with('success','Foto Berhasil Di Edit.?');
    }
    public function hapus_data($id){
        $hapus_data = tb_kegiatan::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Kegiatan')->with('delete','Data Berhasil Di Hapus.?');
    }
}
