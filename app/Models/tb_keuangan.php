<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_keuangan extends Model
{
    use HasFactory;
    protected $tabel = "tb_keuangan";
    protected $primarykey = "id";
    protected $fillable = ['nomor',
                            'item_keuangan',
                            'id_administrasi',
                            'jumlah_data',
                            'sub_total'];
}
