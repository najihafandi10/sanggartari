<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pelatih extends Model
{
    use HasFactory;
    protected $tabel = "tb_pelatih";
    protected $primarykey = "id";
    protected $fillable = ['nip',
                            'nama_lengkap',
                            'alamat',
                            'jenis_kelamin',
                            'agama',
                            'nohp',
                            'foto',
                            'profesi'];
}
