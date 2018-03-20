<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeInovasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ide_inovasis', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ideprofil_id')->unsigned();
            $table->foreign('ideprofil_id')->references('id')->on('ideprofils');

            $table->string('instansi');
            $table->string('bidang');
            $table->text('permasalahan');
            $table->text('ide');

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
        Schema::drop('ide_inovasis');
    }
}
