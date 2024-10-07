<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_anggota;
use DB;
use Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()    {
        $total_pelatih = DB::table('tb_pelatihs')->count();
        $total_anggota = DB::table('tb_anggotas')->count();
        $total_pembelajaran = DB::table('tb_pembelajarans')->count();
        $total_kegiatan = DB::table('tb_kegiatans')->count();
        // tampil anggota
        $tampil_data = tb_anggota::all();
        return view('home', compact('total_pelatih','total_anggota','total_pembelajaran','total_kegiatan','tampil_data'));
    }
}
