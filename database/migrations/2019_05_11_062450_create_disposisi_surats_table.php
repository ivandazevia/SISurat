<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposisiSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi_surats', function (Blueprint $table) {
            $table->increments('id_disposisi');
            $table->integer('id_surats')->unsigned();
            $table->foreign('id_surats')->references('id_surat')->on('surats')->onDelete('cascade');
            $table->string('dari');
            $table->integer('untuk');
            $table->string('disposisi_status');
            $table->string('status_surat_disposisi');
            $table->enum('tipe_surat_disposisi', ['internal','eksternal']);
            $table->date('tanggal_disposisi');
            $table->dateTime('waktu_disposisi');
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
        Schema::dropIfExists('disposisi_surats');
    }
}
