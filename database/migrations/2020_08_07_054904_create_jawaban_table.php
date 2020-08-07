<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            $table->timestamps();

            // $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            // $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
