<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_jadwal;
use App\Models\tb_jenis_kelompok;
use App\Models\tb_anggota;
use DB;
use Input;
class ControlJadwal extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_jadwals')
        ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/data_jadwal/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_jadwal::max('id_jadwal');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_jenis = tb_jenis_kelompok::all();
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_anggotas')
        ->join('tb_jenis_kelompoks', 'tb_anggotas.kelompok_tari', '=', 'tb_jenis_kelompoks.nama_kelompok')
        ->where('tb_anggotas.status','like',"Aktif")
        ->where('tb_anggotas.kelompok_tari','like',"%".$cari."%")
        ->get();
        // cek data
        $cek_data = tb_jadwal::all();
        return view('Master_data/data_jadwal/tambah', compact('kode_otomatis','tampil_data','select_jenis','cek_data'));
    }
    public function simpan_data(Request $request){
        // $pesan = [
        //     'unique' => ': Anggota Sudah Di Jadwalkan..?',
        // ];
        // $this->validate($request,[
        //     'hari' => 'required|unique:tb_jadwals',
        // ], $pesan);
        tb_jadwal::create([
            'id_jadwal' => $request->id_jadwal,
            'id_anggota' => $request->id_anggota,
            'uraian' => $request->uraian,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);    
        return redirect('Jadwal')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data(Request $request){             
        $cari = $request->get('edit');
        $edit_data =DB::table('tb_jadwals')
        ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_jadwals.id_jadwal','like',"%".$cari."%")
        ->get();
        // 
        $select_anggota = tb_anggota::all();
        return view('Master_data/data_jadwal/edit', compact('edit_data','select_anggota'));
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_jadwal::where('id_jadwal', $request->id_jadwal)
        ->update([
            'id_jadwal' => $request->id_jadwal,
            'id_anggota' => $request->id_anggota,
            'uraian' => $request->uraian,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect('Jadwal')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data(Request $request){
        tb_jadwal::where('id_jadwal', $request->id_jadwal)
        -> delete([
            'id_jadwal' => $request->id_jadwal
        ]);
        return redirect('Jadwal')->with('delete','Data Berhasil Di Hapus.?');
    } 
}
