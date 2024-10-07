<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('id_kegiatan');
            $table->string('uraian');
            $table->string('id_anggota');
            $table->string('nama_anggota');
            $table->string('keterangan');
            $table->string('upload');
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
        Schema::dropIfExists('tb_kegiatans');
    }
}
