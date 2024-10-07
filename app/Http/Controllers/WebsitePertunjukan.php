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

class WebsitePertunjukan extends Controller{
    public function tampil_data(){
        $tampil_data =DB::table('tb_pertunjukans')
        ->join('tb_anggotas', 'tb_pertunjukans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        $select_kategori = tb_kategori::all();    
        return view('Website/pertunjukan', compact('tampil_data','select_kategori'));
    }
    public function detail_pertunjukan(Request $request){             
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_pertunjukans')
        ->join('tb_anggotas', 'tb_pertunjukans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pertunjukans.id_pertunjukan','like',"%".$cari."%")
        ->get();
        // 
        $select_kategori = tb_kategori::all();    
        return view('Website/detail_pertunjukan', compact('tampil_data','select_kategori'));
    }

}
