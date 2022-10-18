<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username');
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->date('tanggal_lahir');
            $table->string('handphone');
            $table->string('alamat');
            $table->integer('id_jabatans')->unsigned();
            $table->foreign('id_jabatans')->references('id_jabatan')->on('jabatans')->onDelete('cascade');
            $table->integer('id_bagians')->unsigned();
            $table->foreign('id_bagians')->references('id_bagian')->on('bagians')->onDelete('cascade');
            $table->integer('id_rootJabs')->unsigned();
            $table->foreign('id_rootJabs')->references('id_rootJab')->on('rootjabatans')->onDelete('cascade');
            $table->dateTime('last_login')->nullable();
            $table->enum('authority',['admin','user','sekretaris']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
