<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndemnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indemnites', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->string('libelle');
            $table->float('valeur');
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
        Schema::dropIfExists('indemnites');
    }
}
