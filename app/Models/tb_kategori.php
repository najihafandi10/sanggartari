<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kategori extends Model
{
    use HasFactory;
    protected $tabel = "tb_kategori";
    protected $primarykey = "id";
    protected $fillable = ['nomor',
                            'kategori',
                            'keterangan',
                            'status'];
}
