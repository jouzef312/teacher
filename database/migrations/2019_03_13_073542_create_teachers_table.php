<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
           $table->string('prenom');
           $table->integer('cin')->unique();
           $table->date('naissance');
           $table->string('adresse');
           $table->integer('telephone');
           $table->string('email')->unique();
           $table->string('diplome');
           $table->string('institut_origin');
           

            $table->unsignedBigInteger('annee_id')->unsigned();
            $table->foreign('annee_id')->references('id')->on('annees');
             $table->unsignedBigInteger('institut_id')->unsigned();
            $table->foreign('institut_id')->references('id')->on('instituts');
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
        Schema::dropIfExists('teachers');
    }
}
