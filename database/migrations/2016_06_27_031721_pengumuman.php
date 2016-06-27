<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pengumuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function(Blueprint $table){
            $table->increments('id');
            $table->string('judul', 50);
            $table->text('pesan');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('uid');
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
        Schema::drop('pengumuman');
    }
}
