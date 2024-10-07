<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAdministrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_administrasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_administrasi');
            $table->string('id_anggota');
            $table->string('id_jenis_administrasi');
            $table->string('item');
            $table->string('jumlah_pendaftaran');
            $table->string('bayar');
            $table->string('tanggungan');
            $table->string('tgl_pembayaran');
            $table->string('status_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_administrasis');
    }
}
