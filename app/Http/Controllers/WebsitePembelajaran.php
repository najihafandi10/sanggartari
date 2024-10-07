<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pembelajaran;
use App\Models\tb_anggota;
use App\Models\tb_kategori;
use DB;
use Input;
class WebsitePembelajaran extends Controller{
    public function tampil_data(){
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        $select_kategori = tb_kategori::all();    
        return view('Website/Vidio_pembelajaran', compact('tampil_data','select_kategori'));
    }
    public function detail_pembelajaran(Request $request){             
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pembelajarans.id_pembelajaran','like',"%".$cari."%")
        ->get();        
        // 
        $select_kategori = tb_kategori::all();
        return view('Website/pembelajaran', compact('tampil_data','select_kategori'));
    }
    public function detail_vidio_pembelajaran(Request $request){             
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pembelajarans.id_pembelajaran','like',"%".$cari."%")
        ->get();        
        // 
        $select_kategori = tb_kategori::all();
        return view('Website/detail_vidio_pembelajaran', compact('tampil_data','select_kategori'));
    }
    // view kategeri pembelajaran
    public function view_kategori_pembelajaran(Request $request){             
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pembelajarans.id_kategori','like',"%".$cari."%")
        ->get();        
        // 
        $select_kategori = tb_kategori::all();
        return view('Website/view_kategori_pembelajaran', compact('tampil_data','select_kategori'));
    }
}
