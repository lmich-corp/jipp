<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeprofilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideprofils', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');

            $table->string('nama');
            $table->string('nik');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('lembaga');
            $table->text('alamat');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('no_telp');
            $table->string('email');
            $table->string('foto_profil');

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
        Schema::drop('ideprofils');
    }
}
