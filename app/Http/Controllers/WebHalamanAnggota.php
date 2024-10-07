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
class WebHalamanAnggota extends Controller{
    public function index(){
        $select_kategori = tb_kategori::all();
        $check = Session::get('nama_anggota');
        // check penyuluhan
        $tampil_data =DB::table('tb_anggotas')
        ->where('tb_anggotas.nama_anggota','like',"%".$check."%")
        ->get();
        // tampil pelatih
        $tampil_pelatih = tb_pelatih::all();
        // hitung kehadiran anggota
        $check_id = Session::get('id_anggota');
        $jumlah_kehadiran =DB::table('tb_kehadirans')
        ->where('tb_kehadirans.status_hadir','like',"Aktif")
        ->where('tb_kehadirans.id_anggota','like',"%".$check_id."%")
        ->count();
        return view('Website/Halaman_anggota/halaman', compact('tampil_data','select_kategori','tampil_pelatih','jumlah_kehadiran'));
    }
}
