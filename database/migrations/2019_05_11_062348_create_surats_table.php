<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id_surat');
            $table->string('no_surat');
            $table->date('tanggal_surat');
            $table->enum('jenis_surat', ['private','penting','biasa']);
            $table->enum('tipe_surat', ['internal','eksternal','keluar']);
            $table->string('asal_surat');
            $table->string('dari');
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id_user')->on('users')->onDelete('cascade');
            $table->string('tujuan_surat_keluar');
            $table->string('perihal');
            $table->string('tembusan');
            $table->string('no_berkas');
            $table->string('status_surat');
            $table->string('status_disposisi');
            $table->string('file_surat');
            $table->string('file_path');
            $table->string('keterangan');
            $table->date('tanggal_entry');
            $table->dateTime('waktu_entry');
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
        Schema::dropIfExists('surats');
    }
}
