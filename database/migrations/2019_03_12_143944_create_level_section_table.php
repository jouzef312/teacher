<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_section', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
             $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');
           
               $table->timestamps();         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        Schema::dropIfExists('level_section');
    }
}
