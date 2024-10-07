<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelatihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelatihs', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('nohp');
            $table->string('foto');
            $table->string('profesi');
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
        Schema::dropIfExists('tb_pelatihs');
    }
}
