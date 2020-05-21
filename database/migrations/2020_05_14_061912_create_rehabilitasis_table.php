<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRehabilitasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehabilitasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->string('keluhan_utama');
            $table->string('riwayat_sekarang');
            $table->string('riwayat_dulu');
            $table->string('pemeriksaan_fisik');
            $table->string('diagnosis');
            $table->string('program');
            $table->string('terapi');
            $table->datetime('jam_keluar');
            $table->integer('kontrol');
            $table->datetime('tgl_kontrol')->nullable();
            $table->integer('intensif');
            $table->string('ruang_rawat')->nullable();
            $table->string('tanda_tangan');
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
        Schema::dropIfExists('rehabilitasis');
    }
}
