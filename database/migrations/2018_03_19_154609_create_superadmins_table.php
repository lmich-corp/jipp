<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superadmins', function (Blueprint $table) {
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
            $table->string('no_telp');
            $table->string('email');
            $table->string('foto_profil');

            $table->timestamps();
        });

        Schema::create('dinasprovs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');

            $table->integer('superadmin_id')->unsigned();
            $table->foreign('superadmin_id')->references('id')->on('superadmins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            
            $table->string('nama');
            $table->string('nik');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('lembaga');
            $table->string('alamat');
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
        Schema::drop('superadmins');
        Schema::drop('dinasprovs');
       
    }
}
