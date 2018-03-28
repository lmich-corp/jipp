<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerapans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi');
            $table->string('hasil');
            $table->string('foto');
            $table->string('video');
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
        Schema::drop('penerapans');
    }
}
