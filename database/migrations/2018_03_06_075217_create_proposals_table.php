<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');
            $table->string('judul');
            $table->string('tanggal_pelaksanaan');
            $table->string('kategori');
            $table->string('ringkasan');
            $table->string('analisis_masalah');
            $table->string('pendekatan_strategis');
            $table->string('kreatif_inovatif');
            $table->string('pelaksanaan_penerapan');
            $table->string('file_rencana_aksi');
            $table->string('pemangku_kepentingan');
            $table->string('sumber_daya');
            $table->string('keluaran_output');
            $table->string('pemantauan_evaluasi');
            $table->string('kendala_solusi');
            $table->string('manfaat');
            $table->string('perbedaan');
            $table->string('dokumen_pendukung');
            $table->string('keselarasan');
            $table->string('pembelajaran');
            $table->string('kelanjutan_replikasi');
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
        Schema::drop('proposals');
    }
}
