<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_administrasi;
use App\Models\tb_anggota;
use App\Models\tb_jenis_administrasi;
use DB;
use Input;
class ControlAdministrasi extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_administrasis')
        ->join('tb_anggotas', 'tb_administrasis.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->join('tb_jenis_administrasis', 'tb_administrasis.id_jenis_administrasi', '=', 'tb_jenis_administrasis.id_jenis')
        ->get();
        return view('Master_data/data_administrasi/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_administrasi::max('id_administrasi');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        // 
        $select_jenis_administrasi = tb_jenis_administrasi::all();
        return view('Master_data/data_administrasi/tambah', compact('kode_otomatis','select_anggota','select_jenis_administrasi'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Maaf Anggota Sudah Melakukan Pembayaran..?',
        ];
        $this->validate($request,[
            'id_anggota' => 'required|unique:tb_administrasis',
        ], $pesan);
        tb_administrasi::create([
            'id_administrasi' => $request->id_administrasi,
            'id_anggota' => $request->id_anggota,
            'id_jenis_administrasi' => $request->id_jenis_administrasi,
            'item' => $request->item,
            'jumlah_pendaftaran' => $request->jumlah_pendaftaran,
            'bayar' => $request->bayar,
            'tanggungan' => $request->tanggungan,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'status_bayar' => $request->status_bayar,
        ]);
        return redirect('Administrasi')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data(Request $request){             
        $cari = $request->get('edit');
        $edit_data =DB::table('tb_administrasis')
        ->join('tb_anggotas', 'tb_administrasis.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->join('tb_jenis_administrasis', 'tb_administrasis.id_jenis_administrasi', '=', 'tb_jenis_administrasis.id_jenis')
        ->where('tb_administrasis.id_administrasi','like',"%".$cari."%")
        ->get();
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        // 
        $select_jenis_administrasi = tb_jenis_administrasi::all();
        return view('Master_data/data_administrasi/edit', compact('edit_data','select_anggota','select_jenis_administrasi'));
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_administrasi::where('id_administrasi', $request->id_administrasi)
        ->update([
            'id_administrasi' => $request->id_administrasi,
            'id_anggota' => $request->id_anggota,
            'id_jenis_administrasi' => $request->id_jenis_administrasi,
            'item' => $request->item,
            'jumlah_pendaftaran' => $request->jumlah_pendaftaran,
            'bayar' => $request->bayar,
            'tanggungan' => $request->tanggungan,
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'status_bayar' => $request->status_bayar,
        ]);
    
        return redirect('Administrasi')->with('success','Data Berhasil Di Edit.?');
    }
    public function hapus_data(Request $request){
        $hapus_data = tb_administrasi::where('id_administrasi', $request->id_administrasi)
        -> delete([
            'id_administrasi' => $request->id_administrasi
        ]);
        return redirect('Administrasi')->with('delete','Data Berhasil Di Hapus.?');
    }
}
