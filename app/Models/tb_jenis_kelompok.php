<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jenis_kelompok extends Model
{
    use HasFactory;
    protected $tabel = "tb_jenis_kelompok";
    protected $primarykey = "id";
    protected $fillable = ['nomor',
                            'nama_kelompok',
                            'keterangan'];
}
