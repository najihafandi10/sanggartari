<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kehadiran extends Model
{
    use HasFactory;
    protected $tabel = "tb_kehadiran";
    protected $primarykey = "id";
    protected $fillable = ['id_kehadiran',
                            'id_anggota',
                            'id_jadwal',
                            'hari',
                            'tgl_hadir',
                            'status_hadir',
                            'keterangan'];
}
