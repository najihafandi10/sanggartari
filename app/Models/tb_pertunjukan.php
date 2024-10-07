<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pertunjukan extends Model
{
    use HasFactory;
    protected $tabel = "tb_pertunjukan";
    protected $primarykey = "id";
    protected $fillable = ['id_pertunjukan',
                            'uraian',
                            'id_anggota',
                            'deskripsi',
                            'upload'];
}
