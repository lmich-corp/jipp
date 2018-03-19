<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeinovasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideinovasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');
            $table->string('ide_inovasi');
            $table->string('saran');
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
        Schema::drop('ideinovasis');
    }
}
