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
        Schema::create('kriterias', function (Blueprint $table) {
            $table->increments('idKriteria');
            $table->string('idSiswa');
            $table->string('namaSiswa');
            $table->integer('Kriteria1');
            $table->integer('Kriteria2');
            $table->integer('Kriteria3');
            $table->integer('Kriteria4');
            $table->integer('Kriteria5');
            $table->integer('Kriteria6');
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
        Schema::dropIfExists('kriterias');
    }
};
