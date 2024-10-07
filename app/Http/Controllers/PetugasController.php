<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
// model
use App\Models\User;

class PetugasController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function tampil_data(){
        $tampil_data = User::all();
        return view('Master_data/data_petugas/tabel', compact('tampil_data'));
    }
    public function tambah_data(){
        return view('Master_data/data_petugas/tambah');
    }
    public function simpan_data(Request $request){        
        $pesan = [
            'unique' => ':Nama Petugas Sudah Terdaftar',
        ];
        $this->validate($request,[
            'name' => 'required|unique:users',
        ], $pesan);
        User::create([
            'name' => $request->name,         
            'email' => $request->email,           
            'password' => bcrypt($request->password),
        ]);    
        return redirect('Petugas')->with('success','Data Berhasil Di Simpan.?');
    }
    public function edit_data($id){             
        $edit_data = User::findorFail($id);
        return view('Master_data/data_petugas/edit', compact('edit_data'));
    }
    public function aksi_edit_data(Request $request, $id){
        $edit_data = User::findorFail($id);
        $edit_data->update([
            'name' => $request->name,         
            'email' => $request->email,           
            'password' => bcrypt($request->password),
        ]);
    
        return redirect('Petugas')->with('success','Data Berhasil Di Edit.?');
    }

    public function hapus_data($id){
        $hapus_data = User::findorFail($id);
        $hapus_data -> delete();
        return redirect('Petugas')->with('delete','Data Berhasil Di Hapus.?');
    }
}
