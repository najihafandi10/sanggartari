<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_anggota extends Model
{
    use HasFactory;
    protected $tabel = "tb_anggota";
    protected $primarykey = "id";
    protected $fillable = ['id_anggota',
                            'nama_anggota',
                            'jumlah_anggota',
                            'alamat',
                            'nohp',
                            'provensi',
                            'kabupaten',
                            'kelompok_tari',
                            'username',
                            'password',
                            'bukti_tf',
                            'status'];
}
