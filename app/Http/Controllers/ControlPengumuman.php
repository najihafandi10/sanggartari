<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pengumuman;
use DB;
use Input;
class ControlPengumuman extends Controller{
     public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_pengumuman::all();
        return view('Master_data/data_pengumuman/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_pengumuman::max('id_pengumuman');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        return view('Master_data/data_pengumuman/tambah', compact('kode_otomatis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Nama Jenis Sudah Terdata..?',
        ];
        $this->validate($request,[
            'item' => 'required|unique:tb_pengumumen',
        ], $pesan);
        if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);
        tb_pengumuman::create([
            'id_pengumuman' => $request->id_pengumuman,
            'item' => $request->item,
            'deskripsi' => $request->deskripsi,
            'tgl_pengumuman' => $request->tgl_pengumuman,
            'upload' => $filename
        ]);    
        }
        return redirect('Pengumuman')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_pengumuman::findorFail($id);
        return view('Master_data/data_pengumuman/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_pengumuman::findorFail($id);
        $edit_data->update([
            'id_pengumuman' => $request->id_pengumuman,
            'item' => $request->item,
            'deskripsi' => $request->deskripsi,
            'tgl_pengumuman' => $request->tgl_pengumuman,
        ]);
    
        return redirect('Pengumuman')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_upload(Request $request){
            if ($request->hasfile('upload')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('upload')->getClientOriginalName());
            $request->file('upload')->move(public_path('Berkas'), $filename);

            $edit_data = tb_pengumuman::where('id_pengumuman', $request->id_pengumuman)
            ->update([
                'item' => $request->item,
                'upload' => $filename
            ]);
        }
    
        return redirect('Pengumuman')->with('success','Foto Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = tb_pengumuman::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Pengumuman')->with('delete','Data Berhasil Di Hapus.?');
    }
}
