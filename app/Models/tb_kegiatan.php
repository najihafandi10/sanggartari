<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kegiatan extends Model
{
    use HasFactory;
    protected $tabel = "tb_pengumuman";
    protected $primarykey = "id";
    protected $fillable = ['id_kegiatan',
                            'uraian',
                            'id_anggota',
                            'nama_anggota',
                            'keterangan',
                            'upload'];
}
