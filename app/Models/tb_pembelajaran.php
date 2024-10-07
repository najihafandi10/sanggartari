<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pembelajaran extends Model
{
    use HasFactory;
    protected $tabel = "tb_pembelajaran";
    protected $primarykey = "id";
    protected $fillable = ['id_pembelajaran',
                            'id_kategori',
                            'materi',
                            'id_anggota',
                            'deskripsi',
                            'upload',
                            'status_file'];
}
