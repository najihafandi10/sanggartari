<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_administrasi extends Model
{
    use HasFactory;
    protected $tabel = "tb_administrasi";
    protected $primarykey = "id";
    protected $fillable = ['id_administrasi',
                            'id_anggota',
                            'id_jenis_administrasi',
                            'item',
                            'jumlah_pendaftaran',
                            'bayar',
                            'tanggungan',
                            'tgl_pembayaran',
                            'status_bayar'];
}
