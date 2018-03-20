<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wartas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('superadmin_id')->unsigned();
            $table->foreign('superadmin_id')->references('id')->on('superadmins');

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
        Schema::drop('wartas');
    }
}
