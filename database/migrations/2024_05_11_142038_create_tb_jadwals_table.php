<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal');
            $table->string('id_anggota');
            $table->string('uraian');
            $table->string('hari');
            $table->string('waktu');
            $table->string('lokasi');
            $table->string('deskripsi');
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
        Schema::dropIfExists('tb_jadwals');
    }
}
