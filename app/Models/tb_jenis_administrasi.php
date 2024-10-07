<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jenis_administrasi extends Model
{
    use HasFactory;
    protected $tabel = "tb_jenis_administrasi";
    protected $primarykey = "id";
    protected $fillable = ['id_jenis',
                            'jenis',
                            'biaya'];
}
