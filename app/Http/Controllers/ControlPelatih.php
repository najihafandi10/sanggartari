<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\tb_pelatih;
use DB;
use Input;
class ControlPelatih extends Controller{
    public function __construct(){
    $this->middleware('auth');
    }
public function tampil_data(){
        $tampil_data = tb_pelatih::all();
        return view('Master_data/data_pelatih/tabel', compact('tampil_data'));
    }
    public function tambah_data(Request $request){
        $noUrutAkhir = tb_pelatih::max('nip');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        return view('Master_data/data_pelatih/tambah', compact('kode_otomatis'));
    }
    public function simpan_data(Request $request){
        $pesan = [
            'unique' => ': Nama Pelatih Sudah Terdata..?',
        ];
        $this->validate($request,[
            'nama_lengkap' => 'required|unique:tb_pelatihs',
        ], $pesan);
        if ($request->hasfile('foto')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('Berkas'), $filename);
        tb_pelatih::create([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'nohp' => $request->nohp,
            'foto' => $filename,
            'profesi' => $request->profesi,
        ]);    
        }
        return redirect('Pelatih')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = tb_pelatih::findorFail($id);
        // return $edit_data;
        return view('Master_data/data_pelatih/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = tb_pelatih::findorFail($id);
        $edit_data->update([
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'nohp' => $request->nohp,
            'profesi' => $request->profesi,
        ]);
    
        return redirect('Pelatih')->with('success','Data Berhasil Di Edit.?');
    }
    public function aksi_edit_foto(Request $request){
            if ($request->hasfile('foto')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('Berkas'), $filename);

            $edit_data = tb_pelatih::where('nip', $request->nip)
            ->update([
                'foto' => $filename
            ]);
        }
    
        return redirect('Pelatih')->with('success','Foto Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = tb_pelatih::findorFail($id);
        $hapus_data -> delete();  
        return redirect('Pelatih')->with('delete','Data Berhasil Di Hapus.?');
    } 
}
