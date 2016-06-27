<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuruKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guruKaryawan', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama', 50);
            $table->integer('jurusan_id');
            $table->integer('uid');
            $table->string('jabatan', 30);
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
        Schema::drop('guruKaryawan');
    }
}
