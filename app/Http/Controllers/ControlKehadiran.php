<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_kehadiran;
use App\Models\tb_anggota;
use DB;
use Input;
class ControlKehadiran extends Controller
{
     public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_anggota::all();
        return view('Master_data/data_kehadiran/tabel', compact('tampil_data'));
    }
    public function hapus_data(Request $Request){
        tb_kehadiran::where('id_kehadiran', $request->id_kehadiran)
        -> delete([
            'id_kehadiran' => $request->id_kehadiran
        ]);
        return redirect('Jadwal')->with('delete','Data Berhasil Di Hapus.?');
    } 
public function laporan(){
        $tampil_data = tb_anggota::all();
        return view('Master_data/data_kehadiran/laporan', compact('tampil_data'));
    }
}
