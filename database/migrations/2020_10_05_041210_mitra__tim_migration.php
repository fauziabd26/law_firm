<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MitraTimMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_tim', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('kurator_pengurus')->unique();
            $table->string('partdom_dkijkt')->unique();
            $table->string('partdom_samar_kal')->unique();
            $table->string('partdom_batam_kepriau')->unique();
          $table->string('tim_partdom_makas')->unique();
                    $table->string('paralegal')->unique();
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
        Schema::dropIfExists('mitra_tim');
    }
}
