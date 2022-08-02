<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->increments('idBult');
            $table->unsignedInteger('matricule');
            $table->foreign('matricule')->references('matricule')->on('employes');
            $table->UnsignedInteger('idLivre');
            $table->foreign('idLivre')->references('idLivre')->on('livres');
            $table->date('mois');
            $table->date('annee');
            $table->float('nbHeureTravail');
            $table->float('nbHeureSup');
            $table->float('salaireBrute');
            $table->date('datePaieSalaire');
            $table->date('dateCongePaye');
            $table->integer('nbJourF');
            $table->float('netAPaye');
            $table->float('cotisationMutuel');
            $table->float('retenuCNSS');
            $table->float('retenu');
            $table->float('impot');
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
        Schema::dropIfExists('bulletins');
    }
}
