<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peminjaman',function (Blueprint $table){
            $table->id();
            $table->string('nama');
            $table->string('no_hak');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('no_bukutanah');
            $table->string('koderak');
            $table->dateTime('tglpeminjaman');
            $table->dateTime('tglpengembalian');
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
        //
    }
}
