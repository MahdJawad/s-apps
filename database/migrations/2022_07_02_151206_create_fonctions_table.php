<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctions', function (Blueprint $table) {
            $table->increments('idFonction');
            $table->unsignedInteger('idDirection');
            $table->foreign('idDirection')->references('idDirection')->on('directions');
            $table->string('intituleFonction');
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
        Schema::dropIfExists('fonctions');
    }
}
