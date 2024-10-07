<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_keuangan;
use App\Models\tb_administrasi;
use App\Models\tb_jenis_administrasi;
use DB;
use Input;
class ControlKeuangan extends Controller{
public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_keuangans')
        ->join('tb_administrasis', 'tb_keuangans.id_administrasi', '=', 'tb_administrasis.id_administrasi')
        ->get();
        return view('Master_data/data_keuangan/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_keuangan::max('nomor');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_jenis = tb_jenis_administrasi::all();
        // 
        $cari = $request->get('cari');
        $tampil_data =DB::table('tb_administrasis')
        ->join('tb_anggotas', 'tb_administrasis.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->join('tb_jenis_administrasis', 'tb_administrasis.id_jenis_administrasi', '=', 'tb_jenis_administrasis.id_jenis')
        ->where('tb_administrasis.id_jenis_administrasi','like',"%".$cari."%")
        ->get();
        // hitung jumlah data
        $jumlah_data =DB::table('tb_administrasis')
        ->join('tb_anggotas', 'tb_administrasis.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->join('tb_jenis_administrasis', 'tb_administrasis.id_jenis_administrasi', '=', 'tb_jenis_administrasis.id_jenis')
        ->where('tb_administrasis.id_jenis_administrasi','like',"%".$cari."%")
        ->count();
        // hitung sub total (SUM)
        if($cari){
            $sub_total = tb_administrasi::where('id_jenis_administrasi','like',"%".$cari."%")->sum('jumlah_pendaftaran');
        }else{
            $sub_total = tb_administrasi::sum('jumlah_pendaftaran');
        }
        return view('Master_data/data_keuangan/tambah', compact('kode_otomatis','select_jenis','tampil_data','jumlah_data','sub_total'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Item Sudah Terdata..?',
        ];
        $this->validate($request,[
            'item_keuangan' => 'required|unique:tb_keuangans',
        ], $pesan);
        tb_keuangan::create([
            'nomor' => $request->nomor,
            'item_keuangan' => $request->item_keuangan,
            'id_administrasi' => $request->id_administrasi,
            'jumlah_data' => $request->jumlah_data,
            'sub_total' => $request->sub_total,
        ]);    
        return redirect('Keuangan')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data(Request $request){
        $cari = $request->get('cari');
        $edit_data =DB::table('tb_keuangans')
        ->join('tb_administrasis', 'tb_keuangans.id_administrasi', '=', 'tb_administrasis.id_administrasi')
        ->where('tb_keuangans.nomor','like',"%".$cari."%")
        ->get();
        return view('Master_data/data_keuangan/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_keuangan::where('nomor', $request->nomor)
            ->update([
                'nomor' => $request->nomor,
                'item_keuangan' => $request->item_keuangan
            ]);
    
        return redirect('Keuangan')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data(Request $request){
        $hapus_data = tb_keuangan::where('nomor', $request->nomor)
        -> delete([
            'nomor' => $request->nomor
        ]);
        return redirect('Keuangan')->with('delete','Data Berhasil Di Hapus.?');
    }
}
