<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('idSiswa');
            $table->string('nama');
            $table->int('nisn');
            $table->string('asalSekolah');
            $table->integer('nilaiIPA');
            $table->integer('nilaiIPS');
            $table->integer('nilaiMTK');
            $table->integer('nilaiBING');
            $table->integer('nilaiPPKN');
            $table->softDeletes();
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
        Schema::dropIfExists('siswa');
    }
};
