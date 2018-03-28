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

            $table->integer('inovator_id')->unsigned();
            $table->foreign('inovator_id')->references('id')->on('inovators')->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul');
            $table->string('kategori');
            $table->date('tanggal');
            $table->longText('ringkasan');
            $table->longText('analisis');
            $table->longText('pendekatan');
            $table->longText('kreatif_inovatif');
            $table->longText('pelaksanaan');
            $table->longText('rencana');
            $table->longText('pemangku');
            $table->longText('sumberdaya');
            $table->longText('keluaran');
            $table->longText('pemantauan');
            $table->longText('kendala');
            $table->longText('manfaat');
            $table->longText('sebelum_sesudah');
            $table->string('dokumen');
            $table->longText('keselarasan');
            $table->longText('pembelajaran');
            $table->longText('kelanjutan');
            $table->string('referensi');
            $table->string('url_video');
            $table->string('status');

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
