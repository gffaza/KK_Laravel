<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPenulis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penulis', function (Blueprint $table) {
            $table->increments('id_penulis');
            $table->string('username');
            $table->string('email');
            $table->string('pass');
            $table->enum('status', ['mahasiswa', 'alumni']);
            $table->string('instansi');
            $table->string('foto_ktm');
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
        Schema::dropIfExists('tabel_penulis');
    }
}
