<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatans', function (Blueprint $table) {
            $table->increments('id_jabatan');
            $table->string('nama_jabatan');
            $table->integer('id_bagians')->unsigned();
            $table->foreign('id_bagians')->references('id_bagian')->on('bagians')->onDelete('cascade');
            $table->enum('level', ['admin','user','sekretaris']);
            $table->string('parent_jabatan');
            $table->integer('id_rootJabs')->unsigned();
            $table->foreign('id_rootJabs')->references('id_rootJab')->on('rootjabatans')->onDelete('cascade');
            $table->string('keterangan');
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
        Schema::dropIfExists('jabatans');
    }
}
