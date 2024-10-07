<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kehadirans', function (Blueprint $table) {
            $table->id();
            $table->string('id_kehadiran');
            $table->string('id_anggota');
            $table->string('id_jadwal');
            $table->string('hari');
            $table->string('tgl_hadir');
            $table->string('status_hadir');
            $table->string('keterangan');
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
        Schema::dropIfExists('tb_kehadirans');
    }
}
