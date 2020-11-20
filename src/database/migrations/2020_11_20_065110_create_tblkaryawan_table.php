<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkaryawan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodepegawai');
            $table->foreign('kodepegawai')->references("id")->on("users");
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->date('tgllahir');
            $table->enum('jeniskelamin',['l','p']);
            $table->string('nohp',15);
            $table->string('bagian',20);
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
        Schema::dropIfExists('tblkaryawan');
    }
}
