<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('id_anggota');
            $table->string('nama_anggota');
            $table->string('jumlah_anggota');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('provensi');
            $table->string('kabupaten');
            $table->string('kelompok_tari');
            $table->string('username');
            $table->string('password');
            $table->string('bukti_tf');
            $table->string('status');
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
        Schema::dropIfExists('tb_anggotas');
    }
}
