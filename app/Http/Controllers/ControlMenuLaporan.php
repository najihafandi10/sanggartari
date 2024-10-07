<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pelatih;
use App\Models\tb_jenis_kelompok;
use App\Models\tb_pembelajaran;
use DB;
use Input;
class ControlMenuLaporan extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function menu_laporan(){
        $total_pelatih = DB::table('tb_pelatihs')->count();
        $total_anggota = DB::table('tb_anggotas')->count();
        $total_pembelajaran = DB::table('tb_pembelajarans')->count();
        $total_kegiatan = DB::table('tb_kegiatans')->count();
        $total_jadwal = DB::table('tb_jadwals')->count();
        $total_administrasi = DB::table('tb_administrasis')->count();
        $total_keuangan = DB::table('tb_keuangans')->count();
        // 
        $select_jenis = tb_jenis_kelompok::all();
        return view('Master_data/laporan/menu_laporan', compact('total_pelatih','total_anggota','total_pembelajaran','total_kegiatan','total_jadwal','total_administrasi','total_keuangan','select_jenis'));
    }
public function laporan_pelatih(Request $request){
        $tampil_data = tb_pelatih::all();
        return view('Master_data/laporan/laporan_pelatih', compact('tampil_data'));
    }
public function laporan_anggota(Request $request){
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_anggotas')
        ->join('tb_jenis_kelompoks', 'tb_anggotas.kelompok_tari', '=', 'tb_jenis_kelompoks.nama_kelompok')
        ->where('tb_anggotas.status','like',"Aktif")
        ->where('tb_anggotas.kelompok_tari','like',"%".$cari."%")
        ->get();

        return view('Master_data/laporan/laporan_anggota', compact('tampil_data'));
    }
public function laporan_pembelajaran(){
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/laporan/laporan_pembelajaran', compact('tampil_data'));
    }
public function laporan_kegiatan(){
        $tampil_data =DB::table('tb_kegiatans')
        ->join('tb_anggotas', 'tb_kegiatans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/laporan/laporan_kegiatan', compact('tampil_data'));
    }
public function laporan_jadwal(){
        $tampil_data =DB::table('tb_jadwals')
        ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/laporan/laporan_jadwal', compact('tampil_data'));
    }
public function laporan_administrasi(){
        $tampil_data =DB::table('tb_administrasis')
        ->join('tb_anggotas', 'tb_administrasis.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->join('tb_jenis_administrasis', 'tb_administrasis.id_jenis_administrasi', '=', 'tb_jenis_administrasis.id_jenis')
        ->get();
        return view('Master_data/laporan/laporan_administrasi', compact('tampil_data'));
    }
public function laporan_keuangan(){
        $tampil_data =DB::table('tb_keuangans')
        ->join('tb_administrasis', 'tb_keuangans.id_administrasi', '=', 'tb_administrasis.id_administrasi')
        ->get();
        return view('Master_data/laporan/laporan_keuangan', compact('tampil_data'));
    }
}
