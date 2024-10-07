<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPertunjukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pertunjukans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pertunjukan');
            $table->string('uraian');
            $table->string('id_anggota');
            $table->string('deskripsi');
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
        Schema::dropIfExists('tb_pertunjukans');
    }
}
