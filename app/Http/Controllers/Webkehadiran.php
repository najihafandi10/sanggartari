<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
// model
use App\Models\tb_kehadiran;
use DB;
use Input;

class Webkehadiran extends Controller{
    public function index(){
        $check = Session::get('id_anggota');
        $tampil_data =DB::table('tb_kehadirans')
        ->join('tb_anggotas', 'tb_kehadirans.id_anggota', '=', 'tb_anggotas.id_anggota')
        // ->join('tb_jadwals', 'tb_kehadirans.id_anggota', '=', 'tb_jadwals.id_anggota')
        ->where('tb_kehadirans.id_anggota','like',"%".$check."%")
        ->get();
        // 
        $noUrutAkhir = tb_kehadiran::max('id_kehadiran');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // check jadwal
        $check_jadwal =DB::table('tb_jadwals')
        ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_jadwals.id_anggota','like',"%".$check."%")
        ->get();
        // hitung kehadiran anggota
        $check_id = Session::get('id_anggota');
        $jumlah_kehadiran =DB::table('tb_kehadirans')
        ->where('tb_kehadirans.status_hadir','like',"Aktif")
        ->where('tb_kehadirans.id_anggota','like',"%".$check_id."%")
        ->count();
        return view('Website/Halaman_anggota/kehadiran/kehadiran', compact('tampil_data','kode_otomatis','check_jadwal','jumlah_kehadiran'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Anggota Sudah Melakukan Kehadiran..?',
        ];
        $this->validate($request,[
            'tgl_hadir' => 'required|unique:tb_kehadirans',
        ], $pesan);
        tb_kehadiran::create([
            'id_kehadiran' => $request->id_kehadiran,
            'id_anggota' => $request->id_anggota,
            'id_jadwal' => $request->id_jadwal,
            'hari' => $request->hari,
            'tgl_hadir' => $request->tgl_hadir,
            'status_hadir' => $request->status_hadir,
            'keterangan' => $request->keterangan,
        ]);    
        return redirect('Kehadiran_anggota')->with('success','Data Berhasil Di Simpan.?');
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_kehadiran::where('id_kehadiran', $request->id_kehadiran)
        ->update([
            'id_kehadiran' => $request->id_kehadiran,
            'id_anggota' => $request->id_anggota,
            'id_jadwal' => $request->id_jadwal,
            'hari' => $request->hari,
            'tgl_hadir' => $request->tgl_hadir,
            'status_hadir' => $request->status_hadir,
            'keterangan' => $request->keterangan,
        ]);
    
        return redirect('Kehadiran_anggota')->with('success','Data Berhasil Di Edit.?');
    }
}
