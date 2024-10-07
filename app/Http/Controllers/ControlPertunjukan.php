<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pertunjukan;
use App\Models\tb_anggota;
use App\Models\tb_jenis_kelompok;
use DB;
use Input;
class ControlPertunjukan extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data =DB::table('tb_pertunjukans')
        ->join('tb_anggotas', 'tb_pertunjukans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
        return view('Master_data/data_pertunjukan/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_pertunjukan::max('id_pertunjukan');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        return view('Master_data/data_pertunjukan/tambah', compact('kode_otomatis','select_anggota'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Maaf Pertunjukan Anggota Sudah Terdata..?',
        ];
        $this->validate($request,[
            'id_anggota' => 'required|unique:tb_pertunjukans',
        ], $pesan);
        if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);
        tb_pertunjukan::create([
            'id_pertunjukan' => $request->id_pertunjukan,
            'uraian' => $request->uraian,
            'id_anggota' => $request->id_anggota,
            'deskripsi' => $request->deskripsi,
            'upload' => $filename,
        ]);    
        }
        return redirect('Pertunjukan')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data(Request $request){             
        $cari = $request->get('edit');
        $edit_data =DB::table('tb_pertunjukans')
        ->join('tb_anggotas', 'tb_pertunjukans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->where('tb_pertunjukans.id_pertunjukan','like',"%".$cari."%")
        ->get();
        // 
        $select_anggota =DB::table('tb_anggotas')
        ->where('tb_anggotas.status','like',"Aktif")
        ->get();
        return view('Master_data/data_pertunjukan/edit', compact('edit_data','select_anggota'));
    }
    public function aksi_edit_data(Request $request){
        $edit_data = tb_pertunjukan::where('id_pertunjukan', $request->id_pertunjukan)
        ->update([
            'id_pertunjukan' => $request->id_pertunjukan,
            'uraian' => $request->uraian,
            'id_anggota' => $request->id_anggota,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect('Pertunjukan')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_foto(Request $request){
            if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);

            $edit_data = tb_pertunjukan::where('id_pertunjukan', $request->id_pertunjukan)
            ->update([
                'upload' => $filename
            ]);
        }
    
        return redirect('Pertunjukan')->with('success','Foto Berhasil Di Edit.?');
    }
    public function hapus_data(Request $request){
        $hapus_data = tb_pertunjukan::where('id_pertunjukan', $request->id_pertunjukan)
        -> delete([
            'id_pertunjukan' => $request->id_pertunjukan
        ]);
        return redirect('Pertunjukan')->with('delete','Data Berhasil Di Hapus.?');
    }
}
