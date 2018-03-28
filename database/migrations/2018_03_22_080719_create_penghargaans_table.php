<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghargaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghargaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255);
            $table->string('tahun',255);
            $table->string('sifat',255);
            $table->text('keterangan');
            $table->string('foto',255);
            $table->string('foto1',255);
            $table->string('foto2',255);
            $table->integer('inovator_id')->unsigned();
            $table->foreign('inovator_id')->references('id')->on('inovators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('penghargaans');
    }
}
