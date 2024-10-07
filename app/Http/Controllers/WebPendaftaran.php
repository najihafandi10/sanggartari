<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
// model
use App\Models\tb_anggota;
use App\Models\tb_jenis_kelompok;
use App\Models\tb_kategori;
use DB;
use Input;
class WebPendaftaran extends Controller{
    public function Daftar_anggota(Request $request){
        $select_kategori = tb_kategori::all();    
        $noUrutAkhir = tb_anggota::max('id_anggota');
        $kode_otomatis=sprintf("%03s", $noUrutAkhir + 1);
        // 
        $select_jenis = tb_jenis_kelompok::all();
        return view('Website/pendaftaran', compact('kode_otomatis','select_jenis','select_kategori'));
    }
    public function Registrasi(Request $request){
        $pesan = [
            'unique' => ': Nama Anggota Sudah Terdaftar..?',
        ];
        $this->validate($request,[
            'nama_anggota' => 'required|unique:tb_anggotas',
            'username' => 'required|unique:tb_anggotas',
            'password' => 'required|unique:tb_anggotas',
        ], $pesan);
        if ($request->hasfile('bukti_tf')) {
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('bukti_tf')->getClientOriginalName());
            $request->file('bukti_tf')->move(public_path('Berkas'), $filename);
        tb_anggota::create([
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'jumlah_anggota' => $request->jumlah_anggota,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'provensi' => $request->provensi,
            'kabupaten' => $request->kabupaten,
            'kelompok_tari' => $request->kelompok_tari,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'bukti_tf' => $filename,
            'status' => 'Anggota Baru',
        ]);
    }
        return redirect('Login_anggota')->with('success','Data Berhasil Terdaftar.?');
    }

    public function Login_anggota(){
        $select_kategori = tb_kategori::all();
        return view('Website/Login_web', compact('select_kategori'));
    }
    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = tb_anggota::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_anggota',$data->id_anggota);
                Session::put('nama_anggota',$data->nama_anggota);
                Session::put('jumlah_anggota',$data->jumlah_anggota);
                Session::put('alamat',$data->alamat);
                Session::put('nohp',$data->nohp);
                Session::put('provensi',$data->provensi);
                Session::put('kabupaten',$data->kabupaten);
                Session::put('kelompok_tari',$data->kelompok_tari);
                Session::put('status',$data->status);
                Session::put('Login_anggota',TRUE);
                return redirect('Halaman_anggota');
            }else{
                return redirect('Login_anggota')->with('error','Password atau Email Tidak Sesuai !');
            }
        }
    }
    public function logout(){
        Session::flush();
        return redirect('Login_anggota')->with('success','Terimakasih Sudah Mengunjungi Aplikasi.?');
    }
}
