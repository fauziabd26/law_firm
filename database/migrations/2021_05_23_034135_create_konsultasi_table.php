<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id('id_konsultasi');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->text('konsul_user', 255)->nullable();
            $table->text('jawaban_konsul', 255)->nullable();
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
        Schema::dropIfExists('konsultasi');
    }
}
