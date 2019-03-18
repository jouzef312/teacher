<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classe');
            $table->string('color');
            $table->unsignedBigInteger('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->unsignedBigInteger('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->time('start');
            $table->time('end');
            $table->integer('day');
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
        Schema::dropIfExists('emploits');
    }
}
