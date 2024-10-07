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
use App\Models\tb_anggota;
use App\Models\tb_kategori;
use App\Models\tb_pelatih;
use DB;
use Input;
class WebJadwal extends Controller{
    public function index(){
        $tampil_data =DB::table('tb_jadwals')
        ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        // hitung kehadiran anggota
        $check_id = Session::get('id_anggota');
        $jumlah_kehadiran =DB::table('tb_kehadirans')
        ->where('tb_kehadirans.status_hadir','like',"Aktif")
        ->where('tb_kehadirans.id_anggota','like',"%".$check_id."%")
        ->count();
        return view('Website/Halaman_anggota/jadwal/jadwal', compact('tampil_data','jumlah_kehadiran'));
    }
}
