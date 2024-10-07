<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPembelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pembelajaran');
            $table->string('id_kategori');
            $table->string('materi');
            $table->string('id_anggota');
            $table->string('deskripsi');
            $table->string('upload');
            $table->string('status_file');
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
        Schema::dropIfExists('tb_pembelajarans');
    }
}
