<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('superadmin_id')->unsigned();
            $table->foreign('superadmin_id')->references('id')->on('superadmins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->string('nama');
            $table->string('nama_file');
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
        Schema::drop('materis');
    }
}
