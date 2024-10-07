<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pembelajaran;
use App\Models\tb_anggota;
use App\Models\tb_kategori;
use DB;
use Input;
class ControlPembelajaran extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/data_pembelajaran/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_pembelajaran::max('id_pembelajaran');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        // 
        $select_kategori = tb_kategori::all();
        return view('Master_data/data_pembelajaran/tambah', compact('kode_otomatis','select_anggota','select_kategori'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Maaf Kattegori Pemebelajaran Sudah Terdata..?',
        ];
        $this->validate($request,[
            'materi' => 'required|unique:tb_pembelajarans',
        ], $pesan);
        if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);
        tb_pembelajaran::create([
            'id_pembelajaran' => $request->id_pembelajaran,
            'id_kategori' => $request->id_kategori,
            'materi' => $request->materi,
            'id_anggota' => $request->id_anggota,
            'deskripsi' => $request->deskripsi,
            'upload' => $filename,
            'status_file' => $request->status_file,
        ]);    
        }
        return redirect('Pembelajaran')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data(Request $request){             
        $cari = $request->get('edit');
        $edit_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pembelajarans.id_pembelajaran','like',"%".$cari."%")
        ->get();
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        // 
        $select_kategori = tb_kategori::all();
        return view('Master_data/data_pembelajaran/edit', compact('edit_data','select_anggota','select_kategori'));
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_pembelajaran::where('id_pembelajaran', $request->id_pembelajaran)
        ->update([
            'id_pembelajaran' => $request->id_pembelajaran,
            'id_kategori' => $request->id_kategori,
            'materi' => $request->materi,
            'id_anggota' => $request->id_anggota,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect('Pembelajaran')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_file(Request $request){
            if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);

            $edit_data = tb_pembelajaran::where('id_pembelajaran', $request->id_pembelajaran)
            ->update([
                'upload' => $filename
            ]);
        }
    
        return redirect('Pembelajaran')->with('success','Foto Berhasil Di Edit.?');
    }
    public function hapus_data(Request $request){
        $hapus_data = tb_pembelajaran::where('id_pembelajaran', $request->id_pembelajaran)
        -> delete([
            'id_pembelajaran' => $request->id_pembelajaran
        ]);
        return redirect('Pembelajaran')->with('delete','Data Berhasil Di Hapus.?');
    }
}
