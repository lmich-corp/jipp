<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('superadmin_id')->unsigned();
            $table->foreign('superadmin_id')->references('id')->on('superadmins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')
                                                        ->onDelete('cascade')
                                                        ->onUpdate('cascade');
            $table->string('nama');
            $table->string('nama_file');
            $table->enum('kategori',['kabupaten','provinsi','nasional']);
            $table->dateTime('jadwal');
            $table->string('tempat');
            $table->text('keterangan');
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
        Schema::drop('agendas');
    }
}
