<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlPengumuman;
use App\Http\Controllers\ControlKategori;
use App\Http\Controllers\ControlPelatih;
use App\Http\Controllers\ControlJenisKelompok;
use App\Http\Controllers\ControlAnggota;
use App\Http\Controllers\ControlKegiatan;
use App\Http\Controllers\ControlPertunjukan;
use App\Http\Controllers\ControlPembelajaran;
use App\Http\Controllers\ControlAdministrasi;
use App\Http\Controllers\ControlJenisAdministrasi;
use App\Http\Controllers\ControlKeuangan;
use App\Http\Controllers\ControlJadwal;
use App\Http\Controllers\ControlMenuLaporan;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ControlKehadiran;

use App\Http\Controllers\WebPendaftaran;
use App\Http\Controllers\WebHalamanAnggota;
use App\Http\Controllers\WebProfilAnggota;
use App\Http\Controllers\WebJadwal;
use App\Http\Controllers\Webkehadiran;


use App\Http\Controllers\WebsitePembelajaran;
use App\Http\Controllers\WebsitePertunjukan;
use App\Http\Controllers\WebsiteKegiatan;


use Illuminate\Support\Facades\Storage;
use App\Models\tb_kategori;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (Request $request) {
    $select_kategori = tb_kategori::all();    
    $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
    return view('Website/index', compact('select_kategori','tampil_data'));
});
Route::get('Website', function () {
    $select_kategori = tb_kategori::all();    
    $tampil_data =DB::table('tb_pembelajarans')
        ->join('tb_kategoris', 'tb_pembelajarans.id_kategori', '=', 'tb_kategoris.nomor')
        ->join('tb_anggotas', 'tb_pembelajarans.id_anggota', '=', 'tb_anggotas.id_anggota')
        ->get();
    return view('Website/index', compact('select_kategori','tampil_data'));
});

Route::get('/Login_Sistem', function () {
    return view('V_Login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// --------------PROSES CONTROLL MASTER DATA------------
Route::get('Pengumuman', [ControlPengumuman::class, 'tampil_data'])->name('Pengumuman');
Route::get('tambah_pengumuman', [ControlPengumuman::class, 'tambah_data'])->name('tambah_pengumuman');
Route::post('simpan_pengumuman', [ControlPengumuman::class, 'simpan_data'])->name('simpan_pengumuman');
Route::get('edit_pengumuman/{id}', [ControlPengumuman::class, 'edit_data'])->name('edit_pengumuman');
Route::post('aksi_edit_pengumuman/{id}', [ControlPengumuman::class, 'aksi_edit_data'])->name('aksi_edit_pengumuman');
Route::post('aksi_edit_upload', [ControlPengumuman::class, 'aksi_edit_upload'])->name('aksi_edit_upload');
Route::get('hapus_pengumuman/{id}', [ControlPengumuman::class, 'hapus_data'])->name('hapus_pengumuman');
// ----------proses kategori pembelajaran
Route::get('Kategori', [ControlKategori::class, 'tampil_data'])->name('Kategori');
Route::get('tambah_kategori', [ControlKategori::class, 'tambah_data'])->name('tambah_kategori');
Route::post('simpan_kategori', [ControlKategori::class, 'simpan_data'])->name('simpan_kategori');
Route::get('edit_kategori/{id}', [ControlKategori::class, 'edit_data'])->name('edit_kategori');
Route::post('aksi_edit_kategori/{id}', [ControlKategori::class, 'aksi_edit_data'])->name('aksi_edit_kategori');
Route::get('hapus_kategori/{id}', [ControlKategori::class, 'hapus_data'])->name('hapus_kategori');
// ----------data palatih
Route::get('Pelatih', [ControlPelatih::class, 'tampil_data'])->name('Pelatih');
Route::get('tambah_pelatih', [ControlPelatih::class, 'tambah_data'])->name('tambah_pelatih');
Route::post('simpan_pelatih', [ControlPelatih::class, 'simpan_data'])->name('simpan_pelatih');
Route::get('edit_pelatih/{id}', [ControlPelatih::class, 'edit_data'])->name('edit_pelatih');
Route::post('aksi_edit_pelatih/{id}', [ControlPelatih::class, 'aksi_edit_data'])->name('aksi_edit_pelatih');
Route::post('aksi_edit_foto', [ControlPelatih::class, 'aksi_edit_foto'])->name('aksi_edit_foto');
Route::get('hapus_pelatih/{id}', [ControlPelatih::class, 'hapus_data'])->name('hapus_pelatih');
// -----------data jenis
Route::get('Jenis', [ControlJenisKelompok::class, 'tampil_data'])->name('Jenis');
Route::get('tambah_jenis', [ControlJenisKelompok::class, 'tambah_data'])->name('tambah_jenis');
Route::post('simpan_jenis', [ControlJenisKelompok::class, 'simpan_data'])->name('simpan_jenis');
Route::get('edit_jenis/{id}', [ControlJenisKelompok::class, 'edit_data'])->name('edit_jenis');
Route::post('aksi_edit_jenis/{id}', [ControlJenisKelompok::class, 'aksi_edit_data'])->name('aksi_edit_jenis');
Route::get('hapus_jenis/{id}', [ControlJenisKelompok::class, 'hapus_data'])->name('hapus_jenis');
// -----proses penerimaan anggota
Route::get('Anggota', [ControlAnggota::class, 'tampil_data'])->name('Anggota');
Route::get('edit_anggota/{id}', [ControlAnggota::class, 'edit_data'])->name('edit_anggota');
Route::post('aksi_edit_data_anggota/{id}', [ControlAnggota::class, 'aksi_edit_data_anggota'])->name('aksi_edit_data_anggota');
Route::post('aksi_edit_anggota', [ControlAnggota::class, 'aksi_edit_data'])->name('aksi_edit_anggota');
Route::get('hapus_anggota/{id}', [ControlAnggota::class, 'hapus_data'])->name('hapus_anggota');
// ---------proses kegiatan anggota
Route::get('Kegiatan', [ControlKegiatan::class, 'tampil_data'])->name('Kegiatan');
Route::get('tambah_kegiatan', [ControlKegiatan::class, 'tambah_data'])->name('tambah_kegiatan');
Route::post('simpan_kegiatan', [ControlKegiatan::class, 'simpan_data'])->name('simpan_kegiatan');
Route::get('edit_kegiatan/{id}', [ControlKegiatan::class, 'edit_data'])->name('edit_kegiatan');
Route::post('aksi_edit_kegiatan/{id}', [ControlKegiatan::class, 'aksi_edit_data'])->name('aksi_edit_kegiatan');
Route::post('aksi_edit_foto_kegiatan', [ControlKegiatan::class, 'aksi_edit_foto'])->name('aksi_edit_foto_kegiatan');
Route::get('hapus_kegiatan/{id}', [ControlKegiatan::class, 'hapus_data'])->name('hapus_kegiatan');
// -----------proses pertunjukan anggota
Route::get('Pertunjukan', [ControlPertunjukan::class, 'tampil_data'])->name('Pertunjukan');
Route::get('tambah_pertunjukan', [ControlPertunjukan::class, 'tambah_data'])->name('tambah_pertunjukan');
Route::post('simpan_pertunjukan', [ControlPertunjukan::class, 'simpan_data'])->name('simpan_pertunjukan');
Route::get('edit_pertunjukan', [ControlPertunjukan::class, 'edit_data'])->name('edit_pertunjukan');
Route::post('aksi_edit_pertunjukan', [ControlPertunjukan::class, 'aksi_edit_data'])->name('aksi_edit_pertunjukan');
Route::post('aksi_edit_foto_pertunjukan', [ControlPertunjukan::class, 'aksi_edit_foto'])->name('aksi_edit_foto_pertunjukan');
Route::post('hapus_pertunjukan', [ControlPertunjukan::class, 'hapus_data'])->name('hapus_pertunjukan');
// --------proses pembelajaran
Route::get('Pembelajaran', [ControlPembelajaran::class, 'tampil_data'])->name('Pembelajaran');
Route::get('tambah_pembelajaran', [ControlPembelajaran::class, 'tambah_data'])->name('tambah_pembelajaran');
Route::post('simpan_pembelajaran', [ControlPembelajaran::class, 'simpan_data'])->name('simpan_pembelajaran');
Route::get('edit_pembelajaran', [ControlPembelajaran::class, 'edit_data'])->name('edit_pembelajaran');
Route::post('aksi_edit_pembelajaran', [ControlPembelajaran::class, 'aksi_edit_data'])->name('aksi_edit_pembelajaran');
Route::post('aksi_edit_file_pembelajaran', [ControlPembelajaran::class, 'aksi_edit_file'])->name('aksi_edit_file_pembelajaran');
Route::post('hapus_pembelajaran', [ControlPembelajaran::class, 'hapus_data'])->name('hapus_pembelajaran');
// -----------proses administrasi
Route::get('Administrasi', [ControlAdministrasi::class, 'tampil_data'])->name('Administrasi');
Route::get('tambah_administrasi', [ControlAdministrasi::class, 'tambah_data'])->name('tambah_administrasi');
Route::post('simpan_administrasi', [ControlAdministrasi::class, 'simpan_data'])->name('simpan_administrasi');
Route::get('edit_administrasi', [ControlAdministrasi::class, 'edit_data'])->name('edit_administrasi');
Route::post('aksi_edit_administrasi', [ControlAdministrasi::class, 'aksi_edit_data'])->name('aksi_edit_administrasi');
Route::post('hapus_administrasi', [ControlAdministrasi::class, 'hapus_data'])->name('hapus_administrasi');
// -------------proses jenis administrasi
Route::get('Jenis_administrasi', [ControlJenisAdministrasi::class, 'tampil_data'])->name('Jenis_administrasi');
Route::get('tambah_jenis_administrasi', [ControlJenisAdministrasi::class, 'tambah_data'])->name('tambah_jenis_administrasi');
Route::post('simpan_jenis_administrasi', [ControlJenisAdministrasi::class, 'simpan_data'])->name('simpan_jenis_administrasi');
Route::get('edit_jenis_administrasi/{id}', [ControlJenisAdministrasi::class, 'edit_data'])->name('edit_jenis_administrasi');
Route::post('aksi_edit_jenis_administrasi/{id}', [ControlJenisAdministrasi::class, 'aksi_edit_data'])->name('aksi_edit_jenis_administrasi');
Route::get('hapus_jenis_administrasi/{id}', [ControlJenisAdministrasi::class, 'hapus_data'])->name('hapus_jenis_administrasi');
// -----------proses data keuangan
Route::get('Keuangan', [ControlKeuangan::class, 'tampil_data'])->name('Keuangan');
Route::get('tambah_keuangan', [ControlKeuangan::class, 'tambah_data'])->name('tambah_keuangan');
Route::post('simpan_keuangan', [ControlKeuangan::class, 'simpan_data'])->name('simpan_keuangan');
Route::get('edit_keuangan', [ControlKeuangan::class, 'edit_data'])->name('edit_keuangan');
Route::post('aksi_edit_keuangan', [ControlKeuangan::class, 'aksi_edit_data'])->name('aksi_edit_keuangan');
Route::post('hapus_keuangan', [ControlKeuangan::class, 'hapus_data'])->name('hapus_keuangan');
// proses jadwal
Route::get('Jadwal', [ControlJadwal::class, 'tampil_data'])->name('Jadwal');
Route::get('tambah_jadwal', [ControlJadwal::class, 'tambah_data'])->name('tambah_jadwal');
Route::post('simpan_jadwal', [ControlJadwal::class, 'simpan_data'])->name('simpan_jadwal');
Route::get('edit_jadwal', [ControlJadwal::class, 'edit_data'])->name('edit_jadwal');
Route::post('aksi_edit_jadwal', [ControlJadwal::class, 'aksi_edit_data'])->name('aksi_edit_jadwal');
Route::post('hapus_jadwal', [ControlJadwal::class, 'hapus_data'])->name('hapus_jadwal');
// -------proses petugas
Route::get('Petugas', [PetugasController::class, 'tampil_data'])->name('Petugas');
Route::get('tambah_petugas', [PetugasController::class, 'tambah_data'])->name('tambah_petugas');
Route::post('simpan_petugas', [PetugasController::class, 'simpan_data'])->name('simpan_petugas');
Route::get('edit_petugas/{id}', [PetugasController::class, 'edit_data'])->name('edit_petugas');
Route::post('aksi_edit_petugas/{id}', [PetugasController::class, 'aksi_edit_data'])->name('aksi_edit_petugas');
Route::get('hapus_petugas/{id}', [PetugasController::class, 'hapus_data'])->name('hapus_petugas');
// -----check kehadiran
Route::get('Kehadiran', [ControlKehadiran::class, 'tampil_data'])->name('Kehadiran');
Route::post('hapus_kehadiran', [ControlKehadiran::class, 'hapus_data'])->name('hapus_kehadiran');
// 
Route::get('Laporan_kehadiran', [ControlKehadiran::class, 'laporan'])->name('Laporan_kehadiran');
// -----------proses menu laporan
Route::get('Menu_laporan', [ControlMenuLaporan::class, 'menu_laporan'])->name('Menu_laporan');
Route::get('Laporan_pelatih', [ControlMenuLaporan::class, 'laporan_pelatih'])->name('Laporan_pelatih');
Route::get('Laporan_anggota', [ControlMenuLaporan::class, 'laporan_anggota'])->name('Laporan_anggota');
Route::get('laporan_pembelajaran', [ControlMenuLaporan::class, 'laporan_pembelajaran'])->name('laporan_pembelajaran');
Route::get('laporan_kegiatan', [ControlMenuLaporan::class, 'laporan_kegiatan'])->name('laporan_kegiatan');
Route::get('laporan_jadwal', [ControlMenuLaporan::class, 'laporan_jadwal'])->name('laporan_jadwal');
Route::get('laporan_administrasi', [ControlMenuLaporan::class, 'laporan_administrasi'])->name('laporan_administrasi');
Route::get('laporan_keuangan', [ControlMenuLaporan::class, 'laporan_keuangan'])->name('laporan_keuangan');




// ------------Halaman pendaftaran anggota------------------
Route::get('PendaftaranAnggota', [WebPendaftaran::class, 'Daftar_anggota'])->name('PendaftaranAnggota');
Route::post('Registrasi', [WebPendaftaran::class, 'Registrasi'])->name('Registrasi');
Route::get('Login_anggota', [WebPendaftaran::class, 'Login_anggota'])->name('Login_anggota');
Route::post('Aksi_login', [WebPendaftaran::class, 'loginPost'])->name('Aksi_login');
Route::get('Halaman_anggota', [WebHalamanAnggota::class, 'index'])->name('Halaman_anggota');
Route::get('keluar_halaman', [WebPendaftaran::class, 'logout'])->name('keluar_halaman');
Route::get('Profil_anggota', [WebProfilAnggota::class, 'index'])->name('Profil_anggota');
Route::post('aksi_edit_password', [WebProfilAnggota::class, 'aksi_edit_password'])->name('aksi_edit_password');

Route::get('Check_jadwal', [WebJadwal::class, 'index'])->name('Check_jadwal');
Route::get('Kehadiran_anggota', [Webkehadiran::class, 'index'])->name('Kehadiran_anggota');
Route::post('Simpan_Kehadiran_anggota', [Webkehadiran::class, 'simpan_data'])->name('Simpan_Kehadiran_anggota');
Route::post('Edit_Kehadiran_anggota', [Webkehadiran::class, 'aksi_edit_data'])->name('Edit_Kehadiran_anggota');

// halaman website
Route::get('Vidio_pembelajaran', [WebsitePembelajaran::class, 'tampil_data'])->name('Vidio_pembelajaran');
Route::get('detail_pembelajaran', [WebsitePembelajaran::class, 'detail_pembelajaran'])->name('detail_pembelajaran');
Route::get('detail_vidio_pembelajaran', [WebsitePembelajaran::class, 'detail_vidio_pembelajaran'])->name('detail_vidio_pembelajaran');

Route::get('view_kategori_pembelajaran', [WebsitePembelajaran::class, 'view_kategori_pembelajaran'])->name('view_kategori_pembelajaran');

// pertunjukan
Route::get('WebPertunjukan', [WebsitePertunjukan::class, 'tampil_data'])->name('WebPertunjukan');
Route::get('detail_pertunjukan', [WebsitePertunjukan::class, 'detail_pertunjukan'])->name('detail_pertunjukan');
// kegiatan
Route::get('view_kegiatan', [WebsiteKegiatan::class, 'tampil_data'])->name('view_kegiatan');
Route::get('detail_kegiatan', [WebsiteKegiatan::class, 'detail_kegiatan'])->name('detail_kegiatan');