<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengumuman extends Model
{
    use HasFactory;
    protected $tabel = "tb_pengumuman";
    protected $primarykey = "id";
    protected $fillable = ['id_pengumuman',
                            'item',
                            'deskripsi',
                            'tgl_pengumuman',
                            'upload'];
}
