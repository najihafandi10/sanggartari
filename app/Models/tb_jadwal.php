<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jadwal extends Model
{
    use HasFactory;
    protected $tabel = "tb_jadwal";
    protected $primarykey = "id";
    protected $fillable = ['id_jadwal',
                            'id_anggota',
                            'uraian',
                            'hari',
                            'waktu',
                            'lokasi',
                            'deskripsi'];
}
