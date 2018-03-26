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
            $table->foreign('superadmin_id')->references('id')->on('superadmins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->string('judul');
            $table->string('nama_file');
            $table->string('nama_file1');
            $table->string('nama_file2');
            $table->enum('kategori',['kabupaten','provinsi','nasional']);
            $table->dateTime('jadwal');
            $table->string('tempat');
            $table->longtext('isi');
            $table->string('meta');
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
        Schema::drop('wartas');
    }
}
