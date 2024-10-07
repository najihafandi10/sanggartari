<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_kategori;
use DB;
use Input;
class WebsiteKegiatan extends Controller{
    public function tampil_data(){
        $tampil_data =DB::table('tb_kegiatans')
        ->join('tb_anggotas', 'tb_kegiatans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        $select_kategori = tb_kategori::all();    
        return view('Website/kegiatan', compact('tampil_data','select_kategori'));
    }
    public function detail_kegiatan(Request $request){
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_kegiatans')
        ->join('tb_anggotas', 'tb_kegiatans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_kegiatans.id_kegiatan','like',"%".$cari."%")
        ->get();
        $select_kategori = tb_kategori::all();    
        return view('Website/detail_kegiatan', compact('tampil_data','select_kategori'));
    }

}
