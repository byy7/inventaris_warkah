<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengajuan',function (Blueprint $table){
            $table->id();
            $table->bigInteger('user_id');
            $table->string('nama');
            $table->string('no_hak');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('no_bukutanah');
            $table->string('koderak');
            $table->dateTime('tglpengajuan');
            $table->string('status')->default('menunggu');
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
