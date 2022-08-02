<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->increments('idContrat');
            $table->unsignedInteger('idTypeContrat');
            $table->foreign('idTypeContrat')->references('idTypeContrat')->on('type_contrats');
            $table->date('dateEmbauche');
            $table->string('lieuEmbauche');
            $table->integer('salaireBase');
            $table->string('modeReglement');
            $table->string('frequencePaie');
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
        Schema::dropIfExists('contrats');
    }
}
