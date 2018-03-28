<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerapaninovasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerapaninovasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi',255);
            $table->string('hasil',255);
            $table->string('foto',255);
            $table->string('video',255);
            $table->integer('inovasi_id')->unsigned();
            $table->foreign('inovasi_id')->references('id')->on('inovasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerapaninovasis');
    }
}
