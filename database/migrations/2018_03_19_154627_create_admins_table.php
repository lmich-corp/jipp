<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->integer('superadmin_id')->nullable()->unsigned();
            $table->foreign('superadmin_id')->references('id')->on('superadmins')
                                                        
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
    
        Schema::create('dinaskabs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');

            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')
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
    
      Schema::create('inovators', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');

            $table->integer('dinsakab_id')->unsigned();
            $table->foreign('dinsakab_id')->references('id')->on('dinaskabs')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->integer('dinasprov_id')->unsigned();
            $table->foreign('dinasprov_id')->references('id')->on('dinasprovs')
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
        Schema::drop('admins');
        Schema::drop('dinaskabs');
        Schema::drop('inovators');
    }
}
